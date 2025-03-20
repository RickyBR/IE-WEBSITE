@extends('layouts.app_landing')

@section('title', 'Iknow Education')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/car1.png" class="img-fluid" alt="First slide" style="width: 100%; height:80%; object-fit:cover">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <p class="text-white display-5 mb-4 animated fadeInRight">Learn a New Skill Everyday, Anytime, and Anywhere.</p>
                            <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded carousel-content-btn2 animated fadeInLeft">Mulai Sekarang!</button></a>
                        </div>
                    </div>
                </div>
                
            </div>
        
        </div>
    </div>
    <!-- Carousel End -->
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
   <div class="container-fluid py-5 my-0 px-0 mx-0" style="background-color: #f1f1f1;">    
    <div class="container pt-5">
    <div class="row g-5">
        <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
            <h5 class="text-primary">About Us</h5>
            <h1 class="mb-4">Iknow Education</h1>
            <p>Mulai perjalanan cita-citamu bareng iKnow Education. Kita siap jadi jembatan menuju suksesmu</p>
            <a href="{{ url('/about')}}" class="btn btn-primary rounded px-5 py-3 text-white">Read More</a>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
            <div class="h-100 position-relative">
                <img src="img/about-us-icon.png" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
            </div>
        </div>

    </div>
</div>
</div>
<!-- About End -->
    <!-- Blog Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h5 class="text-primary">Our Program</h5>
                <h1>Program Unggulan Kami!</h1>
            </div>
            <div class="row g-4">
                @forelse ($programs as $program)

                <div class="col-md-4 col-lg-3">
                    <div class="blog-item bg-light rounded p-2 text-center">
                        <div class="d-flex justify-content-center">
                            <img src="/{{ $program->image }}" class="img rounded" style="width:100%;height:80%; object-fit: cover;">
                        </div>
                        <div class="blog-content text-center mt-3">
                            <h5>{{$program->title}}</h5>
                            <div class="d-flex justify-content-center p-2">
                                <a href="{{ url('/program/' . $program->id).'/class' }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse

                <!-- Duplicate the above block for more blog items -->
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->

    <!-- Program welcome Start -->
    <div class="container-fluid py-5 my-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="img/program-icon.png" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">Program kami!</h5>
                    <h1 class="mb-4">Gabung Program iKnow Education</h1>
                    <p>Siapkan dirimu untuk peluang global! Bergabunglah dengan iKnow Education dan raih impianmu sekarang.</p>
                    <a href="{{ url('/program/') }}" class="btn btn-primary rounded px-5 py-3 text-white">Liat Program!</a>
                </div>
            </div>
        </div>
    <!-- Program welcome End -->

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
    

    <!-- Testimonial End -->
@endsection
