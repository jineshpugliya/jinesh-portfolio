<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');

// Public Routes
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Protected Routes (Requires Authentication)
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Admin Routes (Requires both 'auth' and 'admin' middleware)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // Projects Management
    Route::resource('projects', PortfolioController::class)->except(['show', 'create', 'edit']);

    // Blog Management
    Route::get('/blogs', [BlogController::class, 'adminIndex'])->name('blogs');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');

    // Contact Management
    Route::get('/contacts', [ContactController::class, 'adminIndex'])->name('contacts');

    // User Management
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/users/{id}/edit', [AdminController::class, 'editUser'])->name('users.edit');
    Route::put('/users/{id}', [AdminController::class, 'updateUser'])->name('users.update');
    Route::delete('/users/{id}', [AdminController::class, 'deleteUser'])->name('users.delete');
});

// Additional authentication routes if needed
// require __DIR__ . '/auth.php';
