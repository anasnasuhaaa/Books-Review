@extends('admin.layout.master')

@section('title')
    Halaman Edit Genre
@endsection

@section('content')
    <form action="/genre/{{ $genre->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Genre</label>
            <input type="text" name="nama" value="{{ $genre->nama }}" class="form-control">
        </div>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="descrip" class="form-control" cols="30" rows="10">{{ $genre->descrip }}</textarea>
        </div>
        @error('descrip')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
