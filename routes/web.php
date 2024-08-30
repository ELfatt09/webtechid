<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Home / Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Blog Pages
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

// Portfolio Page
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

// Admin Dashboard
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
