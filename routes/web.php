<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LandingController;
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
Route::get('/', [LandingController::class, 'allCategory'])->name('landing.index');
Route::get('/search',[LandingController::class, 'search'])->name('landing.search');

Route::get('/audiobook/{slug}', [BookController::class, 'show'])->name('book.details');
Route::get('/read/{slug}', [ContentController::class, 'show'])->name('book.read');

Route::prefix('category')->group(function () {
    Route::view('/', 'landing.category')->name('category.index');
    Route::get('/all-category', [LandingController::class, 'show'])->name('category.all-category');
    Route::get('/{category}', [LandingController::class, 'showByCategory'])->name('category.by-category');
});

Route::prefix('dashboard')->middleware('isLogin')->group(function () {
    Route::resource('book', BookController::class)->name('index', 'book.index');
    Route::resource('content', ContentController::class)->name('index', 'content.index');
});

Route::get('/auth', [AuthenticationController::class, 'index'])->name('auth.index')->middleware('guest');
Route::post('/auth/login', [AuthenticationController::class, 'login'])->name('auth.login')->middleware('guest');
Route::get('/auth/logout', [AuthenticationController::class, 'logout'])->name('auth.logout');