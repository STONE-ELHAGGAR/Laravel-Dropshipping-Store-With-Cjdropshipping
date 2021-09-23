<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admins Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admins routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Admins" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admins'], function () {
    Route::get('home',function () {
        return view('welcome');
    });
});
