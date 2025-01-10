<?php

use Illuminate\Support\Facades\Route;

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

// Route for the service details page
Route::get('/service-details', function () {
    return view('service-details');
});


Route::fallback(function () {
    return view('404');
});
