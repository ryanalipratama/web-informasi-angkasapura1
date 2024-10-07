@extends('pengunjung.main')

@section('title', 'Contact Us | BPN TI Official Site')

@section('content')

    <!-- Gambar Judul -->
    <div class="gambar-judul position-relative" data-aos="fade-right">
        <img src="{{ asset('images/cs.png') }}" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="fw-bold">Contact Us</h1>
        </div>
    </div>
    <!-- End Gambar Judul -->

    <!-- Home/Airport Technology -->
    <nav aria-label="breadcrumb" class="mt-3" data-aos="fade-up">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </div> 
    </nav>
    <!-- End Home/Airport Technology -->

    <!-- Konten Contact Us -->
    <div class="container contactus-container" data-aos="fade-up">
        <h1>Hubungi Kami</h1>
        <p>Selamat datang di halaman Contact Us kami! Kami sangat senang Anda tertarik untuk berhubungan dengan kami. Apakah Anda memiliki pertanyaan, saran, atau membutuhkan bantuan lebih lanjut? Tim kami siap membantu Anda dengan cepat dan profesional. Silakan isi formulir di bawah ini, atau hubungi kami melalui salah satu metode kontak yang tersedia. Kami akan dengan senang hati merespons setiap permintaan Anda sesegera mungkin lewat email yang sudah anda kirim. Terima kasih telah mengunjungi website kami, dan kami menantikan kesempatan untuk berinteraksi dengan Anda!</p>
        <div class="form-container">
            <form action="{{ route('contactus.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="tel" name="telepon" class="form-control" placeholder="Nomor Telepon">
                </div>
                <div class="mb-3">
                    <input type="text" name="judul" class="form-control" placeholder="Judul Masalah">
                </div>
                <div class="mb-3">
                    <textarea class="form-control"  name="deskripsi" rows="4" placeholder="Deskripsi Masalah"></textarea>
                </div>
                <button type="submit" class="btn btn-submit">Kirim</button>
            </form>
        </div>
    </div>

    <!-- End Konten Contact Us -->
    
@endsection