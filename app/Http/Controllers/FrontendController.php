<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Review;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class FrontendController extends Controller
{
    //
    public function home()
    {
        $books = Buku::all();

        return view('frontend.home', ['books' => $books]);
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function book()
    {
        $books = Buku::all();
        $genre = DB::table('genre')->get();

        return view('frontend.buku', ['books' => $books, 'genre' => $genre]);
    }
    public function show(string $id)
    {
        $buku = Buku::find($id);
        $buku_lainnya = Buku::all()->where('id', '!=', $id);
        $total_review = Review::where(['buku_id' => $id])->count();
        $genre = DB::table('genre')->get();


        return view('frontend.detail', ['buku' => $buku, 'total_review' => $total_review, 'buku_lainnya' => $buku_lainnya, 'genre' => $genre]);
    }
}
