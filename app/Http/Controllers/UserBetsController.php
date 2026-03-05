<?php

namespace App\Http\Controllers;

use App\Models\Bet;
use App\Models\UserBets;
use App\Models\UserProfile;
use App\Models\Setting;
use Illuminate\Http\Request;

class UserBetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userBets = UserBets::with(['user', 'bet'])->get();
        return response()->json($userBets);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Obtener el perfil del usuario
        $userProfile = UserProfile::find($request->user_id);
        
        if (!$userProfile) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
        
        // Verificar si tiene saldo suficiente
        if ($userProfile->balance < $request->amount) {
            return response()->json(['error' => 'Saldo insuficiente'], 400);
        }
        
        // Buscar si ya existe una apuesta
        $existingUserBet = UserBets::where('user_id', $request->user_id)
            ->where('bet_id', $request->bet_id)
            ->first();

        // Restar el dinero del balance
        $userProfile->balance -= $request->amount;
        $userProfile->save();

        if ($existingUserBet) {
            $existingUserBet->amount += $request->amount;
            $existingUserBet->awarded = false;

            if ($request->filled('winner_selected')) {
                $existingUserBet->winner_selected = $request->winner_selected;
            }

            $existingUserBet->save();

            return response()->json($existingUserBet);
        }

        $userBet = new UserBets();
        $userBet->user_id = $request->user_id;
        $userBet->bet_id = $request->bet_id;
        $userBet->amount = $request->amount;
        $userBet->awarded = $request->awarded ?? false;
        $userBet->winner_selected = $request->winner_selected;

        $userBet->save();

        return response()->json($userBet);
    }

    /**
     * Display the specified resource.
     */
    public function show(UserBets $userBet)
    {


        $userBet->load(['user', 'bet']);
        return response()->json($userBet);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserBets $userBet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserBets $userBet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserBets $userBet)
    {
        //
    }

    public function findByUserId(int $userId)
    {
        $userBets = UserBets::with([
            'bet.league',
            'bet.team1',
            'bet.team2',
            'bet.winnerTeam',
        ])->where('user_id', $userId)->get();

        return response()->json($userBets);
    }

        public function distributePrizes(Bet $bet)
        {
            // Obtener el multiplicador premium
            $premiumMultiplier = Setting::where('key', 'premium_multiplier')->first();
            $multiplier = $premiumMultiplier ? floatval($premiumMultiplier->value) : 1.0;

            // Buscar todos los UserBets de esta apuesta
            $userBets = UserBets::where('bet_id', $bet->id)->get();

            foreach ($userBets as $userBet) {
                // Si el usuario seleccionó el equipo ganador
                if ($userBet->winner_selected == $bet->winner_team_id) {
                    // Determinar las odds del equipo ganador
                    $odds = ($bet->winner_team_id == $bet->team1_id) ? $bet->team1_value : $bet->team2_value;
                
                    // Calcular el premio (amount * odds)
                    $prizeAmount = $userBet->amount * $odds;
                
                    // Aplicar multiplicador premium si aplica
                    $userProfile = UserProfile::find($userBet->user_id);
                    if ($userProfile && $userProfile->isPremium) {
                        $prizeAmount *= $multiplier;
                    }
                
                    // Sumar al balance
                    if ($userProfile) {
                        $userProfile->balance += $prizeAmount;
                        $userProfile->save();
                    }
                
                    // Marcar como entregado
                    $userBet->awarded = true;
                    $userBet->save();
                }
            }
        }
}
