<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'genre';

    protected $fillable = ['nama','descrip'];

    public function listBuku()
    {
        return $this->hasMany(Buku::class);
    }
}
