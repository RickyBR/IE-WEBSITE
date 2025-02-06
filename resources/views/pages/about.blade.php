@extends('layouts.app_landing')

@section('title', 'About Us')

@section('content')
    {{-- <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End --> --}}


    <!-- Fact Start -->
    <div class="container-fluid bg-primary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-white counter-value">99</h1>
                        <h5 class="text-white mt-1">Success in getting happy customer</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-white counter-value">25</h1>
                        <h5 class="text-white mt-1">Thousands of successful business</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-white counter-value">120</h1>
                        <h5 class="text-white mt-1">Total clients who love HighTech</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-white counter-value">5</h1>
                        <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- About Start -->
    <div class="container-fluid py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="img/about-1.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="img/about-2.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">About Us</h5>
                    <h1 class="mb-4">About HighTech Agency And It's Innovative IT Solutions</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus. Etiam gravida justo nec erat vestibulum, et malesuada augue laoreet.</p>
                    <p class="mb-4">Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

 <!-- About Start -->
    <div class="container-fluid py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">About Us</h5>
                    <h1 class="mb-4">Visi Iknow Education</h1>
                    <p>Menjadi platform edukasi terpercaya yang menginspirasi generasi muda untuk meraih pendidikan global.</p>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="img/about-1.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="img/about-2.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Fact Start -->
    <div class="container-fluid py-3" style="background-color: #F5F7FA">
        <div class="container">
            <div class="text-center">
                <h2>Misi</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeIn d-flex justify-content-center" data-wow-delay=".1s">
                    <div class="d-flex flex-column align-items-center text-center counter ">
                        <img src="img/Icon.png" class="rounded" alt="" style="width: 50px; height:50px">
                        <h5 class="text-primary mt-1 text-center">Memberikan layanan kelas yang berkualitas dan mudah diakses.
                        </h5>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex flex-column align-items-center text-center counter">
                        <img src="img/Icon.png" class="rounded" alt="" style="width: 50px; height:50px">
                        <h5 class="text-primary mt-1">Mendampingi siswa dengan pendekatan personal untuk memastikan keberhasilan mereka dalam mencapai tujuan pendidikan.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


@endsection
