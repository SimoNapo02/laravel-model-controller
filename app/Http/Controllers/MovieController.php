<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//uso Movie
use App\Movie;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::all();

        return view('movie-library', compact('movies'));
    }
}
