<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return League::all();
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
        $league = new League();
        $league ->name = $request->name;
        $league->logo = $request->logo;
        $league->country_id = $request ->country_id;

        $league->save();

        return response()->json($league);
    }

    /**
     * Display the specified resource.
     */
    public function show(League $league)
    {
        return League::find($league->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(League $league)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, League $league)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $league)
    {
        return League::destroy($league);
    }
}
