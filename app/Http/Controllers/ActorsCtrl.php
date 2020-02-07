<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use App\Models\Actors;
class ActorsCtrl extends Controller
{
    //get actors details
    public function actorDetails($id)
    {
        # code...
        $actor = Actors::with('movies')->findOrFail($id);

        return view('actorDetails',compact('actor'));
    }
}
