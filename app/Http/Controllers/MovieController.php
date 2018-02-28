<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::paginate();

        return view('movie', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::find($id);

        return view('movie-show', compact('movie'));
    }
}
