<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Team::all();
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

        $team->save();

        return response()->json($team);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return Team::find($team->id);
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
        $team -> update($request->all());
        return response()->json($team);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $team)
    {
        return Team::destroy($team);
    }
}
