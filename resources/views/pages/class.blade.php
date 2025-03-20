@extends('layouts.app_landing')

@section('title', 'Our Blog')

@section('content')
    <style>
       .card {
            transition: all 0.3s ease-in-out;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: white;
            padding: 20px;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
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
                <h5 class="text-primary">Our Class</h5>
                <h1>Kelas Unggulan Kami!</h1>
            </div>
            <div class="row g-4">
                @forelse ($products as $product)
                <div class="col-md-4 col-lg-3">
                    <div class="card text-center">
                            <img src="/{{$product->image}}" class="img-fluid">
                        <div class="blog-content text-start mt-3">
                            <h5>{{$product->title}}</h5>
                            <span class="card-text fw-bold ">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            <div class="d-flex justify-content-start mt-1">
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
