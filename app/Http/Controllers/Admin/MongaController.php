<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Monga;
use App\MongaPage;

class MongaController extends Controller
{
    public function index()
    {
        $mongas = Monga::with('pages')->latest()->paginate();

        return view('admin.monga', compact('mongas'));
    }

    public function edit($id)
    {
        $monga = Monga::find($id);
        $monga_pages = $monga->pages()->paginate();

        return view('admin.monga-edit', compact('monga', 'monga_pages'));
    }

    public function create()
    {
        return view('admin.monga-create');
    }

    public function destroy($id)
    {
        Monga::where('id', $id)->delete();

        return redirect()->back();
    }
}
