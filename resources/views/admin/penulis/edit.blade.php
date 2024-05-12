@extends('admin.layout.master')

@section('title')
    Halaman Edit Penulis
@endsection

@section('content')
    <form action="/penulis/{{ $penulis->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Penulis</label>
            <input type="text" name="nama" value="{{ $penulis->nama }}" class="form-control">
        </div>
        @error('penulis')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" class="form-control" cols="30" rows="10">{{ $penulis->bio }}</textarea>
        </div>
        @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
