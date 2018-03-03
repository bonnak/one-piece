<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MongaPage;
use Illuminate\Support\Facades\Storage;

class MongaPageController extends Controller
{
    public function edit($monga_id, $id)
    {
        $monga_page = MongaPage::find($id);

        return view('admin.monga-page-edit', compact('monga_page'));
    }

    public function update($monga_id, $id)
    {
        $monga_page = MongaPage::where('id', $id)->where('monga_id', $monga_id)->first();

        if(request()->hasFile('file'))
        {
            //Storage::disk('spaces')->delete($monga_page->file_name);
            $file_path = request()->file->store("monga/{$monga_id}", 'spaces'); 
        }        

        $monga_page->update([
            'page' => request()->page,
            'file_name' => request()->hasFile('file') ? $file_path : $monga_page->file_name
        ]);

        return redirect()->to('admin/monga/' . $monga_id . '/edit');
    }

    public function create($monga_id)
    {
        return view('admin.monga-page-create', compact('monga_id'));
    }

    public function store($monga_id)
    {
        $file_path = request()->file->store("monga/{$monga_id}", 'spaces');
        
        MongaPage::create([
            'monga_id' => $monga_id,
            'page' => request()->page,
            'file_name' => $file_path
        ]);

        return redirect()->to('admin/monga/' . $monga_id . '/edit');
    }

    public function destroy($monga_id, $id)
    {
        $monga_page = MongaPage::find($id);

        

        $monga_page->delete();

        return redirect()->to('admin/monga/' . $monga_id . '/edit');
    }
}
