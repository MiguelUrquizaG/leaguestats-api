<?php

namespace App\Http\Controllers;

use App\Models\Bet;
use App\Models\Team;
use Illuminate\Http\Request;

class BetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Bet::all();
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
        $bet = new Bet();
        $bet->date = $request->date;
        $bet->time = $request->time;
        $bet->league_id = $request->league_id;
        $bet->team1_id = $request->team1_id;
        $bet->team2_id = $request->team2_id;
        $bet->team1_value = $request->team1_value;
        $bet->team2_value = $request->team2_value;
        $bet->instance = $request->instance;
        $bet->status = $request->status;
        $bet->winner_team_id = $request->winner_team_id;
        

        $bet->save();

        return response()->json($bet);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bet $bet)
    {
        return Bet::find($bet->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bet $bet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bet $bet)
    {
        $bet->update($request->all());
        return response()->json($bet);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        return Bet::destroy($id);
    }

    public function calculateValues(int $team1_id, int $team2_id): array
    {
        $team1 = Team::find($team1_id);
        $team2 = Team::find($team2_id);

        if (!$team1 || !$team2) {
            return [];
        }

        $winrate1 = $team1->won_matches / max(1, $team1->won_matches + $team1->lost_matches);
        $winrate2 = $team2->won_matches / max(1, $team2->won_matches + $team2->lost_matches);

        $total = $winrate1 + $winrate2;

        return [
            'team1_value' => round($total / max($winrate1, 0.01), 2),
            'team2_value' => round($total / max($winrate2, 0.01), 2),
        ];
    }

    public function calculate(Request $request){
        $data = $this->calculateValues(
            $request->team1_id,
            $request->team2_id
        );


        return response()->json($data);
    }
}
