<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use App\Models\Actors;
class PagesCtrl extends Controller
{
    //

    //movies Page get all the movies
    public function movies()
    {
        # code...
        $movies = Movies::latest()->get();

        return view('movies',compact('movies'));
    }

    // get movie details
    public function movieDetails($id)
    {
        # code...
        $movie = Movies::find($id);

        $actors = $movie->actors;

        return view('movieDetails',compact('movie','actors'));
    }

    //get actors details
    public function actorDetails($id)
    {
        # code...
        $actor = Actors::find($id);

        $movies = $actor->movies;

        return view('actorDetails',compact('movies','actor'));
    }

    //add movie
    public function addMovie(Request $request)
    {
        # code...

        //check auth
        if(auth()->check()){

        //validate the request
        $this->validate(request(),[
            'name' => 'required|string|max:225',
        ]);

        //store new record
        Movies::create($request->all());

        return redirect()->route('movies')->with('success','Movie Added Successfully');
        }else{
            return back();
        }

    }
}
