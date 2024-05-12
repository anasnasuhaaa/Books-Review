<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;

class GenreController extends Controller
{
    public function create()
    {
        return view('admin.genre.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'descrip' => 'required'
        ]);

        DB::table('genre')->insert([
            'nama' => $request['nama'],
            'descrip' => $request['descrip']
        ]);

        return redirect('/genre');
    }

    public function index()
    {
        $genre = DB::table('genre')->get();

        return view('admin.genre.tampil', ['genre' => $genre]);
    }

    public function show($id)
    {
        //$genre = DB::table('genre')->where('id', $id)->first();
        $genre = Genre::find($id);
        return view('admin.genre.detail', ['genre' => $genre]);
    }

    public function edit($id)
    {
        $genre = DB::table('genre')->where('id', $id)->first();

        return view('admin.genre.edit', ['genre' => $genre]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'descrip' => 'required'
        ]);

        DB::table('genre')
            ->where('id', $id)
            ->update(
                [
                    'nama' => $request->nama,
                    'descrip' => $request->descrip
                ]
            );

        return redirect('/genre');
    }

    public function destroy($id)
    {
        DB::table('genre')->where('id', $id)->delete();

        return redirect('/genre');
    }
}
