<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .footer {
            background-color: #0d47a1;
            color: #ffffff;
            padding: 3rem 0 1.5rem;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .footer-text {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        
        .social-icons {
            display: flex;
            gap: 10px;
            margin-top: 1.5rem;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            background-color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .social-icon i {
            color: #0d47a1;
            font-size: 1.2rem;
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .contact-button {
            background-color: #FF6F00;
            color: white;
            border-radius: 25px;
            padding: 8px 20px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            border: none;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }
        
        .contact-button:hover {
            background-color: #FF9100;
            transform: translateY(-2px);
        }
        
        .contact-button i {
            margin-left: 8px;
        }
        
        .copyright {
            padding-top: 1.5rem;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .footer-text {
                font-size: 1rem;
            }
            .social-icons {
                justify-content: center;
                margin-top: 2rem;
            }
            .copyright {
                text-align: center;
            }
            .col-md-6.d-flex.justify-content-end.align-items-end {
                justify-content: center !important;
                margin-top: 1rem;
            }
        }
    </style>
</head>
<body>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer-logo">
                    <h1 class="text-white fw-bold m-0">
                        <span class="d-flex align-items-center">
                            <span class="me-2">iKnow</span><span class="fw-normal">Education</span>
                        </span>
                    </h1>
                </div>
                
                <p class="footer-text">
                    Mulai perjalanan cita-citamu bareng iKnow Education. Kita siap jadi jembatan menuju suksesmu.
                </p>
                
                <button class="contact-button">
                    Hubungi minKnow! <i class="fas fa-arrow-right"></i>
                </button>
            </div>
            
            <div class="col-md-6 d-flex justify-content-end align-items-end">
                <div class="social-icons">
                    <a href="#" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fas fa-globe"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <hr class="border-light opacity-25">
                <p class="copyright text-white">
                    © 2025 iKnowEducation. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>