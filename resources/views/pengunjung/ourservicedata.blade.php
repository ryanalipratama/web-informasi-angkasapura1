@extends('pengunjung.main')

@section('title', 'Our Service Detail | BPN TI Official Site')
    
@section('content')

    <!-- Gambar Judul -->
    <div class="gambar-judul position-relative" data-aos="fade-right">
        <img src="{{ asset('images/server.jpg') }}" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="fw-bold">Our Service Detail</h1>
        </div>
    </div>
    <!-- End Gambar Judul -->

    <!-- Home/Airport Technology -->
    <nav aria-label="breadcrumb" class="mt-3" data-aos="fade-up">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Service Detail</li>
            </ol>
        </div>
    </nav>
    <!-- End Home/Airport Technology -->

    <!-- Detail Our Service -->
    <div class="ourservice-detail" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="container container-img zoom-effect">
                        <img src="{{ asset($ourservicedata->gambar) }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-sm-3">
                    <h1>{{ $ourservicedata->judul }}</h1>
                    <p>{{ $ourservicedata->deskripsi }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Detail Our Service -->
@endsection