<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/services', function () {
    return view('pages.service');
});

Route::get('/projects', function () {
    return view('pages.project');
});

Route::get('/project-detail', function () {
    return view('pages.project_detail');
});

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/testimonials', function () {
    return view('pages.testimonial');
});

Route::get('/404', function () {
    return view('pages.404');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin/dashboard');
    Route::get('/admin/products',[ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/products/create',[ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/save',[ProductController::class, 'save'])->name('admin/products/save');
    Route::get('/admin/products/edit/{id}',[ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}',[ProductController::class, 'update'])->name('admin/products/update');
    Route::get('/admin/products/delete/{id}',[ProductController::class, 'delete'])->name('admin/products/delete');


    Route::get('/admin/programs',[ProgramController::class, 'index'])->name('admin/programs');
    Route::get('/admin/programs/create',[ProgramController::class, 'create'])->name('admin/programs/create');
    Route::post('/admin/programs/save',[ProgramController::class, 'save'])->name('admin/programs/save');
    Route::get('/admin/programs/edit/{id}',[ProgramController::class, 'edit'])->name('admin/programs/edit');
    Route::put('/admin/programs/edit/{id}',[ProgramController::class, 'update'])->name('admin/programs/update');
    Route::get('/admin/programs/delete/{id}',[ProgramController::class, 'delete'])->name('admin/programs/delete');

    
    Route::get('/admin/instructors',[InstructorController::class, 'index'])->name('admin/instructors');
    Route::get('/admin/instructors/create',[InstructorController::class, 'create'])->name('admin/instructors/create');
    Route::post('/admin/instructors/save',[InstructorController::class, 'save'])->name('admin/instructors/save');
    Route::get('/admin/instructors/edit/{id}',[InstructorController::class, 'edit'])->name('admin/instructors/edit');
    Route::put('/admin/instructors/edit/{id}',[InstructorController::class, 'update'])->name('admin/instructors/update');
    Route::get('/admin/instructors/delete/{id}',[InstructorController::class, 'delete'])->name('admin/instructors/delete');

    
    Route::get('/admin/testimonials',[TestimonialController::class, 'index'])->name('admin/testimonials');
    Route::get('/admin/testimonials/create',[TestimonialController::class, 'create'])->name('admin/testimonials/create');
    Route::post('/admin/testimonials/save',[TestimonialController::class, 'save'])->name('admin/testimonials/save');
    Route::get('/admin/testimonials/edit/{id}',[TestimonialController::class, 'edit'])->name('admin/testimonials/edit');
    Route::put('/admin/testimonials/edit/{id}',[TestimonialController::class, 'update'])->name('admin/testimonials/update');
    Route::get('/admin/testimonials/delete/{id}',[TestimonialController::class, 'delete'])->name('admin/testimonials/delete');

    

});

require __DIR__.'/auth.php';
