<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Ambassadors Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Ambassadors routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Ambassadors" middleware group. Now create something great!
|
*/

Route::get('/ambassadors', function () {
    return 'Hi';
});
