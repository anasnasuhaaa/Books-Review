<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = ['judul','sinopsis','tahun','poster','genre_id','penulis_id'];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'penulis_id');
    }

    public function listReview()
    {
        return $this->hasMany(Review::class,'buku_id');
    }
}
