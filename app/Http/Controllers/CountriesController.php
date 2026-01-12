<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $countries = Countries::all();
        \Log::info('Countries data:', $countries->toArray());
        return response()->json($countries);
        //return Countries::where('countries',auth() ->id()->get());
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
        $country = new Countries();
        $country->name = $request->name;
        $country->flag = $request->flag;

        $country->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(int $country)
    {
        return Countries::find($country);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(countries $countries)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Countries $country)
    {
        $country -> update(attributes: $request->all());
        return response()->json($country);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $country)
    {
        return Countries::destroy($country);
    }
}
