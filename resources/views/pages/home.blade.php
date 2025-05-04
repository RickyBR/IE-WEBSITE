@extends('layouts.app_landing')

@section('title', 'Iknow Education')

@section('content')
    <!-- Carousel Start -->
    <!-- Hero Section Start -->
<div class="container-fluid px-0 position-relative hero-section overflow-hidden">
    <!-- Decorative Elements -->
    <div class="decorative-elements">
        <!-- Left Side Elements -->
        <img src="img/building.png" class="building-img" alt="Building">
        <div class="graduation-cap">
            <img src="img/graduation-cap.png" alt="Graduation Cap">
        </div>
        <div class="university">
            <img src="img/university.png" alt="University">
        </div>
        <img src="img/dictionary.png" class="dictionary-img" alt="Dictionary">
        <div class="note">
            <img src="img/sticky-note.png" alt="Practice makes perfect">
        </div>
        
        <!-- Right Side Elements -->
        <div class="globe">
            <img src="img/globe.png" alt="Globe">
        </div>
        <img src="img/hat.png" class="hat-img" alt="Graduation Hat">
        <div class="idea">
            <img src="img/idea.png" alt="Idea">
        </div>
        <img src="img/certificate.png" class="certificate-img" alt="Certificate">
        <div class="plane">
            <img src="img/plane.png" alt="Plane">
        </div>
    </div>
    
    <!-- Testimonial Cards -->
    <div class="testimonial-cards">
        <img src="img/testimonial-cards.png" alt="Student testimonials">
        <div class="testimonial-label">
            Our Testimonials
        </div>
    </div>
    
    <!-- Hero Content -->
    <div class="container hero-content text-center py-5">
        <h1 class="display-4 fw-bold mb-3">
            Yuk, mulai perjalanan <span class="text-warning">cita-citamu</span><br>
            bareng <span class="text-primary">IKnow</span>Education!
        </h1>
        <p class="mb-4">Kami siap menjadi jembatan menuju suksesmu!</p>
        <a href="#" class="btn btn-warning btn-lg px-4 py-2 rounded-pill fw-semibold">
            Daftar Sekarang!
        </a>
    </div>
</div>

<!-- CSS for the Hero Section -->
<style>
.hero-section {
    min-height: 600px;
    padding: 100px 0;
    background-color: #ffffff;
    z-index: 1;
}

.decorative-elements {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: -1;
}

.decorative-elements img {
    position: absolute;
    max-width: 100px;
}

.building-img {
    left: 0;
    top: 100px;
    max-width: 150px;
}

.graduation-cap {
    position: absolute;
    left: 70px;
    top: 240px;
    width: 60px;
    height: 60px;
    background-color: rgba(130, 92, 255, 0.2);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.graduation-cap img {
    position: relative;
    max-width: 35px;
}

.university {
    position: absolute;
    left: 30px;
    top: 320px;
    width: 60px;
    height: 60px;
    background-color: rgba(255, 105, 180, 0.2);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.university img {
    position: relative;
    max-width: 35px;
}

.dictionary-img {
    left: 0;
    bottom: 80px;
    max-width: 120px;
}

.note {
    position: absolute;
    left: 100px;
    bottom: 280px;
}

.note img {
    position: relative;
    max-width: 80px;
}

.globe {
    position: absolute;
    right: 60px;
    top: 210px;
}

.globe img {
    position: relative;
    max-width: 50px;
}

.hat-img {
    right: 0;
    top: 100px;
    max-width: 150px;
}

.idea {
    position: absolute;
    right: 60px;
    bottom: 280px;
    width: 60px;
    height: 60px;
    background-color: rgba(255, 105, 180, 0.2);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.idea img {
    position: relative;
    max-width: 35px;
}

.certificate-img {
    right: 0;
    bottom: 170px;
    max-width: 150px;
}

.plane {
    position: absolute;
    right: 120px;
    bottom: 380px;
    width: 60px;
    height: 60px;
    background-color: rgba(130, 220, 130, 0.2);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.plane img {
    position: relative;
    max-width: 35px;
}

.testimonial-cards {
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    max-width: 500px;
    width: 100%;
}

.testimonial-cards img {
    width: 100%;
}

.testimonial-label {
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #f0a04b;
    color: white;
    padding: 8px 25px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 18px;
}

.hero-content {
    z-index: 10;
    position: relative;
    max-width: 800px;
}

.hero-content h1 {
    font-size: 40px;
    line-height: 1.2;
}

.text-warning {
    color: #f0a04b !important;
}

.text-primary {
    color: #375ABB !important;
}

.btn-warning {
    background-color: #f0a04b;
    border-color: #f0a04b;
    color: white;
}

.btn-warning:hover {
    background-color: #e09039;
    border-color: #e09039;
    color: white;
}

/* Responsive adjustments */
@media (max-width: 992px) {
    .decorative-elements {
        opacity: 0.5;
    }
    
    .hero-content h1 {
        font-size: 32px;
    }
}

@media (max-width: 768px) {
    .hero-section {
        padding: 80px 0;
    }
    
    .hero-content h1 {
        font-size: 28px;
    }
    
    .testimonial-cards {
        max-width: 90%;
    }
}

@media (max-width: 576px) {
    .decorative-elements {
        opacity: 0.3;
    }
    
    .hero-content h1 {
        font-size: 24px;
    }
}
</style>
<!-- Hero Section End -->
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
<!-- About End -->
    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h5 class="text-primary" style="font-weight: 600;">Program kami</h5>
                <h1 class="fw-bold" style="color: #072855;">Gabung Program IKnowEducation Sekarang!</h1>
                <div class="mt-4">
                    <a href="{{ url('/programs') }}" class="btn" style="background-color: #e46917; color: white; border-radius: 50px; padding: 10px 30px; font-weight: 600;">
                        Lihat Semua Program
                    </a>
                </div>
            </div>
    
            <div class="row g-4 justify-content-center">
                @forelse ($programs as $program)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm" style="border-radius: 20px;">
                            <div style="background: linear-gradient(180deg, #114aa7 0%, #306fd1 100%); border-top-left-radius: 20px; border-top-right-radius: 20px; overflow: hidden;">
                                <img src="/{{ $program->image }}" class="card-img-top" style="height: 220px; object-fit: cover;">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold" style="color: #072855;">{{ $program->title }}</h5>
                                <p class="card-text" style="flex-grow: 1;">{{ $program->description ?? 'Deskripsi program tidak tersedia.' }}</p>
                                <a href="{{ url('/program/' . $program->id).'/class' }}" class="btn" style="background-color: #e46917; color: white; border-radius: 50px; margin-top: 15px;">
                                    Lihat Program
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Belum ada program tersedia.</p>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Testimonial</h5>
                <h1>Our Client Saying!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach($testimonials as $index => $testimonial)
                    @if ($index > 5 ) 
                        @break
                    @endif
                    <div class="card border-0 shadow p-4 text-center">
                        <div class="d-flex flex-column align-items-center">
                            <img src="{{ $testimonial->image }}" class="rounded-circle mb-3 w-50" alt="Client Image" style="object-fit: cover;">
                            <h5 class="mb-0">{{ $testimonial->name }}</h5>
                            <small class="text-muted">{{ $testimonial->profession }}</small>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted">"{{ Str::limit($testimonial->description, 100) }}"</p>
                            <div class="text-warning">
                                @for ($i = 0; $i < $testimonial->rating; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <!-- Owl Carousel Initialization -->
    <script>
        $(document).ready(function(){
            $(".testimonial-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive:{
                    0:{ items: 1 },
                    768:{ items: 2 },
                    1024:{ items: 3 }
                }
            });
        });
    </script>
    
    <!-- Include Owl Carousel CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
@endsection
