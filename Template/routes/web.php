<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/topbar', function () {
    return view('topbar');
});

Route::get('/projectCart', function () {
    return view('projectCart');
});

Route::get('/contract', function () {
    return view('contract');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/Register', function () {
    return view('Register');
});