<?php

namespace App\Http\Controllers;

use App\Models\Ability;
use Illuminate\Http\Request;

class AbilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ability::all();
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
        $abilities = new Ability();

        $abilities->name = $request->name;
        $abilities->description = $request->description;
        $abilities->image = $request->image;
        $abilities->champion_id = $request->champion_id;

        $abilities->save();

        return response()->json($abilities);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ability $ability)
    {
        return Ability::find($ability->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ability $ability)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ability $ability)
    {
        $ability->update($request->all());
        return response()->json($ability);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ability $ability)
    {
        return Ability::destroy($ability->id);
    }
}
