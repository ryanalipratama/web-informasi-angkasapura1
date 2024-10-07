@extends('pengunjung.main')

@section('title', 'About Us | BPN TI Official Site')
    
@section('content')
    <!-- Gambar Judul -->
    <div class="gambar-judul position-relative" data-aos="fade-right">
        <img src="{{ asset('images/meeting.jpg') }}" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="fw-bold">About Us</h1>
        </div>
    </div>
    <!-- End Gambar Judul -->

    <!-- Home/Airport Technology -->
    <nav aria-label="breadcrumb" class="mt-3" data-aos="fade-up">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </div> 
    </nav>
    <!-- End Home/Airport Technology -->

    <!-- Deskrpsi About Us -->
    @foreach ($aboutus as $aboutus)
    <div class="deskripsi-aboutus" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="container-deskripsi-aboutus zoom-effect">
                        <img src="{{ asset($aboutus->gambardeskripsi) }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <p>{{ $aboutus->deskripsi }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Deskrpsi About Us -->

    <!-- Konten About Us -->
    <div class="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up">
                    <h1>Struktur Organisasi Kantor Pusat PT Angkasa Pura I</h1>
                    <div class="struktur-box zoom-effect">
                        <img src="{{ asset($aboutus->strukturkantorpusat) }}" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up">
                    <h1>Struktur Organisasi PT.(Persero) Angkasa Pura 1 Cabang Bandara SAMS Sepinggan Balikpapan</h1>
                    <div class="struktur-box d-flex justify-content-center align-items-center zoom-effect">
                        <img src="{{ asset($aboutus->struktursams) }}" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-5" data-aos="fade-up">
                    <h1>Struktur Organisasi Divisi Airport Technology Angkasa Pura 1 Cabang Bandara SAMS Sepinggan Balikpapan</h1>
                    <div class="struktur-box d-flex justify-content-center align-items-center zoom-effect">
                        <img src="{{ asset($aboutus->strukturitsams) }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Konten About Us -->
    @endforeach



@endsection