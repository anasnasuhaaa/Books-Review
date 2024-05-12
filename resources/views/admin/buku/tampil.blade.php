@extends('admin.layout.master')

@section('title')
    Halaman List Buku
@endsection

@section('content')
    @auth

        <a href="/admin/buku/create" class="btn btn-primary btn-sm my-3">Tambah</a>
    @endauth

    <div class="row">
        @forelse ($buku as $item)
            <div class="col-3">
                <div class="card">
                    <img src="{{ asset('cover/' . $item->poster) }}" class="card-img-top" height="300px" alt="...">

                    <div class="card-body">
                        <h1>{{ $item->judul }}</h1>
                        <span class="badge badge-secondary">{{ $item->genre->nama }}</span>
                        <span class="badge badge-secondary">{{ $item->penulis->nama }}</span>
                        <p class="card-text">{{ Str::limit($item->sinopsis, 100, ' ...') }}</p>
                        <a href="/admin/buku/{{ $item->id }}" class="btn btn-primary btn-block">Detail</a>
                        @auth

                            <div class="row my-2">
                                <div class="col">
                                    <a href="/admin/buku/{{ $item->id }}/edit" class="btn btn-warning btn-block">Edit</a>
                                </div>
                                <div class="col">
                                    <form action="/admin/buku/{{ $item->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <input type="submit" class="btn btn-danger btn-block" value="Delete">
                                    </form>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        @empty
            <h4>Buku Belum diinputkan</h4>
        @endforelse

    </div>
@endsection
