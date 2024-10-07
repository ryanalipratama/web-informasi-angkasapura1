@extends('pengunjung.main')

@section('title', 'Blog | BPN TI Official Site')

@section('content')

    <!-- Gambar Judul -->
    <div class="gambar-judul position-relative" data-aos="fade-right">
        <img src="{{ asset('images/blog.png') }}" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="fw-bold">Blog</h1>
        </div>
    </div>
    <!-- End Gambar Judul -->

    <!-- Home/Airport Technology -->
    <nav aria-label="breadcrumb" class="mt-3" data-aos="fade-up">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </div>
    </nav>
    <!-- End Home/Airport Technology -->

    <!-- Content Blog -->
    <div class="container blog-container">
        <div class="row" data-aos="fade-up">
            @foreach ($blog as $blog)
            <div class="col-lg-4 my-4">
                <div class="container blog-card-container">
                    <div class="card">
                        <div class="card-head">
                            <img src="{{ asset($blog->gambar) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p>{{ $blog->tanggal }}</p>
                            <h5>{{ $blog->judul }}</h5>
                            <a href="{{ route('deskripsiblog', $blog->id) }}" class="btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <!-- End Content Blog -->


@endsection
