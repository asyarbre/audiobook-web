<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContentController;
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
    return view('welcome');
});

Route::prefix('dashboard')->middleware('isLogin')->group(function () {
    Route::resource('book', BookController::class)->name('index', 'book.index');
    Route::resource('content', ContentController::class)->name('index', 'content.index');
});

Route::get('/auth', [AuthenticationController::class, 'index'])->name('auth.index')->middleware('guest');
Route::post('/auth/login', [AuthenticationController::class, 'login'])->name('auth.login')->middleware('guest');
Route::get('/auth/logout', [AuthenticationController::class, 'logout'])->name('auth.logout');