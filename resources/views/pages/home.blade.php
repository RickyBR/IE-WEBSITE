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
                            <img src="/{{$program->image}}" class="img-fluid rounded" style="width:100%;height:80%">
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

    <div class="container py-5">
       

    <!-- About Start -->
    <div class="container-fluid py-5 my-5">
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
                    <a href="" class="btn btn-primary rounded px-5 py-3 text-white">More Details</a>
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
                    <a href="" class="btn btn-primary rounded px-5 py-3 text-white">More Details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Program welcome End -->
   

    {{-- <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Testimonial</h5>
                <h1>Our Client Saying!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
                <div class="testimonial-item border p-4">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="img/testimonial-1.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-primary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="img/testimonial-2.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-primary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="img/testimonial-3.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-primary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="img/testimonial-4.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-primary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial End --> --}}


     <!-- Testimonial Section -->
     <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
        <h2 class="text-center fw-bold">Apa kata para alumni IKnow Education?</h2>
    </div>
    <div class="container-fluid testimonial py-5">
        <div class="container">
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
                <!-- Testimonial Item 1 -->
                <div class="testimonial-item border p-4">
                    <div class="d-flex align-items-center">
                        <div class="testimonial-avatar">
                            <img src="img/testimonial-1.jpg" alt="Alumni 1" class="img-fluid rounded-circle" style="width: 80px; height: 80px;">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-primary">Alumni Name 1</h4>
                            <p class="m-0 pb-3">Web Developer</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">"IKnow Education helped me gain the skills needed to land my first job as a web developer. The curriculum was practical and easy to follow."</p>
                    </div>
                </div>
    
                <!-- Testimonial Item 2 -->
                <div class="testimonial-item border p-4">
                    <div class="d-flex align-items-center">
                        <div class="testimonial-avatar">
                            <img src="img/testimonial-2.jpg" alt="Alumni 2" class="img-fluid rounded-circle" style="width: 80px; height: 80px;">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-primary">Alumni Name 2</h4>
                            <p class="m-0 pb-3">Graphic Designer</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">"Thanks to IKnow Education, I became a professional graphic designer. The teachers were amazing, and the projects were very hands-on."</p>
                    </div>
                </div>
    
                <!-- Testimonial Item 3 -->
                <div class="testimonial-item border p-4">
                    <div class="d-flex align-items-center">
                        <div class="testimonial-avatar">
                            <img src="img/testimonial-3.jpg" alt="Alumni 3" class="img-fluid rounded-circle" style="width: 80px; height: 80px;">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-primary">Alumni Name 3</h4>
                            <p class="m-0 pb-3">Digital Marketer</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">"The best decision I made was to join IKnow Education. The digital marketing course transformed my career and gave me the skills to thrive in a competitive field."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
