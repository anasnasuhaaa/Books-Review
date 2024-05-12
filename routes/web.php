<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// FrontEnd
Route::get('/', [FrontendController::class, 'home']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/buku', [FrontendController::class, 'book']);
Route::get('/buku/{id}', [FrontendController::class, 'show']);


Route::middleware(['auth'])->group(function () {
  Route::get('/dashboard', [IndexController::class, 'index']);
  //Route CRUD Table Genre
  Route::get('/genre/create', [GenreController::class, 'create']);

  Route::post('/genre', [GenreController::class, 'store']);

  Route::get('/genre', [GenreController::class, 'index']);

  Route::get('/genre/{genre_id}', [GenreController::class, 'show']);

  Route::get('/genre/{genre_id}/edit', [GenreController::class, 'edit']);

  Route::put('/genre/{genre_id}', [GenreController::class, 'update']);

  Route::delete('/genre/{genre_id}', [GenreController::class, 'destroy']);


  //Route CRUD Table Penulis

  Route::get('/penulis/create', [PenulisController::class, 'create']);

  Route::post('/penulis', [PenulisController::class, 'store']);

  Route::get('/penulis', [PenulisController::class, 'index']);

  Route::get('/penulis/{penulis_id}', [PenulisController::class, 'show']);

  Route::get('/penulis/{penulis_id}/edit', [PenulisController::class, 'edit']);

  Route::put('/penulis/{penulis_id}', [PenulisController::class, 'update']);

  Route::delete('/penulis/{penulis_id}', [PenulisController::class, 'destroy']);

  // Route Profile
  Route::resource('profile', ProfileController::class)->only(['index', 'update']);

  //Review
  Route::post('/admin/review/{id}', [ReviewController::class, 'store']);
  Route::post('/review/{id}', [ReviewController::class, 'storeuser']);

  //CRUD Buku resources
  Route::resource('admin/buku', BukuController::class);
});


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
  \UniSharp\LaravelFilemanager\Lfm::routes();
});

// Auth
Auth::routes();
