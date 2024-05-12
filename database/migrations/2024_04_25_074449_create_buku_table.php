<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('sinopsis');
            $table->integer('tahun');
            $table->string('poster');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genre');
            $table->unsignedBigInteger('penulis_id');
            $table->foreign('penulis_id')->references('id')->on('penulis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
