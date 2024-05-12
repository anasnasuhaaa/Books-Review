@extends('admin.layout.master')

@section('title')
    Detail Penulis
@endsection

@section('content')
    <h1>{{ $penulis->nama }}</h1>
    <p>{{ $penulis->bio }}</p>

    <div class="row">
        @forelse ($penulis->listBuku as $item)
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
            <h4>Tidak Ada Buku untuk Penulis Ini</h4>
        @endforelse

    </div>

    <a href="/penulis" class="btn btn-success btn-sm">Kembali</a>
@endsection
