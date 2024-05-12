<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penulis;

class PenulisController extends Controller
{
    public function create()
    {
        return view('admin.penulis.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'bio' => 'required'
        ]);

        DB::table('penulis')->insert([
            'nama' => $request['nama'],
            'bio' => $request['bio']
        ]);

        return redirect('/penulis');
    }

    public function index()
    {
        $penulis = DB::table('penulis')->get();

        return view('admin.penulis.tampil', ['penulis' => $penulis]);
    }

    public function show($id)
    {
        //$penulis = DB::table('penulis')->where('id', $id)->first();
        $penulis = Penulis::find($id);

        return view('admin.penulis.detail', ['penulis' => $penulis]);
    }

    public function edit($id)
    {
        $penulis = DB::table('penulis')->where('id', $id)->first();

        return view('admin.penulis.edit', ['penulis' => $penulis]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'bio' => 'required'
        ]);

        DB::table('penulis')
            ->where('id', $id)
            ->update(
                [
                    'nama' => $request->nama,
                    'bio' => $request->bio
                ]
            );

        return redirect('/penulis');
    }

    public function destroy($id)
    {
        DB::table('penulis')->where('id', $id)->delete();

        return redirect('/penulis');
    }
}
