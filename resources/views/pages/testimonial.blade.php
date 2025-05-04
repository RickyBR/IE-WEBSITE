@extends('layouts.app_landing')

@section('title', 'Testimonials')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f8f9fa;
        }

        .testimonials-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            border-radius: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }
        
        .section-title {
            color: #0d47a1;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: #0d47a1;
        }

        .swiper {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px 0 50px;
        }

        .testimonial-card {
            display: flex;
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            height: 300px;
            border: 1px solid #eaeaea;
        }

        .testimonial-left {
            width: 25%;
            background: #f5c8a8; /* Salmon/peach color as in design */
            display: flex;
            flex-direction: column;
            padding: ;
            position: relative;
        }

        .testimonial-left img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .kak-prefix {
            font-weight: normal;
            display: inline-block;
            margin-right: 3px;
        }

        .student-name {
            font-size: 20px;
            color: #ffffff;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .student-role {
            font-size: 14px;
            color: #ffffff;
            opacity: 0.9;
        }

        .testimonial-right {
            width: 65%;
            padding: 20px 25px;
            display: flex;
            flex-direction: column;
        }

        .brand-label {
            color: #0d47a1;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
        }

        .progress-bar {
            height: 6px;
            background: #e0e0e0;
            flex-grow: 1;
            margin-left: 15px;
            border-radius: 3px;
            position: relative;
            overflow: hidden;
        }

        .progress-fill {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            background: linear-gradient(to right, #ff6a00, #ff9e44);
            border-radius: 3px;
        }

        .program-title {
            font-size: 18px;
            font-weight: bold;
            color: #0d47a1;
            margin-bottom: 20px;
        }

        .overall-score {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
            background-color: #f8f9fa;
            padding: 10px 15px;
            border-radius: 8px;
        }
        
        .score-label {
            font-size: 14px;
            color: #333;
        }
        
        .score-value {
            font-weight: bold;
            color: #0d47a1;
            margin: 0 15px;
        }

        .score-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .badge {
            background: #ff7e2c;
            border-radius: 30px;
            padding: 6px 15px;
            font-size: 13px;
            font-weight: bold;
            color: white;
        }

        .testimonial-desc {
            font-size: 14px;
            color: #555;
            line-height: 1.6;
            text-align: left;
            font-style: italic;
        }

        .swiper-button-prev, .swiper-button-next {
            color: #0d47a1;
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .swiper-button-prev:after, .swiper-button-next:after {
            font-size: 18px;
            font-weight: bold;
        }

        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background: #ccc;
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background: #0d47a1;
            transform: scale(1.2);
        }

        @media (max-width: 768px) {
            .testimonial-card {
                flex-direction: column;
                height: auto;
            }

            .testimonial-left, .testimonial-right {
                width: 100%;
            }

            .testimonial-left {
                padding-bottom: 15px;
            }

            .testimonial-left img {
                max-height: 180px;
                width: auto;
                margin: 0 auto 10px;
            }

            .score-badges {
                justify-content: center;
            }

            .section-title {
                font-size: 24px;
            }
            
            .overall-score {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }
            
            .score-value {
                margin: 5px 0;
            }
            
            .progress-bar {
                width: 100%;
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

<div class="testimonials-section">
    <h2 class="section-title">Our Students' Saying!</h2>

    <div class="swiper mySwiper testimonial-swiper">
        <div class="swiper-wrapper">
            <!-- Testimonial 1 -->
            <div class="swiper-slide">
                <div class="testimonial-card">
                    <div class="testimonial-left">
                        <img src="img/team-1.jpg" alt="Dylan">
                        <div>
                            <h4 class="student-name"><span class="kak-prefix">Kak</span> Dylan</h4>
                            <span class="student-role">High School Student</span>
                        </div>
                    </div>
                    <div class="testimonial-right">
                        <div class="brand-label">
                            iKnowEducation
                        </div>
                        <div class="program-title">IELTS Private Intensive Gold Student</div>
                        
                        <div class="overall-score">
                            <div class="score-label">Overall IELTS score</div>
                            <div class="score-value">7.5</div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 83%"></div>
                            </div>
                        </div>
                        
                        <div class="score-badges">
                            <span class="badge">8.0 Listening</span>
                            <span class="badge">7.0 Reading</span>
                            <span class="badge">6.5 Writing</span>
                            <span class="badge">7.5 Speaking</span>
                        </div>
                        
                        <div class="testimonial-desc">
                            "Saya merasa telah diajarkan bahan-bahan IELTS dengan sangat baik dan dapat lebih diperjelas lagi terutama di bagian saya masih sangat lemah. Selain itu, hal-hal yang saya sudah bisa lakukan dengan baik masih diajarkan untuk lebih diperjelaskan lagi sehingga pengetahuan saya terhadap bidang tersebut lebih baik lagi."
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="swiper-slide">
                <div class="testimonial-card">
                    <div class="testimonial-left">
                        <img src="/api/placeholder/250/300" alt="Anisa">
                        <div>
                            <h4 class="student-name"><span class="kak-prefix">Kak</span> Anisa</h4>
                            <span class="student-role">University Student</span>
                        </div>
                    </div>
                    <div class="testimonial-right">
                        <div class="brand-label">
                            iKnowEducation
                        </div>
                        <div class="program-title">TOEFL Preparation Course</div>
                        
                        <div class="overall-score">
                            <div class="score-label">Overall TOEFL score</div>
                            <div class="score-value">108</div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 90%"></div>
                            </div>
                        </div>
                        
                        <div class="score-badges">
                            <span class="badge">28 Reading</span>
                            <span class="badge">27 Listening</span>
                            <span class="badge">26 Speaking</span>
                            <span class="badge">27 Writing</span>
                        </div>
                        
                        <div class="testimonial-desc">
                            "Program persiapan TOEFL dari iKnow Education sangat membantu saya mempersiapkan ujian dengan baik. Metode pengajaran yang terstruktur dan latihan intensif membuat saya percaya diri menghadapi ujian dan mendapatkan skor yang memuaskan."
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="swiper-slide">
                <div class="testimonial-card">
                    <div class="testimonial-left">
                        <img src="/api/placeholder/250/300" alt="Reza">
                        <div>
                            <h4 class="student-name"><span class="kak-prefix">Kak</span> Reza</h4>
                            <span class="student-role">Professional</span>
                        </div>
                    </div>
                    <div class="testimonial-right">
                        <div class="brand-label">
                            iKnowEducation
                        </div>
                        <div class="program-title">Business English Course</div>
                        
                        <div class="overall-score">
                            <div class="score-label">Course Satisfaction</div>
                            <div class="score-value">9.5</div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 95%"></div>
                            </div>
                        </div>
                        
                        <div class="score-badges">
                            <span class="badge">9.5 Materials</span>
                            <span class="badge">9.0 Teaching</span>
                            <span class="badge">9.8 Support</span>
                            <span class="badge">9.7 Results</span>
                        </div>
                        
                        <div class="testimonial-desc">
                            "Kursus Business English dari iKnow Education sangat relevan dengan kebutuhan profesional saya. Saya bisa langsung mengaplikasikan materi yang dipelajari dalam pekerjaan sehari-hari. Pengajar sangat kompeten dan metode pembelajarannya efektif."
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.testimonial-swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            speed: 800,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
    });
</script>
@endsection