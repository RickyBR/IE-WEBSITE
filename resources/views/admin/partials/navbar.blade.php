<div class="container">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Admin Panel</h2>
        </div>
        <ul class="sidebar-links">
            <li><a href="/admin/programs" class="sidebar-link">Programs</a></li>
            <li><a href="/admin/classes" class="sidebar-link">Class</a></li>
            <li><a href="/admin/modules" class="sidebar-link">Class Modules</a></li>
            <li><a href="/admin/testimonials" class="sidebar-link">Testimonials</a></li>
            <li><a href="/admin/instructors" class="sidebar-link">Instructors</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
        <!-- Konten akan ditempatkan di sini -->
    </div>
</div>

<style>
    /* Container */
    .container {
        display: flex;
        padding-left: 400px
    }

    /* Sidebar */
    .sidebar {
        width: 250px;
        background-color: #2d2d2d;
        color: white;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        padding-top: 40px;
    }

    .sidebar-header {
        padding: 20px;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
    }

    .sidebar-links {
        list-style-type: none;
        padding: 0;
    }

    .sidebar-link {
        display: block;
        padding: 10px 20px;
        color: white;
        text-decoration: none;
        background-color: #333;
        margin: 5px 0;
        border-radius: 4px;
    }

    .sidebar-link:hover {
        background-color: #555;
    }

    /* Main Content */
    .main-content {
        margin-left: 250px; /* Sesuaikan dengan lebar sidebar */
        padding: 20px;
        width: 100%;
        box-sizing: border-box;
    }
</style>