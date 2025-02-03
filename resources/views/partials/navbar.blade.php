<div class="container-fluid" style="background-color: #F5F7FA">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-0">
            <a href="{{ url('/') }}" class="navbar-brand">
                <h1 class="text-black">Iknow<span class="text-black">Education</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <!-- Home -->
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>

                    <!-- About -->
                    <a href="{{ url('/about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">Programs</a>

                    <!-- Services -->
                    <a href="{{ url('/services') }}" class="nav-item nav-link {{ Request::is('services') ? 'active' : '' }}">Instructors</a>

                    <!-- Projects -->
                    <a href="{{ url('/projects') }}" class="nav-item nav-link {{ Request::is('projects') ? 'active' : '' }}">Testimonial</a>

                    <a href="{{ url('/projects') }}" class="nav-item nav-link {{ Request::is('projects') ? 'active' : '' }}">About</a>

                </div>
            </div>

            <!-- Additional Info -->
            <div class="d-none d-xl-flex flex-shrink-0">
                <a href="" class="me-2"><button type="button" class="px-4 py-sm-2 px-sm-4 btn btn-secondary rounded carousel-content-btn1 text-white">Contact Us</button></a>
            </div>
        </nav>
    </div>
</div>
