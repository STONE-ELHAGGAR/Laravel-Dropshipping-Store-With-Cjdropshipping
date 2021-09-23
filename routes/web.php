<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
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

Route::get('/',[FrontController::class,'index'])->name('home');
Route::get('/cart',[FrontController::class,'cart'])->name('cart');
Route::get('/about-us',[FrontController::class,'about_us'])->name('about-us');