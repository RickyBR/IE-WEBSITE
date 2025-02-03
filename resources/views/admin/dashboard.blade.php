<x-app-layout>
    {{-- Content --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold text-gray-900 mb-4">Welcome, Admin!</h1>
                <p class="text-gray-700">Manage your platform efficiently.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mt-6">
                    {{-- Programs --}}
                    <div class="bg-blue-500 p-6 rounded-lg shadow-md text-white">
                        <h2 class="text-lg font-semibold">Programs</h2>
                        <p>Manage available programs.</p>
                        <a href="programs" class="mt-2 inline-block bg-white text-blue-500 px-4 py-2 rounded shadow">
                            View
                        </a>
                    </div>

                    {{-- Products --}}
                    <div class="bg-green-500 p-6 rounded-lg shadow-md text-white">
                        <h2 class="text-lg font-semibold">Products</h2>
                        <p>Manage and update products.</p>
                        <a href="products" class="mt-2 inline-block bg-white text-green-500 px-4 py-2 rounded shadow">
                            View
                        </a>
                    </div>

                    {{-- Testimonials --}}
                    <div class="bg-yellow-500 p-6 rounded-lg shadow-md text-white">
                        <h2 class="text-lg font-semibold">Testimonials</h2>
                        <p>Manage user testimonials.</p>
                        <a href="testimonials" class="mt-2 inline-block bg-white text-yellow-500 px-4 py-2 rounded shadow">
                            View
                        </a>
                    </div>

                    {{-- Instructors --}}
                    <div class="bg-red-500 p-6 rounded-lg shadow-md text-white">
                        <h2 class="text-lg font-semibold">Instructors</h2>
                        <p>Manage instructor data.</p>
                        <a href="instructors" class="mt-2 inline-block bg-white text-red-500 px-4 py-2 rounded shadow">
                            View
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>