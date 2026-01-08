<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\match_up;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Game::all();
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
        $game = new Game();
        $game->home_team_id = $request->home_team_id;
        $game->away_team_id = $request->away_team_id;
        $game->max_games = $request->max_games;
        $game->home_team_score = $request->home_team_score;
        $game->away_team_score = $request->away_team_score;
        $game->is_active = $request->is_active;
        $game->league_id = $request->league_id;

        $game->save();

        $matchups = $request->input('matchUpList', []);


        foreach ($matchups as $matchup) {
            match_up::create(array_merge($matchup, [
                'game_id' => $game->id
            ]));
        }


        return response()->json($game);
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return Game::find($game->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $game->update($request->all());
        return response()->json($game);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $game)
    {
        return Game::destroy($game);
    }
}
