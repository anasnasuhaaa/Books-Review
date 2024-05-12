<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\Auth;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store($id, Request $request)
    {
        $users_id = Auth::id();
        $buku_id = $id;

        $request->validate([
            'content' => 'required'
        ]);

        Review::create([
            'content' => $request->input('content'),
            'users_id' => $users_id,
            'buku_id' => $buku_id,
        ]);
        Alert::success('Berhasil', 'Berhasil Menambahkan Review Baru');

        return redirect('admin/buku/' . $buku_id);
    }
    public function storeuser($id, Request $request)
    {
        $users_id = Auth::id();
        $buku_id = $id;

        $request->validate([
            'content' => 'required'
        ]);

        Review::create([
            'content' => $request->input('content'),
            'users_id' => $users_id,
            'buku_id' => $buku_id,
        ]);
        Alert::success('Berhasil', 'Berhasil Menambahkan Review Baru');

        return redirect('buku/' . $buku_id);
    }
}
