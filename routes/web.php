<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
<<<<<<< HEAD
Route::get('/', [AuthController::class, 'login']);
Route::get('/daftar', [AuthController::class, 'register'])->name('daftar');
=======
Route::get('/', function () {
    return view('home');
});
>>>>>>> be5abcdb9f9b6f20ac89dfa252ea3841726a4342

Route::get('/home', [HomeController::class, 'index'])->name('home');

// admin
Route::middleware('auth', 'user')->group(function () {
    
});

// user
Route::middleware('auth', 'user')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
});

require __DIR__.'/auth.php';
