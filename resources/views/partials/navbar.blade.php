<div class="container py-2">
    <nav class="navbar navbar-expand-lg bg-white shadow rounded-pill px-4 py-1">
        <!-- Logo and Brand -->
        <div class="d-flex align-items-center">
            <img src="img/logo_transparent.png" class="img-fluid me-2" style="width:20px; height:20px">
            <a href="{{ url('/') }}" class="navbar-brand fw-bold mb-0">
                <span class="text-primary">IKnow</span><span class="text-dark">Education</span>
            </a>
        </div>

        <!-- Navbar Toggler (for small screens) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
            <ul class="navbar-nav gap-3">
                <!-- Dropdown Programs -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        Programs
                    </a>
                    <ul class="dropdown-menu shadow border-0 mt-2 animate__animated animate__fadeIn">
                        @foreach($programs as $program)
                            <li>
                                <a class="dropdown-item py-1 px-3" href="{{ url('/program/' . $program->id).'/class' }}">
                                    {{ $program->title }}
                                </a>
                            </li>
                        @endforeach
                        <li>
                            <a class="dropdown-item py-1 px-3" href="{{ url('/program') }}">Lihat semua program</a>
                        </li>
                    </ul>
                </li>

                <!-- Other Links -->
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
        </div>

        <!-- Contact Button -->
        <div class="d-flex ms-auto">
            <a href="https://wa.me/message/7RPWI4LRAZFJG1">
                <button class="btn text-white px-3 py-1" style="background-color: #E96B1F; border-radius: 20px;">
                    Hubungi minKnow!
                </button>
            </a>
        </div>
    </nav>
</div>