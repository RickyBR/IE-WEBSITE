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
 <!-- Why Choose Us -->
 <div class="container py-5">
    <div class="text-center mb-5">
        <h5 class="text-primary">Kenapa Harus Pilih iKnow Education?</h5>
        <h1>Paket Komplit Untuk Suksesmu!</h1>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-center">
                <h5>Qualified Tutors</h5>
                <p>Semua tutor di iKnow Education adalah lulusan top global university yang berpengalaman.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <h5>Flexible Schedule</h5>
                <p>Jadwal belajar fleksibel yang bisa disesuaikan dengan rutinitasmu.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <h5>Affordable Price</h5>
                <p>Harga kelas IELTS yang terjangkau dengan kualitas terbaik.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <h5>Quality Materials</h5>
                <p>Materi yang terus di-update sesuai dengan perkembangan official IELTS test.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <h5>Personalized Feedback</h5>
                <p>Feedback personal yang detail dan membangun, bikin kamu tahu strengths & weaknesses-mu.</p>
            </div>
        </div>
    </div>
</div>
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
                    <div class="card text-center">
                        <img src="/{{$program->image}}" class="img-fluid">
                        <h5 class="mt-3">{{$program->title}}</h5>
                        <p class="text-muted fw-bold">{{$program->price}}</p>
                        <div class="d-flex justify-content-center gap-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-file-alt me-2"></i> <span>10 Lessons</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-clock me-2"></i> <span>20 Pertemuan</span>
                            </div>
                        </div>
                        <a href="{{ url('/program/' . $program->id.'/class') }}" class="btn btn-primary mt-3">Read More</a>
                    </div>
                </div>
                @empty
                <p class="text-center">Belum ada program tersedia</p>
                @endforelse
            </div>
        </div>
    </div>

   
@endsection

