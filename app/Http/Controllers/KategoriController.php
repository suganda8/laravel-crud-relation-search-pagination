<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {   
        if (request()->has('search')) {
            $kategories = Kategori::where('title', 'LIKE', '%'.request()->search.'%')->paginate(1);
        } else {
            $kategories = Kategori::paginate(1);
        }

        return view('kategori.index', ['kategories' => $kategories]);
    }

    public function create(Request $request) {
        $x = new Kategori();
        $x->title = $request->title;
        $x->description = $request->description;
        $x->pict = $request->pict;
        $x->views = $request->views;
        $x->save();

        return redirect()->route('kategori.index');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', ['kategori' => $kategori]);
    }

    public function update(Request $request) {
        Kategori::where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'pict' => $request->pict,
            'views' => $request->views
        ]);

        return redirect()->route('kategori.index');
    }

    public function delete($id) {
        $kategori = Kategori::findOrFail($id);

        $kategori->delete();
        
        return redirect()->route('kategori.index');
    }
}
