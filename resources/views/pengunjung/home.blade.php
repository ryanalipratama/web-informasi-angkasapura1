@extends('pengunjung.main')

@section('title', 'BPN TI Official Site | Homepage')

@section('content')

    <!-- Carousel -->
    <div class="carousel zoom-effect" data-aos="fade-up">
        <div class="container mt-5 pt-5">
            <div class="mx-auto my-lg-5 my-md-3">
                <div id="carouselExampleCaptions" class="carousel slide border rounded-5 shadow-custom">
                    <div class="carousel-indicators">
                        @foreach ($carousellawal as $item)
                            <button type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"
                                aria-current="{{ $loop->first ? 'true' : 'false' }}"
                                aria-label="Slide {{ $loop->index + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($carousellawal as $item)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }} border rounded-5">
                                <img src="{{ asset($item->gambar) }}"
                                    class="d-block w-100 fixed-size-img img-fluid border rounded-5" alt="...">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Carousel -->

    <!-- Welcome -->
    <div class="welcome mt-5 " data-aos="fade-up">
        <div class="container display-fluid">
            <div class="row">
                @foreach ($welcome as $item)
                    <div class="col-lg-6 px-lg-5" data-aos="fade-up">
                        <h1>{{ $item->judul }}</h1>
                        <p class="mt-3">{{ $item->konten }}</p>
                    </div>
                    <div class="col-lg-6 px-lg-5" data-aos="fade-up">
                        <div class="container image-welcome-container zoom-effect">
                            <img src="{{ asset($item->gambar) }}" class="img-fluid">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Welcome -->

    <!-- Taking Care -->
    <div class="taking-care pt-4" data-aos="fade-up">
        <div class="container container-taking-care">
            <h1 class="text-center fw-bolder" data-aos="fade-up">Taking Care About Your Problem</h1>
            <div class="container my-5">
                <div class="row text-center">
                    @foreach ($takingcare as $takingcare)
                        <div class="col-lg-4 mb-5 d-flex align-items-start px-lg-5" data-aos="fade-up">
                            <div class="circle shadow-custom zoom-effect">
                                <img src="{{ asset($takingcare->icon) }}" class="img-fluid" alt="...">
                            </div>
                            <div class="ms-3 text-justify">
                                <h5 class="mt-3">{{ $takingcare->judul }}</h5>
                                <p>{{ $takingcare->deskripsi }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Taking Care -->

    <!-- Airport Technology Equipment -->
    <div class="airport-technology" >
        <div class="container">
            <div class="row" >
                <div class="col-lg-6 px-lg-5" data-aos="fade-up">
                    @foreach ($airporttechnology as $airport)
                        <div class="image-airport-technology-container">
                            <h1 class="mb-3 mt-0">{{ $airport->judul }}</h1>
                            <p class="mb-4">{{ $airport->konten }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-6 px-lg-5 zoom-effect" data-aos="fade-up">
                    @if ($airporttechnologyimage)
                        <img src="{{ asset($airporttechnologyimage->gambar) }}"
                            class="img-fluid shadow-custom">
                    @else
                        <p>No image available.</p>
                    @endif
                    <a href="/airporttechnology" class="btn btn-link" data-aos="fade-up">Lihat Selengkapnya ...</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Airport Technology Equipment -->

    <!-- Our Skill -->
    <div class="ourskill">
        <h1 class="text-center fw-bolder" data-aos="fade-up">Our Skill</h1>
        <div class="container container-ourskill" data-aos="fade-up">
            <div class="row" >
                @foreach ($ourskill as $ourskill)
                <div class="col-lg-3 mb-5 pb-5 d-flex flex-column align-items-center" data-aos="fade-up">
                    <h3 class="text-center">{{ $ourskill->skill }}</h3>
                    <div class="skill">
                        <div class="outer">
                            <div class="inner zoom-effect">
                                <div id="number">{{ $ourskill->persentase }}</div>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                            <defs>
                                <linearGradient id="GradientColor">
                                    <stop offset="0%" stop-color="#66CC00" />
                                    <stop offset="100%" stop-color="#004080" />
                                </linearGradient>
                            </defs>
                            <circle cx="80" cy="80" r="70" stroke-linecap="round" />
                        </svg>
                    </div>
                </div>
                @endforeach   
            </div>
        </div>
    </div>
    <!-- End Our Skill -->

    <!-- Our Vision Mision and Target -->
    <div class="our pt-3 pb-5" data-aos="fade-up">
        <h1 class="text-center fw-bolder">Our Vision Mision and Target</h1>
        <div class="container">
            <div class="row mt-5 pt-3 d-flex justify-content-center">
                @foreach ($vissionmissiontarget as $vissionmissiontarget)
                    <div class="col-lg-4 mb-5 pb-5" data-aos="fade-up">
                        <div class="card mx-auto text-center custom-card">
                            <div class="icon-wrapper">
                                <img src="{{ asset($vissionmissiontarget->icon) }}" class="icon-img image-fluid"
                                    alt="...">
                            </div>
                            <div class="card-body mt-5">
                                <h3>{{ $vissionmissiontarget->judul }}</h3>
                                <p class="card-text">{{ $vissionmissiontarget->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Our Vision Mision and Target -->

@endsection
