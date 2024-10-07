@extends('pengunjung.main')

@section('title', 'Airport Technology | BPN TI Official Site')

@section('content')

    <!-- Gambar Judul -->
    <div class="gambar-judul position-relative" data-aos="fade-right">
        <img src="{{ asset('images/engineering.jpg') }}" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="fw-bold">Airport Technology Equipment Coverage</h1>
        </div>
    </div>
    <!-- End Gambar Judul -->

    <!-- Home/Airport Technology -->
    <nav aria-label="breadcrumb" class="mt-3" data-aos="fade-up">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Airport Technology Equipment Coverage</li>
            </ol>
        </div> 
    </nav>
    <!-- End Home/Airport Technology -->

    <!-- Konten Airport Technology Equipment -->
    <div class="gambar-airport-technology">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                @foreach ($airporttechnologyimage as $airporttechnology)
                <div class="col-lg-3 d-flex flex-column align-items-center mt-3 mb-3" data-aos="fade-up">
                    <div class="gambar">
                        <img src="{{ $airporttechnology->gambar }}" class="img-fluid">
                        <div class="overlay">
                            <div class="teks">
                                <h2>{{ $airporttechnology->judul }}</h2>
                                <p>{{ $airporttechnology->deskripsi }}</p>
                                <button class="view-button" onclick="perbesarGambar('{{ $airporttechnology->gambar }}')">View</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach  
            </div>
        </div>
    </div>
    <!-- End Konten Airport Technology Equipment -->

@endsection