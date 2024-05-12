@extends('admin.layout.master')

@section('title')
    Halaman Detail Buku
@endsection

@section('content')
    <a href="/admin/buku" class="btn btn-primary btn-secondary my-3">Kembali</a>

    <div class="card">
        <div class="card-body">
            <h1>{{ $buku->judul }}</h1>
            <h3>{{ $buku->tahun }}</h3>
            <p class="card-text">{{ $buku->sinopsis }}</p>
        </div>

        <hr>
        <h3>List Review</h3>
        @forelse ($buku->listReview as $item)
            <div class="card my-2">
                <div class="card-header">
                    {{ $item->user->name }}
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $item->content }}</p>
                </div>
            </div>
        @empty
            <h4>Belum ada Review</h4>
        @endforelse

        <hr>
        <form action="/admin/review/{{ $buku->id }}" method="POST">
            @csrf
            <textarea name="content" placeholder="Isi Review" class="form-control" cols="30" rows="10"></textarea>
            <input type="submit" class="btn btn-primary my-3" value="Tambah">

        </form>

    </div>
@endsection
