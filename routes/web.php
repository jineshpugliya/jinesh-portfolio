<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Artisan;

// Main portfolio routes
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::post('/contact', [PortfolioController::class, 'contact'])->name('contact.submit');
Route::get('/download-resume', [PortfolioController::class, 'downloadResume'])->name('resume.download');
Route::get('/blog', [PortfolioController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PortfolioController::class, 'blogPost'])->name('blog.post');

// Admin routes
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('projects', AdminController::class);
    Route::resource('articles', AdminController::class);
});

// Theme toggle
Route::post('/toggle-theme', [PortfolioController::class, 'toggleTheme'])->name('theme.toggle');



Route::get('/__clear-cache', function () {
    Artisan::call('optimize:clear');
    return 'Cache cleared';
});
