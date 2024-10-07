@extends('pengunjung.main')

@section('title', 'Development | BPN TI Official Site')

@section('content') 
    <!-- Gambar Judul -->
    <div class="gambar-judul position-relative" data-aos="fade-right">
        <img src="{{ asset('images/software.png') }}" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="fw-bold">Development</h1>
        </div>
    </div>
    <!-- End Gambar Judul -->

    <!-- Home/Development -->
    <nav aria-label="breadcrumb" class="mt-3" data-aos="fade-up">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Development</li>
            </ol>
        </div>
    </nav>
    <!-- End Home/Development -->

    <!-- Content Development -->
    <div class="container development-container">
        <p data-aos="fade-up">Divisi Teknologi Bandara SAMS Sepinggan terus berinovasi dengan mengembangkan berbagai aplikasi berbasis komputer dan sistem modern untuk mendukung operasional bandara. Dengan memanfaatkan teknologi terkini, kami berupaya meningkatkan efisiensi, keamanan, dan kenyamanan di lingkungan bandara. Keyakinan kami adalah bahwa setiap tantangan dapat diatasi dengan semangat mencoba dan berinovasi. Oleh karena itu, kami selalu mendorong tim untuk berani bereksperimen, karena kami percaya bahwa keberhasilan dimulai dari keberanian untuk mencoba. Bersama-sama, kita bisa mencapai lebih banyak dan menghadirkan solusi yang lebih baik bagi semua pengguna layanan bandara.</p>
        <div class="row">
            @foreach ($development as $development)
            <div class="col-lg-4 my-4" data-aos="fade-up">
                <div class="container blog-card-container">
                    <div class="card">
                        <div class="card-head">
                            <img src="{{ asset($development->gambar) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p>{{ $development->tanggal }}</p>
                            <h5>{{ $development->judul }}</h5>
                            <a href="{{ route('developmentdetail', $development->id) }}" class="btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
    <!-- End Content Development -->

@endSection