@extends('pengunjung.main')

@section('title', 'Learning Center | BPN TI Official Site')

@section('content')

    <!-- Gambar Judul -->
    <div class="gambar-judul position-relative" data-aos="fade-right">
        <img src="{{ asset('images/planning.png') }}" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="fw-bold">Learning Center</h1>
        </div>
    </div>
    <!-- End Gambar Judul -->

    <!-- Home/Learning Center -->
    <nav aria-label="breadcrumb" class="mt-3" data-aos="fade-up">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Learning Center</li>
            </ol>
        </div>
    </nav>
    <!-- End Home/Learning Center -->

    <!-- Konten Learning Center -->
    <div class="container learning-center-container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
                <h5>Apakah anda sudah memiliki akun email yang sudah terdaftar?</h5>
            </div>
            <div class="col-lg-6" data-aos="fade-up">
                <form action="{{ route('learningcentercontent') }}" method="GET">
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masuk Dengan Email Yang sudah terdaftar!" required>
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-7" data-aos="fade-up">
                <h5>
                    Jika belum memiliki email yang terdaftar
                    <a href="/contactus">klik disini</a>
                    untuk meminta akun email anda didaftarkan.
                    <div class="hint-container">
                        <span class="hint-icon">!</span>
                        <div class="hint-text">
                            "Klik 'klik disini' untuk menghubungi admin dan meminta pendaftaran akun email Anda. Tunggu hingga 1x24 jam, lalu coba masuk menggunakan akun yang telah didaftarkan. Jika akun belum terdaftar, silakan kirim email ke elband.sepingganairport@gmail.com untuk bantuan lebih lanjut."
                        </div>
                    </div>
                </h5>
            </div>
        </div>
    </div>
    <!-- End Konten Learning Center -->




@endsection