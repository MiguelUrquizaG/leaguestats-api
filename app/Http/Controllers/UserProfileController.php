<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // En lugar de devolver solo los perfiles:
        // return UserProfile::all();

        // Devuelves los perfiles con sus relaciones ya cargadas:
        return UserProfile::with(['country', 'team', 'league', 'user'])->get();
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
        $userProfile = new UserProfile();

        $userProfile->username = $request->username;
        $userProfile->rated_matches = $request->rated_matches;
        $userProfile->followers = $request->followers;
        $userProfile->country_id = $request->country_id;
        $userProfile->user_id = $request->user_id;
        $userProfile->banned = $request->banned;
        $userProfile->team_id = $request->team_id;
        $userProfile->league_id = $request->league_id;
        $userProfile->isPremium = $request->isPremium;
        $userProfile->balance = $request->balance;

        $userProfile->save();

        return response()->json($userProfile);

    }

    /**
     * Display the specified resource.
     */
    public function show(UserProfile $usersProfile)
    {
        return response()->json($usersProfile);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserProfile $userProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }

    public function findUser(int $idUser)
    {
        return User::find($idUser);
    }

    public function changeAccountStatus(int $id)
    {
        $user = UserProfile::find($id);

        if ($user->banned) {
            $user->banned = 0;
        } else {
            $user->banned = 1;
        }

        $user->save();
    }

    public function findByEmail(string $email)
    {
        // Buscamos el perfil que TENGA un usuario con ese email
        $profile = UserProfile::whereHas('user', function ($query) use ($email) {
            $query->where('email', $email);
        })->with(['user', 'country', 'team'])->first(); // Cargamos relaciones para que no venga vacío

        if (!$profile) {
            return response()->json(['message' => 'Perfil no encontrado para ese email'], 404);
        }

        return response()->json($profile);
    }
    public function deposit(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1'
        ]);

        $user = auth()->user();

        // Buscamos el perfil usando el modelo (ajusta el nombre si es distinto)
        $userProfile = UserProfile::where('user_id', $user->id)->first();

        if ($userProfile) {
            $userProfile->balance += $request->amount;
            $userProfile->save();

            return response()->json([
                'message' => 'Saldo añadido correctamente',
                'balance' => $userProfile->balance
            ], 200);
        }

        return response()->json(['message' => 'Perfil no encontrado'], 404);
    }
}
