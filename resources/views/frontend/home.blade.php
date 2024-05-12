@extends('frontend.master')
@section('nav-items')
    <li class="nav-item active">
        <a class="nav-link" href="/">Beranda</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/about">Tentang</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/buku">Buku</a>
    </li>
@endsection
@section('content')
    <div class="container d-flex justify-content-center align-items-center " style="min-height: 90vh">
        <div class="page-banner home-banner">
            <div class="row align-items-center flex-wrap-reverse h-100">
                <div class="col-md-6 py-5 wow fadeInLeft">
                    <h1 class="mb-4">
                        Let's explore the world of literacy!</h1>
                    <p class="text-lg text-grey mb-5">Panduan utama untuk memilih buku-buku terbaik
                    </p>
                    <a href="/buku" class="btn btn-primary btn-split">Jelajahi Buku<div class="fab"><span
                                class="mai-play"></span>
                        </div></a>
                </div>
                <div class="col-md-6 py-5 wow zoomIn">
                    <div class="img-fluid text-center">
                        <img src="../assets/img/books-banner-v2.png" alt="">
                    </div>
                </div>
            </div>
            <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
        </div>
    </div>

    <!-- Books -->
    <div class="page-section p-2 ">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="subhead">Our Books</div>
                <h2 class="title-section">Lihat Review Terbaru</h2>
                <div class="divider mx-auto"></div>
            </div>

            <div class="row mt-5">
                @forelse ($books->take(3) as $item)
                    <div class="col-lg-4 py-3 wow fadeInUp">
                        <div class="card-blog">
                            <div class="header">
                                <div class="post-thumb text-center">
                                    <img src="{{ asset('cover/' . $item->poster) }}" alt="">
                                </div>
                            </div>
                            <div class="body">
                                <h5 class="post-title"><a href="#">{{ $item->judul }}</a></h5>
                                <div class="post-date">Diunggah Pada <a
                                        href="#">{{ Str::limit($item->created_at, 16, '') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Belum ada buku yang diunggah</p>
                @endforelse

                <div class="col-12 mt-4 text-center wow fadeInUp">
                    <a href="/buku" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner info -->
    <div class="page-section banner-info">
        <div class="wrap bg-image p-5" style="background-image: url(../assets/img/bg_pattern.svg);">
            <div class="text-center wow fadeInUp">
                <p class="subhead" style="color: rgb(207, 207, 207)">Our Team</p>
                <h2 class="title-section">Tim Developer Books Review</h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="page-section p-1">
                <div class="container">
                    <div class="row">
                        <div class=" col-lg-4">
                            <div class="bg-white bg-white card-service wow fadeInUp">
                                <div class="header">
                                    <img src="../assets/img/person/anas.jpg"
                                        style="height: 120px; width:120px; border-radius: 50%" alt="">
                                </div>
                                <div class="body">
                                    <h5 class="text-secondary">Anas Nasuha</h5>
                                    <p>Indramayu, Jawa Barat</p>
                                    <a href="https://www.linkedin.com/in/anas-nasuha-61a70b2b3/" target="_blank"
                                        class="btn btn-primary">LinkedIn</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="bg-white card-service wow fadeInUp">
                                <div class="header">
                                    <img src="../assets/img/person/riza.jpg"
                                        style="height: 120px; width:120px; border-radius: 50%" alt="">
                                </div>
                                <div class="body">
                                    <h5 class="text-secondary">Riza Rihardina</h5>
                                    <p>Sampang, Jawa Timur</p>
                                    <a href="https://www.linkedin.com/in/riza-rihardina-12454954/" target="_blank"
                                        class="btn btn-primary">LinkedIn</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="bg-white card-service wow fadeInUp">
                                <div class="header">
                                    <img src="../assets/img/person/tataq.jpg"
                                        style="height: 120px; width:120px; border-radius: 50%" alt="">
                                </div>
                                <div class="body">
                                    <h5 class="text-secondary">Tataq Distasianto</h5>
                                    <p>Sampang, Jawa Timur</p>
                                    <a href="https://www.linkedin.com/in/tataq-distasianto-530a64181/" target="_blank"
                                        class="btn btn-primary">LinkedIn</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .container -->
            </div> <!-- .page-section -->
        </div> <!-- .wrap -->
    </div> <!-- .page-section -->

    <div class="page-section m-0 " id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <span class="subhead">About Us</span>
                    <h2 class="title-section">The number #1 Books Review Platform</h2>
                    <div class="divider"></div>

                    <a href="/about" class="btn btn-primary mt-3">Selengkapnya</a>
                </div>
                <div class="col-lg-6 py-3 wow fadeInRight">
                    <div class="img-fluid py-3 text-center">
                        <img src="../assets/img/banner-about.png" style="width: 80%" alt="">
                    </div>
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->
@endsection
