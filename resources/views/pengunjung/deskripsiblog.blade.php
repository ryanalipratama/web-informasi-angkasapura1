@extends('pengunjung.main')

@section('title', 'Deskripsi Blog | BPN TI Official Site')

@section('content')

    <!-- Gambar Judul -->
    <div class="gambar-judul position-relative" data-aos="fade-right">
        <img src="{{ asset('images/blog.png') }}" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="fw-bold">Blog Detail</h1>
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

    <!-- Konten Blog -->
    <div class="container deskripsiblog-container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12">
                <div class="deskripsiblog-img">
                    <img src="{{ asset($blog->gambar) }}" class="img-fluid w-100">  
                </div>
            </div>
            <div class="col-lg-12">
                <div class="deskripsiblog-judul">
                    <h1>{{ $blog->judul }}</h1>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="deskripsiblog-tanggal">
                    <p>{{ $blog->tanggal }}</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="deskripsiblog-deskripsi">
                    <p>{{ $blog->deskripsi }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Konten Blog -->

@endsection