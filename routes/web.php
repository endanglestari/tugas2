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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layouts/layout');
});

Route::get('/produk', function () {
    return view('layouts/produk');
});

Route::get('/login', function () {
    return view('layouts/login');
});

Route::get('/about', function () {
    return view('layouts/about');
});

Route::get('/blog', function () {
    return view('layouts/blog');
});
