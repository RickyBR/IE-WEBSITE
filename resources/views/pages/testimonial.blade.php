@extends('layouts.app_landing')

@section('title', 'Our Blog')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 text-center text-white bg-dark">
        <div class="container py-5">
            <h1 class="display-4 fw-bold">Testimonial</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                    <li class="breadcrumb-item active text-primary" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
{{-- 
    <!-- Stats Section Start -->
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-lg-3 col-sm-6">
                <h1 class="text-primary fw-bold">99%</h1>
                <p>Happy Customers</p>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h1 class="text-primary fw-bold">25K+</h1>
                <p>Successful Businesses</p>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h1 class="text-primary fw-bold">120+</h1>
                <p>Clients Love Us</p>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h1 class="text-primary fw-bold">5★</h1>
                <p>Average Reviews</p>
            </div>
        </div>
    </div> --}}
    <!-- Stats Section End -->

    <!-- Testimonial Start -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary">What Our Clients Say</h5>
            <h2 class="fw-bold">Real Stories from Real Customers</h2>
        </div>
        <div class="row">
            {{-- @foreach($testimonials as $testimonial) --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <img src="{{ $testimonial->image }}" class="rounded-circle me-3" width="60" height="60" alt="Client Image">
                            <div>
                                <h5 class="mb-0">{{ $testimonial->name }}</h5>
                                <small class="text-muted">{{ $testimonial->profession }}</small>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted">"{{ $testimonial->message }}"</p>
                            <div class="text-warning">
                                @for ($i = 0; $i < $testimonial->rating; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <img src="{{ $testimonial->image }}" class="rounded-circle me-3" width="60" height="60" alt="Client Image">
                            <div>
                                <h5 class="mb-0">{{ $testimonial->name }}</h5>
                                <small class="text-muted">{{ $testimonial->profession }}</small>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted">"{{ $testimonial->message }}"</p>
                            <div class="text-warning">
                                @for ($i = 0; $i < $testimonial->rating; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <img src="{{ $testimonial->image }}" class="rounded-circle me-3" width="60" height="60" alt="Client Image">
                            <div>
                                <h5 class="mb-0">{{ $testimonial->name }}</h5>
                                <small class="text-muted">{{ $testimonial->profession }}</small>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted">"{{ $testimonial->message }}"</p>
                            <div class="text-warning">
                                @for ($i = 0; $i < $testimonial->rating; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <img src="{{ $testimonial->image }}" class="rounded-circle me-3" width="60" height="60" alt="Client Image">
                            <div>
                                <h5 class="mb-0">{{ $testimonial->name }}</h5>
                                <small class="text-muted">{{ $testimonial->profession }}</small>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted">"{{ $testimonial->message }}"</p>
                            <div class="text-warning">
                                @for ($i = 0; $i < $testimonial->rating; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <img src="{{ $testimonial->image }}" class="rounded-circle me-3" width="60" height="60" alt="Client Image">
                            <div>
                                <h5 class="mb-0">{{ $testimonial->name }}</h5>
                                <small class="text-muted">{{ $testimonial->profession }}</small>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted">"{{ $testimonial->message }}"</p>
                            <div class="text-warning">
                                @for ($i = 0; $i < $testimonial->rating; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <img src="{{ $testimonial->image }}" class="rounded-circle me-3" width="60" height="60" alt="Client Image">
                            <div>
                                <h5 class="mb-0">{{ $testimonial->name }}</h5>
                                <small class="text-muted">{{ $testimonial->profession }}</small>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted">"{{ $testimonial->message }}"</p>
                            <div class="text-warning">
                                @for ($i = 0; $i < $testimonial->rating; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>
    </div>
    <!-- Testimonial End -->
@endsection

