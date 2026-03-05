<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use App\Models\Habilidades;
use Illuminate\Http\Request;

class ChampionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Champion::all();
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
        $champion = new Champion();
        $champion->name = $request->name;
        $champion->nickname = $request->nickname;
        $champion->image = $request->image;
        $champion->class = $request->class;

        $champion->save();
        return response()->json($champion);
    }

    /**
     * Display the specified resource.
     */
    public function show(Champion $champion)
    {
        return Champion::find($champion->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Champion $champion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Champion $champion)
    {
        $champion->update($request->all());
        return response()->json($champion);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Champion $champion)
    {
        return Champion::destroy($champion->id);
    }
}
