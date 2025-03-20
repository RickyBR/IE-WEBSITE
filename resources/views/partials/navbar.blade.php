<div class="container-fluid bg-light">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-2">
            <div class="d-flex align-items-center">
                <img src="img/logo_transparent.png" class="img-fluid mx-1" style="width:20px; height:20px">
                <a href="{{ url('/') }}" class="navbar-brand fw-bold text-primary">
                    Iknow<span class="text-dark">Education</span>
                </a>
            </div>

            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"
            style="border-color: black;">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mx-xl-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                    </li>

                    <!-- Dropdown Programs -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Programs
                        </a>
                        <ul class="dropdown-menu shadow border-0 mt-2 p-2 animate__animated animate__fadeIn">
                            @foreach($programs as $program)
                                <li>
                                    <a class="dropdown-item py-2 px-3 rounded" href="{{ url('/program/' . $program->id).'/class' }}">
                                        {{ $program->title }}
                                    </a>
                                </li>
                            @endforeach
                            <li>
                                <a class="dropdown-item py-2 px-3 rounded" href="{{ url('/program') }}">
                                    Lihat semua program
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/instructor') }}" class="nav-link {{ Request::is('instructor') ? 'active' : '' }}">Instructors</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/testimonial') }}" class="nav-link {{ Request::is('testimonial') ? 'active' : '' }}">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/about') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                    </li>
                </ul>

                <!-- Contact Button (Tetap Muncul di Semua Ukuran Layar) -->
                <div class="d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center mt-3 mt-lg-0">
                    <span class="fw-bold">Hubungi minKnow sekarang!</span>
                    <a href="https://wa.me/message/7RPWI4LRAZFJG1" class="me-2">
                        <button type="button" class="btn btn-secondary rounded text-white px-4 py-2">
                            Contact Us
                        </button>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
