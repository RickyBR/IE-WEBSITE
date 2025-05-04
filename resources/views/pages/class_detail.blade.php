@extends('layouts.app_landing')

@section('title', 'Detail Kelas')

@section('content')
    {{-- <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Detail Kelas</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Kelas</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End --> --}}

   <!-- IELTS Class Card -->
<div class="container py-5">
    <div class="class-card">
        <div class="row g-0 align-items-center">
            <div class="col-md-5">
                <div class="class-image-container position-relative">
                    <img src="/{{$class->image}}" class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="{{$class->title}}">
                    <!-- Floating icons -->
                    <div class="floating-icon icon-university">
                        <i class="bi bi-bank"></i>
                    </div>
                    <div class="floating-icon icon-graduation">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <div class="floating-icon icon-idea">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="class-content p-4">
                    <h2 class="text-primary mb-3">{{$class->title}}</h2>
                    <p class="mb-4">Kelas ini dirancang untuk membantu anda meningkatkan keterampilan bahasa Inggris untuk IELTS.</p>
                    
                    <div class="price-section mb-4">
                        <h3 class="fs-2 fw-bold mb-0">Rp {{ number_format($class->price, 0, ',', '.') }}</h3>
                    </div>
                    
                    <div class="action-section">
                        <a href="https://wa.me/message/7RPWI4LRAZFJG1" class="btn btn-warning px-4 py-2 rounded-pill fw-semibold">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Class Card Styling */
.class-card {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.08);
}

.class-image-container {
    height: 100%;
    min-height: 300px;
    background-color: #3057bd;
    position: relative;
    overflow: hidden;
}

.class-content {
    padding: 25px;
}

.text-primary {
    color: #2048b1 !important;
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

/* Floating icons */
.floating-icon {
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.icon-university {
    background-color: #ff69b4;
    top: 15%;
    left: 15%;
}

.icon-graduation {
    background-color: #4da6ff;
    top: 10%;
    right: 20%;
}

.icon-idea {
    background-color: #ff4d4d;
    bottom: 20%;
    right: 15%;
}

/* Responsive adjustments */
@media (max-width: 767.98px) {
    .class-image-container {
        min-height: 200px;
    }
    
    .class-content {
        padding: 20px;
    }
}
</style>
<!-- End IELTS Class Card -->
    <!-- Tab Section Start --><div class="container py-5">
    {{-- Tabs --}}
    <ul class="nav nav-tabs" id="classTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab">
                Overview
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab">
                Curriculum
            </button>
        </li>
    </ul>

    {{-- Tab Content --}}
    <div class="tab-content py-4">
        {{-- Overview Tab --}}
        <div class="tab-pane fade show active" id="overview" role="tabpanel">
            {{-- Learning Section --}}
            <h5 class="fw-semibold mb-3">Apa yang akan anda pelajari?</h5>
            <div class="row g-3">
                @php
                    $learnings = [
                        ['icon' => 'bi-calendar3', 'text' => '10-day class<br>(flexible schedule)'],
                        ['icon' => 'bi-bar-chart-line', 'text' => 'All-skills or<br>as requested'],
                        ['icon' => 'bi-camera-video-fill', 'text' => '1-1 Online class<br>(via Zoom/Gmeet)'],
                        ['icon' => 'bi-person-lines-fill', 'text' => 'Personalised<br>learning'],
                        ['icon' => 'bi-file-earmark-text', 'text' => 'Pre-test<br>& Post-test'],
                    ];
                @endphp

                @foreach($learnings as $item)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="border rounded shadow-sm p-3 h-100 text-center">
                            <i class="bi {{ $item['icon'] }} fs-4 text-warning mb-2"></i>
                            <div class="fw-medium text-dark" style="font-size: 0.95rem;">{!! $item['text'] !!}</div>
                            <hr class="mt-2 mb-0" style="border-top: 1px dashed #ccc;">
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Benefit Section --}}
            <hr class="my-4">
            <h5 class="fw-semibold mb-3">Apa yang akan anda dapat?</h5>
            <div class="row g-3">
                @php
                    $benefits = [
                        ['icon' => 'bi-award', 'text' => 'Free<br>e-certificate'],
                        ['icon' => 'bi-book', 'text' => 'Free<br>e-books'],
                        ['icon' => 'bi-chat-dots', 'text' => 'Free consultation<br>outside the class'],
                        ['icon' => 'bi-key', 'text' => 'Free access<br>to materials'],
                    ];
                @endphp

                @foreach($benefits as $item)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="border rounded shadow-sm p-3 h-100 text-center">
                            <i class="bi {{ $item['icon'] }} fs-4 text-warning mb-2"></i>
                            <div class="fw-medium text-dark" style="font-size: 0.95rem;">{!! $item['text'] !!}</div>
                            <hr class="mt-2 mb-0" style="border-top: 1px dashed #ccc;">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Curriculum Tab --}}
        <div class="tab-pane fade" id="curriculum" role="tabpanel">
            <h5 class="fw-semibold mb-3">Curriculum</h5>
            <div class="accordion" id="curriculumAccordion">
                @forelse ($modules as $index => $module)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $index }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                                {{ $module->title }}
                            </button>
                        </h2>
                        <div id="collapse{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                            <div class="accordion-body">
                                {{ $module->content }}
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No modules available.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection
