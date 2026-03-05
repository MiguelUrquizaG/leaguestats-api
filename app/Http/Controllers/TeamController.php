<?php

namespace App\Http\Controllers;

use App\Models\Bet;
use App\Models\Game;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::with(['league', 'country', 'players'])->get();
        return response()->json($teams);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $team = new Team();
        $team->name = $request->name;
        $team->logo = $request->logo;
        $team->country_id = $request->country_id;
        $team->league_id = $request->league_id;
        $team->lost_matches = $request->lost_matches;
        $team->won_matches = $request->won_matches;
        $team->team_wallpaper = $request->team_wallpaper;

        $team->save();

        return response()->json($team);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        $team->load(['league', 'country', 'players']);
        return response()->json($team);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $team->update($request->all());
        return response()->json($team);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $team)
    {
        $hasBets = Bet::where('team1_id', $team)
            ->orWhere('team2_id', $team)
            ->exists();

        $hasGames = Game::where('home_team_id', $team)
            ->orWhere('away_team_id', $team)
            ->exists();

        if ($hasBets || $hasGames) {
            return response()->json([
                'error' => 'No se puede eliminar el equipo porque forma parte de un partido o de una apuesta existente.'
            ], 403);
        }

        Team::destroy($team);

        return response()->json([
            'message' => 'Equipo eliminado correctamente.'
        ], 200);
    }

    public function findTeamsByTeam($teamid)
    {
        $players = Player::where('team_id', $teamid)->get();

        return response()->json($players);
    }
}
