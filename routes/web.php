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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('utama.index');
});
Route::get('/contact', function () {
    return view('utama.contact');
});
Route::get('/product', function () {
    return view('decoration.product');
});
Route::get('/about', function () {
    return view('about.toko');
});
Route::get('/login', function () {
    return view('login.login');
});
Route::get('/register', function () {
    return view('login.register');
});

