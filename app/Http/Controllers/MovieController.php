<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $movies = Movie::with('genre')->get();
        return view('movie.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $genres = DB::table('genres')->get();
        return view('movie.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request, Movie $movie)
    {
        //
        $movie->create($request->all());
        
        return redirect()->route('movie.index')->with(['success' => 'Data '.$request['title'].' berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
        $genres = Genre::all();
        return view('movie.update', compact('movie', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        //
        $movie->update($request->all());
        
        return redirect()->route('movie.index') ->with(['success' => 'Data '.$request['title'].' berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
        $movie->delete();
        
        return redirect()->route('movie.index') ->with(['success' => 'Data '.$movie['title'].' berhasil dihapus']);
    }
}
