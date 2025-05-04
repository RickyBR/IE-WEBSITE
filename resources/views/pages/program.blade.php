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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h5 class="fw-semibold mb-2">Kenapa harus pilih <span class="text-primary">iKnow</span>Education?</h5>
      <h1 class="fw-bold">Paket <span class="text-warning">Komplit</span> Untuk Suksesmu!</h1>
    </div>

    <div class="row g-4 justify-content-center">
      <!-- Card 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="border rounded p-4 shadow-sm h-100 text-center">
          <div class="d-flex align-items-center justify-content-start mb-3 gap-2">
            <i class="bi bi-person-badge-fill fs-2 text-warning"></i>
            <h5 class="fw-semibold text-warning m-0">Qualified Tutors</h5>
          </div>
          <hr class="my-3" style="border-top: 2px dashed #000000;">
          <p class="mb-0">Semua tutor di iKnow Education adalah lulusan top global university yang berpengalaman.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="border rounded p-4 shadow-sm h-100 text-center">
          <div class="d-flex align-items-center justify-content-start mb-3 gap-2">
            <i class="bi bi-journal-text fs-2 text-warning"></i>
            <h5 class="fw-semibold text-warning m-0">Quality Materials</h5>
          </div>
          <hr class="my-3" style="border-top: 2px dashed #000000;">
          <p class="mb-0">Materi yang terus di-update sesuai dengan perkembangan official IELTS test.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="border rounded p-4 shadow-sm h-100 text-center">
          <div class="d-flex align-items-center justify-content-start mb-3 gap-2">
            <i class="bi bi-currency-dollar fs-2 text-warning"></i>
            <h5 class="fw-semibold text-warning m-0">Affordable Price</h5>
          </div>
          <hr class="my-3" style="border-top: 2px dashed #000000;">
          <p class="mb-0">Harga kelas IELTS yang terjangkau dengan kualitas terbaik.</p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-4 col-sm-6">
        <div class="border rounded p-4 shadow-sm h-100 text-center">
          <div class="d-flex align-items-center justify-content-start mb-3 gap-2">
            <i class="bi bi-calendar-check fs-2 text-warning"></i>
            <h5 class="fw-semibold text-warning m-0">Flexible Schedule</h5>
          </div>
          <hr class="my-3" style="border-top: 2px dashed #000000;">
          <p class="mb-0">Jadwal belajar fleksibel yang bisa disesuaikan dengan rutinitasmu.</p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-md-4 col-sm-6">
        <div class="border rounded p-4 shadow-sm h-100 text-center">
          <div class="d-flex align-items-center justify-content-start mb-3 gap-2">
            <i class="bi bi-chat-dots-fill fs-2 text-warning"></i>
            <h5 class="fw-semibold text-warning m-0">Personalized Feedback</h5>
          </div>
          <hr class="my-3" style="border-top: 2px dashed #000000;">
          <p class="mb-0">Feedback personal yang detail dan membangun, bikin kamu tahu strengths & weaknesses-mu.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- IELTS Programs Section -->
@forelse ($programs as $program)
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="text-primary">{{ $program->title }}</h3>
            <p>{{ $program->description }}</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            @forelse ($program->products as $product)
            @php
                // Determine column width based on number of products in this program
                $productCount = count($program->products);
                $colClass = 'col-12'; // Default for mobile
                
                if ($productCount == 1) {
                    $colClass = 'col-12 col-md-8 col-lg-6 mx-auto'; // One product centered
                } elseif ($productCount == 2) {
                    $colClass = 'col-12 col-md-6'; // Two products, two columns
                } elseif ($productCount == 3) {
                    $colClass = 'col-12 col-md-6 col-lg-4'; // Three products, three columns on large screens
                } elseif ($productCount == 4) {
                    $colClass = 'col-12 col-md-6 col-lg-6'; // Four products, 2x2 grid
                } else {
                    $colClass = 'col-12 col-md-6 col-lg-4'; // Default for 3+ products
                }
            @endphp
            <div class="{{ $colClass }}">
                <div class="card h-100 shadow-sm border-0 p-0">
                    <div class="card-header bg-primary text-white text-center py-3 position-relative">
                        @if (!empty($product->is_gold))
                        <span class="position-absolute top-0 end-0 translate-middle badge rounded-pill bg-warning">
                            <i class="bi bi-star-fill"></i> GOLD
                        </span>
                        @endif
                        <h5 class="mb-0">{{ $product->title }}</h5>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled mb-4">
                            {{-- Primary Features (dummy data - replace with actual data later) --}}
                            @php
                                $primaryFeatures = [];
                                
                                if (strpos(strtolower($product->title), 'intensive')) {
                                    if (strpos(strtolower($product->title), 'super')) {
                                        if (!empty($product->is_gold)) {
                                            $primaryFeatures = ['25-day class (flexible schedule)', 'All-skills or as requested', '1-1 class (Online via Zoom/Onsite)', 'Personalized learning', 'Pre-test & Post-test'];
                                        } else {
                                            $primaryFeatures = ['20-day class (flexible schedule)', 'All-skills or as requested', '1-1 class (Online via Zoom/Onsite)', 'Personalized learning', 'Pre-test & Post-test'];
                                        }
                                    } else {
                                        if (!empty($product->is_gold)) {
                                            $primaryFeatures = ['15-day class (flexible schedule)', 'All-skills or as requested', '1-1 class (Online via Zoom/Onsite)', 'Personalized learning', 'Pre-test & Post-test'];
                                        } else {
                                            $primaryFeatures = ['10-day class (flexible schedule)', 'All-skills or as requested', '1-1 class (Online via Zoom/Onsite)', 'Personalized learning', 'Pre-test & Post-test'];
                                        }
                                    }
                                } else {
                                    $primaryFeatures = ['Flexible schedule', 'All-skills or as requested', '1-1 class (Online via Zoom/Onsite)', 'Personalized learning', 'Pre-test & Post-test'];
                                }
                            @endphp
                            
                            @foreach($primaryFeatures as $feature)
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                <span>{{ $feature }}</span>
                            </li>
                            @endforeach
                        </ul>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            {{-- Secondary Features (dummy data - replace with actual data later) --}}
                            @php
                                $secondaryFeatures = ['Free e-certificate of completion', 'Free e-books', 'Free consultation outside the class', 'Free access to materials'];
                                
                                // Add scholarship mentoring for Superintensive Gold
                                if (strpos(strtolower($product->title), 'superintensive') && !empty($product->is_gold)) {
                                    $secondaryFeatures[] = 'Free 1x scholarship mentoring';
                                }
                            @endphp
                            
                            @foreach($secondaryFeatures as $feature)
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                <span>{{ $feature }}</span>
                            </li>
                            @endforeach
                        </ul>
                        <div class="text-center mt-4">
                            @if ($program->id !== '9e2bc282-d996-45e1-96b5-193a5ef77ag3')
                            <h4 class="mb-3">Rp {{ number_format($product->price, 0, ',', '.') }}</h4>
                            @endif
                            <a href="https://wa.me/message/7RPWI4LRAZFJG1" class="btn btn-warning w-100 fw-semibold">Daftar Sekarang!</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center">Belum ada produk tersedia</p>
            @endforelse
        </div>
    </div>
</div>
@empty
<p class="text-center">Belum ada program tersedia</p>
@endforelse

<!-- Bootstrap Icons (for the star) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    

   
@endsection

