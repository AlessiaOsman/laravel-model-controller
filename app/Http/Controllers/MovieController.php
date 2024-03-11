<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id){
        $movie = Movie::first();
        return view('movies.show', compact('movie'));
    }
}
