@extends('pengunjung.main')

@section('title', 'Development Detail | BPN TI Official Site')

@section('content')
    <!-- Gambar Judul -->
    <div class="gambar-judul position-relative" data-aos="fade-right">
        <img src="{{ asset('images/software.png') }}" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="fw-bold">Development Detail</h1>
        </div>
    </div>
    <!-- End Gambar Judul -->

    <!-- Home/Development Detail-->
    <nav aria-label="breadcrumb" class="mt-3" data-aos="fade-up">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Development Detail</li>
            </ol>
        </div>
    </nav>
    <!-- End Home/Development -->

    <!-- Content Development Detail -->
    <div class="container development-detail-container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12">
                <div class="development-detail-img zoom-effect">
                    <img src="{{ asset($development->gambar) }}" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="development-detail-judul">
                    <h1>{{ $development->judul }}</h1>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="development-detail-tanggal">
                    <p>{{ $development->tanggal }}</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="development-detail-deskripsi">
                    <p>{{ $development->deskripsi }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Development Detail -->
@endSection