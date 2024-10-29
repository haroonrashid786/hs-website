<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/services/python-service', function () {
    return view('python-service');
})->name('python-service');

Route::get('/services/mobile-application-service', function () {
    return view('mobile-application-service');
})->name('mobile-application-service');

Route::get('/services/laravel-service', function () {
    return view('laravel-service');
})->name('laravel-service');

Route::get('/services/product-development-service', function () {
    return view('product-development-service');
})->name('product-development-service');

Route::get('/services/wordpress-development-service', function () {
    return view('wordpress-development-service');
})->name('wordpress-development-service');

Route::get('/services/seo-service', function () {
    return view('seo-service');
})->name('seo-service');

Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('/services/ui-ux-design-service', function () {
    return view('ui&ux-design-service');
})->name('ui&ux-design-service');

Route::get('/terms-condition', function () {
    return view('term&condition');
})->name('term&condition');

Route::get('/cookie&policie', function () {
    return view('cookie&policie');
})->name('cookie&policie');

Route::get('/case-studies', function () {
    return view('case-studies');
})->name('case-studies');

Route::get('/case-studies-details', function () {
    return view('case-studies-details');
})->name('case-studies-details');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/case-studies/n-style', function () {
    return view('case-studies-pages/n-style');
})->name('n-style');

Route::get('/case-studies/onemove', function () {
    return view('case-studies-pages/onemove');
})->name('onemove');

Route::get('/case-studies/concierge-bookings', function () {
    return view('case-studies-pages/concierge-bookings');
})->name('concierge-bookings');

Route::get('/case-studies/endup', function () {
    return view('case-studies-pages/endup');
})->name('endup');







Route::get('/blogs', [BlogsController::class, 'blogs'])->name('blogs');
Route::get('/blog-details/{id}', [BlogsController::class, 'blogdetail'])->name('blog.details');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/terms-and-conditions', function () {
    return view('terms');
})->name('terms');

Route::get('/case-studies', function () {
    return view('case-studies');
})->name('portfolio');

Route::post('/lead', [LeadsController::class, 'store'])->name('leads.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/leads', [LeadsController::class, 'index'])->name('leads');
    Route::get('/admin-blogs', [BlogsController::class, 'index'])->name('admin-blogs');
    Route::get('/blog-create', [BlogsController::class, 'create'])->name('blog-create');
    Route::post('/blogs', [BlogsController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/{id}/edit', [BlogsController::class, 'edit'])->name('blogs.edit');
    Route::delete('/blogs/{id}/delete', [BlogsController::class, 'delete'])->name('blogs.delete');
    Route::put('/blogs/{id}', [BlogsController::class, 'update'])->name('blogs.update');
    Route::get('/blogs/{id}', [BlogsController::class, 'show'])->name('blogs.show');


});

require __DIR__.'/auth.php';
