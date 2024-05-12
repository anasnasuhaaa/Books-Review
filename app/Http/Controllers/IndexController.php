<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function index()
    {
        $total_buku = Buku::all()->count();
        $total_penulis = DB::table('penulis')->get()->count();
        $total_genre = DB::table('genre')->get()->count();
        $total_review = Review::all()->count();
        return view('admin.dashboard', ['total_buku' => $total_buku, 'total_penulis' => $total_penulis, 'total_genre' => $total_genre, 'total_review' => $total_review]);
    }
}
