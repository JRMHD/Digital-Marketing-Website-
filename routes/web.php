<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\NewsletterController;

Route::get('/', function () {
    return view('welcome');
});




// Route for the home page
Route::get('/', function () {
    return view('welcome');
});

// Route for the about page
Route::get('/about', function () {
    return view('about');
});

// Route for the contact page
Route::get('/contact', function () {
    return view('contact');
});

// Route for the FAQ page
Route::get('/faq', function () {
    return view('faq');
});

// Route for the services page
Route::get('/services', function () {
    return view('services');
});


Route::get('/privacy-policy', function () {
    return view('privacypolicy');
})->name('privacy.policy');

Route::fallback(function () {
    return view('404');
});


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/book-consultation', [ConsultationController::class, 'store'])->name('consultation.store');
Route::post('/subscribe-newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
