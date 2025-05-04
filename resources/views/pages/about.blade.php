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
<div class="container-fluid py-5 my-5 position-relative" style="background-color: #fff;">
    <!-- Decorative Icons (optional, placed around the section) -->
    <img src="img/icon-dictionary.png" class="position-absolute" style="bottom: 0; left: 0; width: 120px; transform: rotate(-20deg); z-index: 1;" alt="Dictionary">
    <img src="img/icon-passport.png" class="position-absolute" style="bottom: 0; right: 0; width: 80px; transform: rotate(15deg); z-index: 1;" alt="Passport">
    <img src="img/icon-pin.png" class="position-absolute" style="top: 20px; left: 20px; width: 40px;" alt="Pin">
    <img src="img/icon-paperclip.png" class="position-absolute" style="top: 30px; right: 50px; width: 40px;" alt="Clip">
    <img src="img/icon-flight.png" class="position-absolute" style="bottom: 60px; left: 50px; width: 40px;" alt="Plane">
    <img src="img/icon-university.png" class="position-absolute" style="top: 80px; right: 20px; width: 40px;" alt="University">
    <img src="img/icon-graduate.png" class="position-absolute" style="top: 100px; left: 80px; width: 40px;" alt="Graduate Icon">

    <!-- Main Content -->
    <div class="container text-center">
        <h2 class="fw-bold mb-3" style="color: #E9712A;">Learn English. Ace the IELTS.</h2>
        <h5 class="fw-semibold mb-4" style="color: #000;">Unlock the world — with a platform that’s built for your biggest goals.</h5>

        <!-- Phone Mockup -->
        <div class="d-flex justify-content-center mb-3">
            <img src="img/zoom-call.png" alt="Zoom Call" class="img-fluid" style="max-width: 500px; transform: rotate(-4deg); border-radius: 20px; box-shadow: 0 0 40px rgba(0,0,0,0.15);">
        </div>

        <p class="text-muted">Kami siap menjadi jembatan menuju suksesmu!</p>
    </div>
</div>

<!-- About End -->

<!-- Vision Start -->
<style>
        .blog-item {
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .blog-item:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .blog-content img {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }
    </style>

   <!-- About Start -->
   <div class="container-fluid px-0" style="background-color: #0056c7; border-radius: 30px; overflow: hidden;">
    <div class="container py-5 position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6 text-white">
                <h1 class="fw-bold mb-4">
                    <span>IKnowEducation</span>
                </h1>
                <p class="mb-4" style="font-size: 1.1rem;">
                    We’re more than just a study platform—<br>
                    we’re <span style="color: #ff9900; font-weight: 600;">your learning buddy</span> on the journey to
                    <span style="color: #ff6600; font-weight: 600;">master English and IELTS</span> to unlock global opportunities.
                </p>
                <a href="{{ url('/about') }}" class="btn btn-warning rounded-pill px-4 py-2 fw-semibold">
                    About Us
                </a>
            </div>
            <div class="col-lg-6 text-center mt-5 mt-lg-0 position-relative">
                <img src="img/Illustration.png" class="img-fluid" alt="IKnowEducation Banner" style="max-height: 450px;">
            </div>
        </div>
    </div>
</div>
<!-- Vision End -->

<!-- Mission Start -->
<div class="container-fluid py-5 mt-5 position-relative" style="background-color: #ffffff;">
    <!-- Top Decorative Images -->
    <img src="img/hello-tag.png" alt="Hello Tag" class="position-absolute" style="top: -20px; left: 10%; width: 100px; transform: rotate(-10deg); z-index: 1;">
    <img src="img/sticky-note.png" alt="Sticky Note" class="position-absolute" style="top: -20px; right: 10%; width: 100px; transform: rotate(10deg); z-index: 1;">

    <div class="container text-center">
        <h2 class="display-5 mb-5 fw-bold text-primary">Our Mission</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="p-4 border rounded shadow-sm h-100 text-start">
                    <h5 class="fw-bold mb-3" style="color: #DB6C2D">
                        <img src="img/class-icon.png" alt="Class Icon" style="width: 24px; margin-right: 8px;">
                        Quality and Accessible Classes
                    </h5>
                    <hr class="my-2" style="border-top: 2px dashed #aaa;">
                    <p class="mb-0">
                        We are committed to providing high-quality classes that are easily accessible to students all over the world.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="p-4 border rounded shadow-sm h-100 text-start">
                    <h5 class="fw-bold mb-3" style="color: #DB6C2D">
                        <img src="img/support-icon.png" alt="Support Icon" style="width: 24px; margin-right: 8px;">
                        Personalized Student Support
                    </h5>
                    <hr class="my-2" style="border-top: 2px dashed #aaa;">
                    <p class="mb-0">
                        To provide students with personalized mentorship and support to ensure they succeed in their educational journey.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mission End -->

@endsection