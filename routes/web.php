<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', [\App\Http\Controllers\frontend\HomepageController::class, 'index'])->name('homepage');
Route::get('/shops', [\App\Http\Controllers\frontend\ShopController::class, 'index'])->name('shop');
Route::get('/shops/{shop:nama_barang}', [\App\Http\Controllers\frontend\ShopController::class, 'show'])->name('shop.show');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
