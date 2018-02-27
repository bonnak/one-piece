<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Monga;

class HomeController extends Controller
{
    public function index()
    {
       $movies = Movie::limit(20)->latest()->get();
       $mongas = Monga::with('pages')->limit(20)->latest()->get();

       return view('home', compact('movies', 'mongas'));
    }
}
