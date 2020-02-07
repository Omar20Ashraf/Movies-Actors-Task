<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesCtrl extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = Movies::latest()->get();

        return view('movies',compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validate the request
        $this->validate(request(),[
            'name' => 'required|string|max:225',
        ]);

        //store new record
        Movies::create($request->all());

        return redirect()->route('movies.index')->with('success','Movie Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $movie = Movies::with('actors')->findOrFail($id);

        return view('movieDetails',compact('movie'));
    }
}
