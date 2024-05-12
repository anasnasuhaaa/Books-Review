@extends('admin.layout.master')

@section('title')
    Halaman Update Profile
@endsection

@section('content')
    <form action="/profile/{{ $detail_profile->id }}" method="POST" enctype="multipart/form-data">
        <h4>Nama User : {{ $detail_profile->user->name }}</h4>
        <h4>Email User : {{ $detail_profile->user->email }}</h4>
        @method('put')
        @csrf

        <div class="form-group">
            <label>Umur</label>
            <input type="number" value="{{ $detail_profile->umur }}" name="umur" class="form-control">
        </div>
        @error('umur')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" value="{{ $detail_profile->alamat }}" name="alamat" class="form-control">
        </div>
        @error('alamat')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Biodata</label>
            <textarea name="bio" class="form-control" cols="30" rows="10">{{ $detail_profile->bio }}</textarea>
        </div>
        @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
