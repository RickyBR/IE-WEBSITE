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

    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="/{{$class->image}}" class="img-fluid rounded shadow class-image" alt="Class Image" style="height:450px; object-fit:cover; max-width:100%">
                        </div>
            <div class="col-md-6">
                <h2>{{$class->title}}</h2>
                <p class="text-muted">Rp {{ number_format($class->price, 0, ',', '.') }}</p>
                <p>Kelas ini dirancang untuk membantu Anda meningkatkan keterampilan bahasa Inggris untuk IELTS.</p>
                <div class="">
                <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tab Section Start -->
    <div class="container py-5">
        <ul class="nav nav-tabs" id="classTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab">Overview</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab">Curriculum</button>
            </li>
        </ul>
        <div class="tab-content py-4">
            <div class="tab-pane fade show active" id="overview" role="tabpanel">
                <h3>Apa yang akan Anda pelajari?</h3>
        
                @if(!empty($class->description))
                    <ul>
                        @foreach ($class->description as $desc)
                            <li>{{ $desc }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>Tidak ada deskripsi yang tersedia.</p>
                @endif
            </div>
            <div class="tab-pane fade" id="curriculum" role="tabpanel">
                <h3>Curriculum</h3>
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
