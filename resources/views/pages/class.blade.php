@extends('layouts.app_landing')

@section('title', 'Our Blog')

@section('content')
    <style>
        .card {
            transition: all 0.3s ease-in-out;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .btn-contact {
            background-color: #ff7b00;
            color: white;
            border-radius: 5px;
            padding: 8px 12px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-contact:hover {
            background-color: #e66900;
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
                @forelse ($products as $product)

                <div class="col-md-4 col-lg-3">
                    <div class="blog-item  rounded p-3 text-center" style="background-color: #4d535e28;">
                        <div class="d-flex justify-content-center">
                            <img src="/{{$product->image}}" class="img-fluid rounded" style="width:100%;height:80%">
                        </div>
                        <div class="blog-content text-start mt-3">
                            <h5>{{$product->title}}</h5>
                            <span class="card-text fw-bold ">{{$product->price}}</span>
                            <div class="rounded p-2 mt-1 d-flex align-items-center" style="background-color: white;">
                                <div class="row g-2">
                                    <div class="col-auto d-flex align-items-center">
                                        <i class="fas fa-file-alt me-2"></i> <span>10 Lessons</span>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <i class="fas fa-clock me-2"></i> <span>20 Pertemuan</span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="d-flex justify-content-start mt-3">
                                <a href="{{ url('/class/' . $product->id.'/detail') }}" class="btn btn-primary">Read More</a>
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
@endsection
