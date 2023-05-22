<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [IndexController::class,'index'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/book', [BookController::class, 'edit'])->name('book.edit');
    Route::put('/book', [BookController::class, 'update'])->name('book.update');
    Route::delete('/book', [BookController::class, 'destroy'])->name('book.destroy');
});
//Route::get('/login', [loginController::class,'index'])->name('login');
//Route::post('/login', [loginController::class,'login']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
