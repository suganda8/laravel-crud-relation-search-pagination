<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Kategori;

class MovieController extends Controller
{
    public function index()
    {
        if (request()->has('search')) {
            $movies = Movie::where('title', 'LIKE', '%'.request()->search.'%')->paginate(1);
        } else {
            $movies = Movie::paginate(1);
        }

        return view('movie.index', ['movies' => $movies]);
    }

    public function add(Request $request) {
        $kategories = Kategori::all();

        return view('movie.add', [
            'kategories' => $kategories,
        ]);
    }

    public function create(Request $request) {
        $movie = Movie::create([
            'title' => $request->title,
            'price' => $request->price,
            'kategori_id' => $request->kategori
        ]);

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $kategories = Kategori::all();
        $movie = Movie::findOrFail($id);
        return view('movie.edit', [
            'movie' => $movie,
            'kategories' => $kategories
        ]);
    }

    public function update(Request $request) {
        Movie::where('id', $request->id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'kategori_id' => $request->kategori
        ]);

        return redirect()->route('index');
    }

    public function delete($id) {
        Movie::findOrFail($id)->delete();
        
        return redirect()->route('index');
    }
}
