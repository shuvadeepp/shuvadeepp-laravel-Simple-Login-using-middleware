<?php

use Illuminate\Support\Facades\Route;

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


Route::match(['get', 'post'], '/dashboard', function () {
    return view('dashboard');
})->middleware(['AuthUser', 'noCache']);


Route::match(['get', 'post'], '/', 'loginController@login');
Route::match(['get', 'post'], '/logout', 'loginController@logout');