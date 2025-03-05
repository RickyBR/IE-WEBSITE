<div class="container-fluid" style="background-color: #F5F7FA">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-2">
            
            <img src="img/logo_transparent.png" class="img-fluid mx-1" style="width:20px; height:20px">
            <a href="{{ url('/') }}" class="navbar-brand fw-bold text-primary">
                Iknow<span class="text-dark">Education</span>
            </a>

            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <!-- Home -->
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Programs
                        </a>
                        <ul class="dropdown-menu shadow rounded border-0 mt-2 p-2 animate__animated animate__fadeIn" aria-labelledby="navbarDropdown">
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
                    </div>
                    <!-- Instructors -->
                    <a href="{{ url('/instructor') }}" class="nav-item nav-link {{ Request::is('instructor') ? 'active' : '' }}">Instructors</a>

                    <!-- Testimonial -->
                    <a href="{{ url('/testimonial') }}" class="nav-item nav-link {{ Request::is('testimonial') ? 'active' : '' }}">Testimonial</a>

                    <!-- About -->
                    <a href="{{ url('/about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="d-none d-xl-flex flex-shrink-0 flex-column align-items-start">
                <span><b>Hubungi minKnow sekarang!</b></span>
                <a href="https://wa.me/message/7RPWI4LRAZFJG1" class="me-2">
                    <button type="button" class="px-4 py-sm-2 px-sm-4 btn btn-secondary rounded carousel-content-btn1 text-white">Contact Us</button>
                </a>
            </div>
        </nav>
    </div>
</div>