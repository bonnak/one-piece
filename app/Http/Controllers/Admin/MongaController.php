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
        $mongas = Monga::with('pages')->latest('chapter')->paginate();

        return view('admin.monga', compact('mongas'));
    }

    public function edit($id)
    {
        $monga = Monga::find($id);
        $monga_pages = $monga->pages()->paginate();

        return view('admin.monga-edit', compact('monga', 'monga_pages'));
    }

    public function update($id)
    {
        $monga = Monga::find($id);

        $monga->update(request()->all());

        return redirect()->to('admin/monga');
    }

    public function create()
    {
        return view('admin.monga-create');
    }

    public function store()
    {
        Monga::create(array_merge(request()->all(), ['user_id' => auth()->user()->id]));

        return redirect()->to('admin/monga');
    }

    public function destroy($id)
    {
        Monga::where('id', $id)->delete();

        return redirect()->back();
    }
}
