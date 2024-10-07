<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


// // Rute untuk dashboard dan autentikasi
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
// Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
// // Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// // Rute untuk coffee
// Route::resource('coffees', CoffeeController::class);

// // Rute untuk order
// Route::resource('orders', OrderController::class);

// // Rute untuk halaman utama
// Route::get('/', function () {
//     return view('welcome');
// });

// // Rute untuk pengguna admin
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('users/admin', [UserController::class, 'adminOnly']);
// });

// // Auth routes
// require __DIR__.'/auth.php';
