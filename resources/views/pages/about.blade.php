@extends('layouts.app_landing')

@section('title', 'About Us')

@section('content')

{{-- <!-- Page Header Start -->
<div class="container-fluid page-header py-5" style="background-color: #5c6bc0;">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white mb-4 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div> --}}
<!-- Page Header End -->

<!-- About Start -->
<div class="container-fluid py-5 my-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6 wow fadeIn" data-wow-delay=".3s">
                <div class="position-relative">
                    <img src="img/about-1.jpg" class="img-fluid rounded shadow-lg" alt="About Us Image 1">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <img src="img/about-2.jpg" class="img-fluid w-75 rounded-circle shadow-lg" alt="About Us Image 2">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeIn" data-wow-delay=".5s">
                <h5 class="text-primary">About HighTech Agency</h5>
                <h2 class="display-5 mb-4">Innovative IT Solutions for the Future</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet volutpat justo. Phasellus feugiat sem id enim ultrices, et rutrum nulla scelerisque.</p>
                <p class="mb-4">Our goal is to provide cutting-edge technology solutions that drive business growth and innovation. We specialize in web development, software solutions, and more.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Vision Start -->
<div class="container-fluid bg-light py-5 my-5">
    <div class="container text-center">
        <h2 class="display-5 mb-4">Our Vision</h2>
        <p class="lead mb-5">To become the leading educational platform that inspires the next generation of leaders through global education.</p>
    </div>
</div>
<!-- Vision End -->

<!-- Mission Start -->
<div class="container-fluid py-5" style="background-color: #f1f1f1;">
    <div class="container text-center">
        <h2 class="display-5 mb-4">Our Mission</h2>
        <div class="row">
            <div class="col-md-6 wow fadeIn d-flex justify-content-center" data-wow-delay=".3s">
                <div class="card shadow-sm p-4">
                    <img src="img/Icon.png" class="card-img-top rounded-circle mx-auto d-block" style="width: 50px; height:50px;" alt="Mission Icon">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Quality and Accessible Classes</h5>
                        <p class="card-text">We are committed to providing high-quality classes that are easily accessible to students all over the world.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn d-flex justify-content-center" data-wow-delay=".5s">
                <div class="card shadow-sm p-4">
                    <img src="img/Icon.png" class="card-img-top rounded-circle mx-auto d-block" style="width: 50px; height:50px;" alt="Mission Icon">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Personalized Student Support</h5>
                        <p class="card-text">Our mission is to provide students with personalized mentorship and support to ensure they succeed in their educational journey.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mission End -->

@endsection