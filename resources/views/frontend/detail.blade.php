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
    <div class="page-section pt-5">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="subhead">Detail Buku</div>
                <h2 class="title-section">{{ $buku->judul }}</h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-lg-8">
                    <div class="blog-single-wrap p-0">
                        <div class="header">
                            <div class="post-thumb h-auto ">
                                <img src="{{ asset('cover/' . $buku->poster) }}" class="card-img-top" width="100%"
                                    alt="...">
                            </div>


                        </div>
                        <h1 class="post-title mb-2"> {{ $buku->judul }} - {{ $buku->penulis->nama }}</h1>

                        <div class="post-meta">

                            <div class="post-date">
                                <span class="icon">
                                    <span class="mai-time-outline"></span>
                                </span> <a href="#"> {{ Str::limit($buku->created_at, 16, '') }}</a>
                            </div>
                            <div class="post-comment-count ml-2">
                                <span class="icon">
                                    <span class="mai-chatbubbles-outline"></span>
                                </span> <a href="#"><span>{{ $total_review }}</span> Reviews</a>
                            </div>
                        </div>
                        <div class="post-content">
                            <blockquote class="quote">
                                <span class="author">― Sinopsis</span>
                                {{ $buku->sinopsis }}”
                            </blockquote>
                        </div>
                    </div>

                    <div class="comment-form-wrap pt-5">
                        <h5>Review:</h5>
                        @forelse ($buku->listReview as $item)
                            <div class="card my-2">
                                <div class="card-header">
                                    {{ $item->user->name }}
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{!! $item->content !!}</p>
                                </div>
                            </div>
                        @empty
                            <h5>Belum ada Review</h5>
                        @endforelse
                        @auth
                            <form action="/review/{{ $buku->id }}" class="mt-3" method="POST">
                                @csrf
                                <textarea name="content" placeholder="Isi Review" class="form-control" cols="30" rows="10"></textarea>
                                <input type="submit" class="btn btn-primary my-3" value="Unggah">
                            </form>

                        @endauth
                        @guest
                            <form action="/review/{{ $buku->id }}" class="mt-3" method="POST">
                                @csrf
                                <textarea name="content" placeholder="Isi Review" class="form-control" cols="30" rows="10"></textarea>
                                <a href="/login">
                                    <input type="submit" class="btn btn-primary my-3" value="Unggah">
                                </a>
                            </form>
                        @endguest
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="widget">
                        <!-- Widget search -->
                        <div class="widget-box">
                            <form action="#" class="search-widget">
                                <input type="text" class="form-control" placeholder="Enter keyword..">
                                <button type="submit" class="btn btn-primary btn-block">Search</button>
                            </form>
                        </div>

                        <!-- Widget Categories -->
                        <div class="widget-box">
                            <h4 class="widget-title">Category</h4>
                            <div class="divider"></div>

                            <ul class="categories">
                                @forelse ($genre as $item)
                                    <li><a href="#">{{ $item->nama }}</a></li>
                                @empty
                                @endforelse

                            </ul>
                        </div>

                        <!-- Widget recent post -->
                        <div class="widget-box">
                            <h4 class="widget-title">Buku Terbaru</h4>
                            <div class="divider"></div>

                            @forelse ($buku_lainnya->take(3) as $item)
                                <div class="blog-item">
                                    <a class="post-thumb text-center" href="/buku/{{ $item->id }}">
                                        <img src="{{ asset('cover/' . $item->poster) }}" alt="">
                                    </a>
                                    <div class="content">
                                        <h6 class="post-title"><a href="/buku/{{ $item->id }}">{{ $item->judul }}</a>
                                        </h6>
                                        <div class="meta">
                                            <a href="#"><span
                                                    class="mai-calendar"></span>{{ Str::limit($item->created_at, 16, '') }}</a>
                                            <a href="#"><span
                                                    class="mai-person"></span>{{ $item->penulis->nama }}</a>
                                        </div>
                                    </div>
                                </div>

                            @empty
                                <p>Belum ada buku yang diunggah</p>
                            @endforelse

                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

@push('script')
<script src="https://cdn.tiny.cloud/1/2z0fxf90ixieafllu12k6fukkhjt9h50k4jnyg9hzas8kppi/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script>
@endpush
@endsection
