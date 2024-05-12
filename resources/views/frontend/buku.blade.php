@extends('frontend.master')
@section('nav-items')
    <li class="nav-item">
        <a class="nav-link" href="/">Beranda</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/about">Tentang</a>
    </li>
    <li class="nav-item active ">
        <a class="nav-link" href="/buku">Buku</a>
    </li>
@endsection
@section('content')
    <div>

        <div class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10">
                        <form action="#" class="form-search-blog">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select id="categories" class="custom-select bg-light">
                                        <option>All Categories</option>
                                        @forelse ($genre as $item)
                                            <option value="travel">{{ $item->nama }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter keyword..">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-2 text-sm-right">
                        <button class="btn btn-secondary">Filter <span class="mai-filter"></span></button>
                    </div>
                </div>

                <div class="row my-5">
                    @forelse ($books as $item)
                        <div class="col-6 col-md-4 col-lg-3 py-3 wow fadeInUp">
                            <a href="/buku/{{ $item->id }}">
                                <div class="card-blog">
                                    <div class="header">
                                        <div class="post-thumb d-flex justify-content-center align-items-center ">
                                            <img src="{{ asset('cover/' . $item->poster) }}" class=""
                                                style="background-size: cover" alt="">
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div>
                                            <span class="badge badge-primary p-1">{{ $item->genre->nama }}</span>
                                            <span class="badge badge-secondary p-1">{{ $item->penulis->nama }}</span>
                                        </div>
                                        <h5 class="post-title"><a href="/buku/{{ $item->id }}">{{ $item->judul }}</a>
                                        </h5>
                                        <div class="post-date">Diunggah Pada <a
                                                href="#">{{ Str::limit($item->created_at, 16, '') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <h4>Buku Masih Kosong</h4>
                    @endforelse


                </div>

                <nav aria-label="Page Navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    @endsection
