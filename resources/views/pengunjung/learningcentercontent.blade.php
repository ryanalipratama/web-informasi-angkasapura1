@extends('pengunjung.main')

@section('title', 'Learning Center | BPN TI Official Site')
    
@section('content')

    <!-- Gambar Judul -->
    <div class="gambar-judul position-relative" data-aos="fade-right">
        <img src="{{ asset('images/planning.png') }}" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="fw-bold">Learning Center Content</h1>
        </div>
    </div>
    <!-- End Gambar Judul -->

    <!-- Home/Learning Center Content-->
    <nav aria-label="breadcrumb" class="mt-3" data-aos="fade-up">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Learning Center Content</li>
            </ol>
        </div>
    </nav>
    <!-- End Home/Learning Center Content -->
    <div class="row my-4" data-aos="fade-up">
        <div class="container h1-learning-center">
            <h1 class="text-center mb-4">File Learning Center</h1>
        </div>
        <div class="col-12">
            <div class="container learning-center-container p-4">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>
                                <h1>No</h1>
                            </th>
                            <th><h1>Nama File</h1></th>
                            <th><h1>File</h1></th>
                            <th><h1>Remark</h1></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($learningcentercontent as $l)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>
                                    <p>{{ $l->namafile }}</p>
                                </td>
                                <td>
                                    <a href="{{ $l->file }}" target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fas fa-download"></i> Unduh File disini!
                                    </a>
                                </td>
                                <td>
                                    <p>{{ $l->remarks }}</p>
                                </td>
                            </tr>
                        @endforeach  
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection