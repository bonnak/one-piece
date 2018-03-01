<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monga;

class MongaController extends Controller
{
    public function index()
    {
        $mongas = Monga::latest()->paginate(16);

        return view('monga', compact('mongas'));
    }

    public function show($id)
    {
        $monga = Monga::find($id);

        return view('monga-show', compact('monga'));
    }
}
