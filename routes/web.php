<?php

use App\Http\Controllers\catalogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ModelsCarsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarImportController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/catalog', [catalogController::class, 'index'])->name('catalog');

Route::get('/cars/{model}', [CardController::class, 'show'])->name('cars.show');



Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/account', [UserController::class, 'show'])->name('account');
    Route::get('/user/edit', [UserController::class, 'showEditForm'])->name('edit');
    Route::post('/user/update', [UserController::class, 'update'])->name('update');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



    Route::get('/admin/cars/create', [CarsController::class, 'create'])->name('cars.create');
    Route::post('/admin/cars', [CarsController::class, 'store'])->name('cars.store');
    Route::delete('/admin/cars/{car}', [CarsController::class, 'destroy'])->name('cars.destroy');

    Route::post('/cars/book', [BookingController::class, 'book'])->name('book');

    Route::post('/bookings/{booking}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');

    Route::post('/admin/cars/import', [CarImportController::class, 'import'])->name('cars.import');
    Route::view("/admin/cars/import", 'cars.import')->name('cars.import.form');
});
