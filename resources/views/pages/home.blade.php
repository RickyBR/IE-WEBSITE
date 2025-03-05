@extends('layouts.app_landing')

@section('title', 'Iknow Education')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/car1.png" class="img-fluid" alt="First slide" style="width: 100%; height:80%; object-fit:cover">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <p class="text-white display-5 mb-4 animated fadeInRight">Learn a New Skill Everyday, Anytime, and Anywhere.</p>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded carousel-content-btn2 animated fadeInLeft">Mulai Sekarang!</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-1.jpg" class="img-fluid" alt="First slide" style="width: 100%; height:80%; object-fit:cover">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <p class="text-white display-5 mb-4 animated fadeInRight">Learn a New Skill Everyday, Anytime, and Anywhere.</p>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded carousel-content-btn2 animated fadeInLeft">Mulai Sekarang!</button></a>
                        </div>
                    </div>
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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

    <!-- Blog Start -->
    <div class="container-fluid py-5">
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
                            <img src="/{{ $program->image }}" class="img-fluid rounded" style="width:100%;height:80%">
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
    </div>
    <!-- Blog End -->
       

    <!-- About Start -->
    <div class="container-fluid py-5 my-5 px-0 mx-0" style="background-color: #f1f1f1;">    
            <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="img/about-us-icon.png" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">About Us</h5>
                    <h1 class="mb-4">Iknow Education</h1>
                    <p>Mulai perjalanan cita-citamu bareng iKnow Education. Kita siap jadi jembatan menuju suksesmu</p>
                    <a href="{{ url('/about')}}" class="btn btn-primary rounded px-5 py-3 text-white">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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
                    <h5 class="text-primary">Program</h5>
                    <h1 class="mb-4">Iknow Education</h1>
                    <p>Mulai perjalanan cita-citamu bareng iKnow Education. Kita siap jadi jembatan menuju suksesmu</p>
                    <a href="{{  url('/program/9e25f0c5-f769-4c80-96eb-9d2b9791c1a3/class') }}" class="btn btn-primary rounded px-5 py-3 text-white">More Details</a>
                </div>
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
            <div class="row">
                @foreach($testimonials as $index => $testimonial)
                    @if ($index > 1 ) 
                        @break
                    @endif
            
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card border-0 shadow p-4">
                            <div class="d-flex align-items-center">
                                <img src="{{ $testimonial->image }}" class="rounded-circle me-3" width="60" height="60" alt="Client Image">
                                <div>
                                    <h5 class="mb-0">{{ $testimonial->name }}</h5>
                                    <small class="text-muted">{{ $testimonial->profession }}</small>
                                </div>
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
                    </div>
                @endforeach
            </div>
            
            <!-- Tombol Read More -->
            <div class="text-center mt-4">
                <a href="{{ url('/testimonial') }}" class="btn btn-primary">Read More</a>
            </div>
            
        </div>
    </div>

    <!-- Testimonial End -->
@endsection
