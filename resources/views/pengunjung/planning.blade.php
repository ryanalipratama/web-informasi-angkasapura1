@extends('pengunjung.main')

@section('title', 'Planning | BPN TI Official Site')

@section('content')

    <!-- Gambar Judul -->
    <div class="gambar-judul position-relative" data-aos="fade-right">
        <img src="{{ asset('images/planning.png') }}" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="fw-bold">Planning</h1>
        </div>
    </div>
    <!-- End Gambar Judul -->

    <!-- Home/Planning -->
    <nav aria-label="breadcrumb" class="mt-3" data-aos="fade-up">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Planning</a></li>
                <li class="breadcrumb-item active" aria-current="page">Planning</li>
            </ol>
        </div>
    </nav>
    <!-- End Home/Planning -->

    <!-- Content Planning -->
    <div class="container planning-container" data-aos="fade-up">
       @foreach ($planning as $planning)
       <div class="row mb-5" data-aos="fade-up">
        <h1>{{ $planning->judul }}</h1>
        <div class="col-lg-6">
            <div class="container container-img zoom-effect">
                <img src="{{ asset($planning->gambar) }}" class="img-fluid">
            </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-sm-3">
            <div class="container container-tanggal ">
                <p>{{ $planning->tanggal }}</p>
            </div>
            <div class="container container-deskripsi">
                <p>{{ $planning->deskripsi }}</p>
            </div>
        </div>
    </div>
       @endforeach 
    </div>
    <!-- End Content Planning -->

@endsection