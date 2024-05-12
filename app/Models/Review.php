<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review';

    protected $fillable = ['users_id','buku_id','content'];

    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
