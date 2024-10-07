<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Judul -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/atlogo.png') }}" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" data-aos="fade-down">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="250">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ourservice">Our Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/learningcenter">Learning Center</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/development">Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/planning">Planning</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    <!-- End Main Content -->

    <!-- Flooting Button -->
    <div class="container floating-button-container">
        <a href="/contactus" class="btn rounded-circle floating-button">
            <img src="{{ asset('images/support (1).png') }}" alt="Logo" width="50">
        </a>
    </div>
    
    <!-- End Flooting Button -->


    <!-- Footer -->
    <footer class="footer1" data-aos="fade-up">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-lg-3 mt-5">
                    <h2>TI</h2>
                    <a href="/aboutus"><p>About Us</p></a>
                    <a href="/ourservice"><p>Our Services</p></a>
                    <a href="/learningcenter"><p>Learning Center</p></a>
                </div>
                <div class="col-lg-3 mt-5">
                    <h2>Support</h2>
                    <a href="/blog"><p>Blog</p></a>
                    <a href="/contactus"><p>Contact Us</p></a>
                    <a href="/blog"><p>Gallery</p></a>
                </div>
                <div class="col-lg-3 mt-5">
                    <h2>Innovation</h2>
                    <a href="/development"><p>Development</p></a>
                    <a href="/fieldindustrialpractice"><p>Field Industrial Practice</p></a>
                    <a href="/planning"><p>Planning</p></a>
                </div>
                <div class="col-lg-3 mt-5">
                    <h2>Our Vendor</h2>
                    <p>CV. Menara Timur</p>
                    <p>PT. Jatimas Angkasa</p>
                    <p>PT. Angkasa Pura Supports</p>
                </div>
            </div>
        </div>
    </footer>
    <footer class="footer2" data-aos="fade-up">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-auto mt-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8533436313214!2d116.9124525747244!3d-1.2601673987278343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df145a95cd190e7%3A0x3b9c2a050785b30a!2sBandara%20Balikpapan!5e0!3m2!1sid!2sid!4v1721665671797!5m2!1sid!2sid" width="300" height="10" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p>© 2024 Angkasa Pura  Technology</p>
                </div>
                <div class="col-auto mx-auto" >
                    <div class="colom2 mt-5">
                        <p>Sepinggan, Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur</p>
                        <p>Telp : 0542 - 757 - 7009</p>
                        <p>Email : elband.sepingganairport@gmail.com</p>
                    </div>
                </div>
                <div class="col-auto mt-5">
                    <img src="{{ asset('images/logo 2.png') }}" alt="Logo" width="150">
                    <p class="mt-3">Find Us On: </p>
                    <div class="container">
                        <div class="row">
                            <div class="col-4 px-0 text-start ">
                                <a href="https://www.facebook.com/angkasa.pura" target="_blank">
                                    <i class="fa-brands fa-facebook fa-2x"></i>
                                </a>
                            </div>
                            <div class="col-4 px-0 text-center">
                                <a href="https://www.instagram.com/angkasa.pura/" target="_blank">
                                    <i class="fa-brands fa-instagram fa-2x"></i>
                                </a>
                            </div>
                            <div class="col-4 px-0 text-end">
                                <a href="https://twitter.com/angkasa_pura" target="_blank">
                                    <i class="fa-brands fa-square-x-twitter fa-2x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- JS -->
    <script src="{{ asset('js/index.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- End JS -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</body>

</html>
