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
// routes baru
Route::get('/', [HomeController::class, 'dashboard']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::middleware('auth')->group(function () {
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Admin
    Route::middleware('admin')->group(function () {
        
    });

    // User
    Route::middleware('user')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
        Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
        Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    });
});

require __DIR__.'/auth.php';
