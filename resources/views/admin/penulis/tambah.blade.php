@extends('admin.layout.master')

@section('title')
    Halaman Tambah Penulis
@endsection

@section('content')
    <form action="/penulis" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Penulis</label>
            <input type="text" name="nama" class="form-control">
        </div>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Biodata</label>
            <textarea name="bio" class="form-control" cols="30" rows="10"></textarea>
        </div>
        @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
