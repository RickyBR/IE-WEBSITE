@extends('layouts.app_landing')

@section('title', 'Detail Kelas')

@section('content')
    <!-- Page Header Start -->
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
    <!-- Page Header End -->

    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="img/about-1.jpg" class="img-fluid rounded shadow" alt="Class Image">
            </div>
            <div class="col-md-6">
                <h2>IELTS Preparation Class Private Program</h2>
                <p class="text-muted">Rp 3.195.000</p>
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
                <p>Dalam kelas ini, Anda akan mempelajari teknik dan strategi terbaik untuk mendapatkan skor tinggi dalam IELTS.</p>
                <h4>Detail Jadwal</h4>
                <p>Senin & Rabu, 18:00 - 20:00 WIB</p>
                <h4>Mentor</h4>
                <p>John Doe - IELTS Expert</p>
            </div>
            <div class="tab-pane fade" id="curriculum" role="tabpanel">
                <h3>Curriculum</h3>
                <div class="accordion" id="curriculumAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                Modul IELTS Dasar
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#curriculumAccordion">
                            <div class="accordion-body">
                                Dalam modul ini, Anda akan belajar dasar-dasar IELTS termasuk listening, reading, writing, dan speaking.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                Modul IELTS Dasar 2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
                            <div class="accordion-body">
                                Modul lanjutan yang memperdalam pemahaman tentang teknik IELTS dengan latihan dan simulasi ujian.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
