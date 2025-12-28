<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return news::all();
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
        $new = new news();
        $new->title = $request->title;
        $new->description = $request->description;
        $new->photo = $request->photo;
        $new->type = $request->type;

        $new->save();

        return response()->json($new);
    }

    /**
     * Display the specified resource.
     */
    public function show(news $news)
    {
        return news::find($news->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(news $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, news $news)
    {
        $news -> update($request->all());
        return response()->json($news);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $news)
    {
        return news::destroy($news);
    }
}
