<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movies::all();
        return view('home')->with('movies', $movies);
    }

    public function upcoming()
    {
        $movies = Movies::all();
        return view('upcoming')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'movieName' => 'required|string',
            'movieRating' => 'required|string',
            'movieFormat' => 'required|string',
            'movieDuration' => 'required|integer',
            'status' => 'required|integer',
            'picture' => 'image|required|max:1999|mimes:jpg,png,jpeg'
        ]);

        if($request->hasFile('picture')){
            $extension = $request->file('picture')->getClientOriginalExtension();
            $file_name = $request->movieName.'.'.$extension;
            $path = $request->file('picture')->storeAs('public/images/movies', $file_name);
        }

        Movies::create([
            'movieName' => $request->movieName,
            'movieRating' => $request->movieRating,
            'movieFormat' => $request->movieFormat,
            'movieDuration' => $request->movieDuration,
            'status' => $request->status,
            'picture' => $file_name
        ]);

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movies::find($id);
        return view('details')->with('movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movies $movie)
    {
        return view('movies.edit')->with('movie', $movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movies $movie)
    {
        $request->validate([
            'movieName' => 'required|string',
            'movieRating' => 'required|string',
            'movieFormat' => 'required|string',
            'movieDuration' => 'required|integer',
            'status' => 'required|integer',
            'picture' => 'nullable|image|max:1999|mimes:jpg,png,jpeg'
        ]);

        if($request->hasFile('picture_new')){
            $extension = $request->file('picture_new')->getClientOriginalExtension();
            $file_name = $request->movieName.'.'.$extension;
            $path = $request->file('picture_new')->storeAs('public/images/movies', $file_name);
        } else {
            $file_name = request('picture_old');
        }

        $movie->update([
            'movieName' => $request->movieName,
            'movieRating' => $request->movieRating,
            'movieFormat' => $request->movieFormat,
            'movieDuration' => $request->movieDuration,
            'status' => $request->status,
            'picture' => $file_name
        ]);

        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movies::find($id);
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
