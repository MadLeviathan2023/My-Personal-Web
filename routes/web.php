<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'home'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/projects', [HomeController::class, 'projects'])->name('projects');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/admin-auth', [AdminController::class, 'login'])->name('admin-auth');

