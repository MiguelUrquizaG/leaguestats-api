<?php

namespace App\Http\Controllers;

use App\Models\match_up;
use App\Models\Team;
use Illuminate\Http\Request;

class MatchUpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return match_up::all();
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
        $matchup = new match_up();
        $matchup->game_id = $request->game_id;
        $matchup->winner_team_id = $request->winner_team_id;
        $matchup->home_team_kills = $request->home_team_kills;
        $matchup->home_team_gold = $request->home_team_gold;
        $matchup->away_team_kills = $request->away_team_kills;
        $matchup->away_team_gold = $request->away_team_gold;
        $matchup->home_team_side = $request->home_team_side;
        $matchup->away_team_side = $request->away_team_side;


        // $team = Team::find($matchup->winner_team_id);

        // if (!$team) {
        //     return response()->json(['error' => 'Team not found'], 404);
        // }

        // $team->won_matches++;
        // $team->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(match_up $match_up)
    {
        return match_up::find($match_up->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(match_up $match_up)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, match_up $match_up)
    {
        $match_up->update($request->all());
        return response()->json($match_up);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $match_up)
    {
        return match_up::destroy($match_up);
    }


}
