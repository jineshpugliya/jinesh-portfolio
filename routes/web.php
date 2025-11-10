<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/experience', 'experience');
Route::view('/skills', 'skills');
Route::view('/contact', 'contact');
