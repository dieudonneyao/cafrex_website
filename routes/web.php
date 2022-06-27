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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/projets', function () {
    return view('projets');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/expertise', function () {
    return view('expertise');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/news', function () {
    return view('news');
});

