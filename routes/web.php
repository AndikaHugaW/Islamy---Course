<?php

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
    return view('home');
});

Route::get('/2', function () {
    return view('courses');
});

Route::get('/5', function () {
    return view('details-course');
});

Route::get('/3', function () {
    return view('blog');
});

Route::get('/4', function () {
    return view('contact');
});

Route::get('/masuk', function () {
    return view('login');
});

Route::get('/daftar', function () {
    return view('register');
});
