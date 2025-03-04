<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Public Routes
// Route::get('/', [PortfolioController::class, 'index'])->name('home');
// Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
// Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
// Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// // Admin Routes (Protected by Middleware)
// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

//     // Projects
//     Route::get('/admin/projects', [PortfolioController::class, 'adminIndex'])->name('admin.projects');
//     Route::post('/admin/projects', [PortfolioController::class, 'store'])->name('admin.projects.store');
//     Route::put('/admin/projects/{id}', [PortfolioController::class, 'update'])->name('admin.projects.update');
//     Route::delete('/admin/projects/{id}', [PortfolioController::class, 'destroy'])->name('admin.projects.destroy');

//     // Blogs
//     Route::get('/admin/blogs', [BlogController::class, 'adminIndex'])->name('admin.blogs');
//     Route::post('/admin/blogs', [BlogController::class, 'store'])->name('admin.blogs.store');
//     Route::put('/admin/blogs/{id}', [BlogController::class, 'update'])->name('admin.blogs.update');
//     Route::delete('/admin/blogs/{id}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');

//     // Contacts
//     Route::get('/admin/contacts', [ContactController::class, 'adminIndex'])->name('admin.contacts');
// });

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Route
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Portfolio Routes
    Route::resource('portfolio', PortfolioController::class);

    // Blog Routes
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
    Route::middleware('auth')->group(function () {
        Route::get('/admin/blogs', [BlogController::class, 'adminIndex'])->name('admin.blogs');
        Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
        Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
        Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    });

    // Contact Routes
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/admin/contacts', [ContactController::class, 'adminIndex'])->name('admin.contacts');
});


// require __DIR__ . '/auth.php';
