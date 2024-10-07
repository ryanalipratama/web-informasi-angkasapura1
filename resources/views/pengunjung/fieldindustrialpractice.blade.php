@extends('pengunjung.main')

@section('title', 'Field Industrial Practice | BPN TI Official Site')

@section('content')

    <!-- Gambar Judul -->
    <div class="gambar-judul position-relative" data-aos="fade-right">
        <img src="{{ asset('images/internship.png') }}" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="fw-bold">Field Industrial Practice</h1>
        </div>
    </div>
    <!-- End Gambar Judul -->

    <!-- Home/Field Industrial Practice -->
    <nav aria-label="breadcrumb" class="mt-3" data-aos="fade-up">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Field Industrial Practice</li>
            </ol>
        </div>
    </nav>
    <!-- End Home/Field Industrial Practice -->

    <!-- Konten Field Industrial Practice -->
    <div class="container field-industrial-practice">
        <div class="row" data-aos="fade-up">
            <h1>Tata Tertib dan Peraturan PKL</h1>
            <div class="container">
                @foreach ($peraturanpkl as $peraturanpkl)
                <div class="col-12">
                    <div class="container paragraf-peraturan-container">
                        <p>{{ $peraturanpkl->paragraf }}</p>
                    </div>
                    <div class="container peraturan-img-container">
                        <img src="{{ asset($peraturanpkl->gambar) }}" class="img-fluid">
                    </div>
                </div>
            @endforeach
            </div>
            <div class="row my-4" data-aos="fade-up">
                <h1 class="text-center mb-4">Daftar Nilai PKL</h1>
                <div class="col-12">
                    <div class="container nilai-container p-4">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>
                                        <h1>No</h1>
                                    </th>
                                    <th><h1>File</h1></th>
                                    <th><h1>Link</h1></th>
                                    <th><h1>Remark</h1></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftarnilai as $d)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>
                                            <p>{{ $d->namafile }}</p>
                                        </td>
                                        <td>
                                            <a href="{{ $d->link }}" target="_blank" class="btn btn-primary btn-sm">
                                                <i class="fas fa-download"></i> Unduh File disini!
                                            </a>
                                        </td>
                                        <td>
                                            <p>{{ $d->remarks }}</p>
                                        </td>
                                    </tr>
                                @endforeach  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
