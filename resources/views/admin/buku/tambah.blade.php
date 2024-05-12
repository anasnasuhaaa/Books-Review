@extends('admin.layout.master')

@section('title')
    Halaman Tambah Buku
@endsection

@section('content')
    <form action="/admin/buku" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" name="judul" class="form-control">
        </div>
        @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Sinopsis</label>
            <textarea name="sinopsis" class="form-control" cols="30" rows="10"></textarea>
        </div>
        @error('sinopsis')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun" class="form-control">
        </div>
        @error('tahun')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Poster</label>
            <input type="file" name="poster" class="form-control">
        </div>
        @error('poster')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Genre</label>
            <select name="genre_id" id="" class="form-control">
                <option value="">--Pilih Genre--</option>
                @forelse ($genre as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @empty
                    <option value="">--Tidak Ada Genre--</option>
                @endforelse
            </select>
        </div>
        @error('genre_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Penulis</label>
            <select name="penulis_id" id="" class="form-control">
                <option value="">--Pilih Penulis--</option>
                @forelse ($penulis as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @empty
                    <option value="">--Tidak Ada Penulis--</option>
                @endforelse
            </select>
        </div>
        @error('penulis_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
