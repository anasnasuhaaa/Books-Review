@extends('frontend.master')
@section('nav-items')
    <li class="nav-item">
        <a class="nav-link" href="/">Beranda</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/about">Tentang</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/buku">Buku</a>
    </li>
@endsection
@section('content')
    <div class="page-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3">
                    <h2 class="title-section">The number #1 Books Review Platform</h2>
                    <div class="divider"></div>

                    <p>Books Review merupakan platform review buku berbasis website, dimana pengguna dapat memberikan kesan
                        dan pesan terhadap buku yang pernah mereka baca.</p>
                    <p>kami berkomitmen untuk menjadi panduan terpercaya bagi para pecinta
                        buku yang ingin mengeksplorasi beragam karya dan temukan inspirasi baru. </p>
                    <p> Tujuan kami adalah memperluas cakrawala literasi, menghadirkan pengalaman membaca yang
                        memuaskan, dan membangun komunitas yang terhubung melalui kecintaan kami terhadap dunia buku.
                        Selamat datang di tempat di mana setiap halaman adalah petualangan baru!</p>

                </div>
                <div class="col-lg-6 py-3">
                    <div class="img-fluid py-3 text-center">
                        <img src="../assets/img/about-v2.png" style="width: 80%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
