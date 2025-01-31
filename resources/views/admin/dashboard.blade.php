<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <p><a href="programs" class="btn btn-primary dark:text-gray-100">Programs</a></p>
                    <p><a href="products" class="btn btn-primary dark:text-gray-100">Products</a></p>
                    <p><a href="testimonials" class="btn btn-primary dark:text-gray-100">Testimonials</a></p>
                    <p><a href="instructors" class="btn btn-primary dark:text-gray-100">Instructors</a></p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
