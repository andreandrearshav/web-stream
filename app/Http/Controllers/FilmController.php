<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $films = Film::orderBy('created_at', 'desc')->get();
        return view('index', compact('films'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'genre' => 'required',
            'poster' => 'nullable|image',
            'video' => 'required|mimes:mp4,avi,mkv|max:10000',
        ]);

        $film = new Film();
        $film->title = $request->title;
        $film->description = $request->description;
        $film->genre = $request->genre;

        // Upload posterx
        if ($request->hasFile('poster')) {
            $posterName = time() . '.' . $request->poster->extension();
            $request->poster->move(public_path('posters'), $posterName);
            $film->poster = $posterName;
        }

        // Upload video
        if ($request->hasFile('video')) {
            $videoName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('videos'), $videoName);
            $film->video = $videoName;
        }

        $film->save(); // Debug data yang disimpan
        return redirect()->route('films.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
    }
}
