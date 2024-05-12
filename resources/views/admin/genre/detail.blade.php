@extends('admin.layout.master')

@section('title')
    Detail Genre
@endsection

@section('content')
    <h1>{{ $genre->nama }}</h1>
    <p>{{ $genre->descrip }}</p>

    <div class="row">
        @forelse ($genre->listBuku as $item)
            <div class="col-3">
                <div class="card">
                    <img src="{{ asset('cover/' . $item->poster) }}" class="card-img-top" height="300px" alt="...">

                    <div class="card-body">
                        <h1>{{ $item->judul }}</h1>
                        <span class="badge badge-secondary">{{ $item->genre->nama }}</span>
                        <span class="badge badge-secondary">{{ $item->penulis->nama }}</span>
                        <p class="card-text">{{ Str::limit($item->sinopsis, 100, ' ...') }}</p>
                        <a href="/buku/{{ $item->id }}" class="btn btn-primary btn-block">Detail</a>

                    </div>
                </div>
            </div>
        @empty
            <h4>Tidak Ada Buku di Genre Ini</h4>
        @endforelse

    </div>

    <a href="/genre" class="btn btn-success btn-sm">Kembali</a>
@endsection
