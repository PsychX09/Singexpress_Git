<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/homepage', function () {
//     return view('home');
// })->name('homepage');

// Route for homepage with GET and POST methods
Route::match(['get', 'post'], '/homepage', function () {
    return view('home');
})->name('homepage');


Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/login', function () {
    return view('login');
})->name('login');
