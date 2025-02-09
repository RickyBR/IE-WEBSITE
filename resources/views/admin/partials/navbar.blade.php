<div class="flex">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white min-h-screen fixed top-16 left-0">
                <div class="p-6">
            <h2 class="text-2xl font-bold">Admin Panel</h2>
        </div>
        <ul class="space-y-4">
            <li><a href="programs" class="block px-4 py-2 hover:bg-gray-700 text-white no-underline">Programs</a></li>
            <li><a href="classes" class="block px-4 py-2 hover:bg-gray-700 text-white no-underline">Class</a></li>
            <li><a href="modules" class="block px-4 py-2 hover:bg-gray-700 text-white no-underline">Class Modules</a></li>
            <li><a href="testimonials" class="block px-4 py-2 hover:bg-gray-700 text-white no-underline">Testimonials</a></li>
            <li><a href="instructors" class="block px-4 py-2 hover:bg-gray-700 text-white no-underline">Instructors</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        @yield('content')
    </div>
</div>
