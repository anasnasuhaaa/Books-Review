<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Penulis;
use App\Models\Buku;
use File;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        $buku = Buku::all();

        return view('admin.buku.tampil', ['buku' => $buku]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::all();
        $penulis = Penulis::all();

        return view('admin.buku.tambah', ['genre' => $genre, 'penulis' => $penulis]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'poster' => 'required|mimes:jpg,jpeg,png|max:2048',
            'judul' => 'required',
            'sinopsis' => 'required',
            'tahun' => 'required',
            'genre_id' => 'required',
            'penulis_id' => 'required'
        ]);

        $posterName = time() . '.' . $request->poster->extension();

        $request->poster->move(public_path('cover'), $posterName);

        Buku::create([
            'judul' => $request->input('judul'),
            'sinopsis' => $request->input('sinopsis'),
            'tahun' => $request->input('tahun'),
            'genre_id' => $request->input('genre_id'),
            'penulis_id' => $request->input('penulis_id'),
            'poster' => $posterName
        ]);

        return redirect('buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buku = Buku::find($id);

        return view('admin.buku.detail', ['buku' => $buku]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buku = Buku::find($id);
        $genre = Genre::all();
        $penulis = Penulis::all();

        return view('admin.buku.edit', ['buku' => $buku, 'genre' => $genre, 'penulis' => $penulis]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'poster' => 'mimes:jpg,jpeg,png|max:2048',
            'judul' => 'required',
            'sinopsis' => 'required',
            'tahun' => 'required',
            'genre_id' => 'required',
            'penulis_id' => 'required'
        ]);

        $buku = Buku::find($id);

        if ($request->has('poster')) {
            $path = 'cover/';
            File::delete($path . $buku->poster);

            $posterName = time() . '.' . $request->poster->extension();

            $request->poster->move(public_path('cover'), $posterName);

            $buku->poster = $posterName;
        }

        $buku->judul = $request->input('judul');
        $buku->sinopsis = $request->input('sinopsis');
        $buku->tahun = $request->input('tahun');
        $buku->genre_id = $request->input('genre_id');
        $buku->penulis_id = $request->input('penulis_id');

        $buku->save();

        return redirect('/admin/buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::find($id);

        $path = 'cover/';
        File::delete($path . $buku->poster);

        $buku->delete();

        return redirect('/buku');
    }
}
