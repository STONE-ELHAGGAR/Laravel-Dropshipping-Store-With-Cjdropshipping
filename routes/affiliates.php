<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Affiliates Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Affiliates routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Affiliates" middleware group. Now create something great!
|
*/

Route::get('/affiliates', function () {
    return view('welcome');
});
