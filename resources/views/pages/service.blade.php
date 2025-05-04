@extends('layouts.app_landing')

@section('title', 'Our Team')

@section('content')
<!-- Team Section Start -->
<div class="container-fluid py-5 my-5">
    <div class="container">
        <!-- Header -->
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Our Team</h5>
            <h1 class="fw-bold" style="color: #D46A1F;">Meet our team of experts</h1>
        </div>

        <!-- Cards -->
        <div class="row justify-content-center g-4">
            @forelse($instructors as $instructor)
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="card border-0 shadow rounded-4 overflow-hidden bg-light position-relative h-100 d-flex flex-column">
                        <!-- Decorative Tape -->
                        {{-- <img src="{{ asset('images/tape-top-left.png') }}" alt="tape" 
                             class="position-absolute" 
                             style="top: 10px; left: 10px; width: 40px;">
                        <img src="{{ asset('images/tape-bottom-right.png') }}" alt="tape" 
                             class="position-absolute" 
                             style="bottom: 10px; right: 10px; width: 40px; transform: rotate(180deg);"> --}}

                        <!-- Image -->
                        <div class="px-3 pt-3">
                            <div class="overflow-hidden rounded-3">
                                <img src="{{ $instructor->image }}" 
                                     alt="{{ $instructor->name }}" 
                                     class="img-fluid w-100" 
                                     style="height: 300px; object-fit: cover; transform: scale(1.12); transition: transform 0.3s ease;">
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="px-4 py-3 text-center mt-auto">
                            <div class="bg-primary text-white py-2 px-3 rounded-2 fw-semibold fs-5 mb-3">
                                {{ $instructor->name }}
                            </div>
                            <ul class="list-unstyled text-start small mb-0">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Graduate of {{ $instructor->institution }}</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>LPDP Awardee</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>{{ $instructor->experience }} experience of teaching IELTS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">No instructors available at the moment.</p>
            @endforelse
        </div>
    </div>
</div>

<!-- Team Section End -->
@endsection