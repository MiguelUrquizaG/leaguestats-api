<?php

namespace App\Http\Controllers;

use App\Models\Bet;
use App\Models\UserBets;
use App\Models\UserProfile;
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
        $userBet = new UserBets();
        $userBet->user_id = $request->user_id;
        $userBet->bet_id = $request->bet_id;
        $userBet->amount = $request->amount;

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

}
