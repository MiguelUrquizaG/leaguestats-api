<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Player::all();
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
        $player = new Player();
        $player->name = $request->name;
        $player->photo = $request->photo;
        $player->country_id = $request->country_id;
        $player->team_id = $request->team_id;
        $player->kda = $request->kda;
        $player->position = $request->position;
        $player->birth_date = $request->birth_date;

        $player->save();

        return response()->json($player);
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return Player::find($player->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        $player -> update($request->all());
        return response()->json($player);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $player)
    {
        return Player::destroy($player);
    }
}
