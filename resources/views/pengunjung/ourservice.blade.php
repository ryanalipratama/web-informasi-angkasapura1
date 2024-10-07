@extends('pengunjung.main')

@section('title', 'Our Service | BPN TI Official Site')

@section('content')

    <!-- Gambar Judul -->
    <div class="gambar-judul position-relative" data-aos="fade-right">
        <img src="{{ asset('images/server.jpg') }}" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="fw-bold">Our Service</h1>
        </div>
    </div>
    <!-- End Gambar Judul -->

    <!-- Home/Airport Technology -->
    <nav aria-label="breadcrumb" class="mt-3" data-aos="fade-up">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Service</li>
            </ol>
        </div>
    </nav>
    <!-- End Home/Airport Technology -->

    <!-- Our Service -->
    <div class="ourservice" data-aos="fade-up">
        <div class="container">
            <div class="row">
                @foreach ($ourservice as $ourservice)
                <div class="col-lg-12">
                    <p>{{ $ourservice->paragraf }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Our Service -->

    <!-- Carousel Slider -->
    <div class="carousel-slider" data-aos="fade-up">
        <div class="container">
            <div #swiperRef="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($ourservicedata as $ourservicedata)
                    <div class="swiper-slide">
                        <div class="container card-container pt-5 pb-5">
                            <div class="card card-carousel">
                                <div class="card-head">
                                    <img src="{{ asset($ourservicedata->gambar) }}" class="card-img-top img-fluid">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ ($ourservicedata->judul) }}</h5>
                                    <a href="{{ route('ourservicedata', $ourservicedata->id) }}" class="btn">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- End Carousel Slider -->

@endsection
