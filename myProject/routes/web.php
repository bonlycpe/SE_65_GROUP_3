<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);


//Profile

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::get('/statusDonate/{id}', [App\Http\Controllers\ProfileController::class, 'statusDonate']);
Route::get('/statusObject/{id}', [App\Http\Controllers\ProfileController::class, 'statusObject']);
Route::get('/editProfile', [App\Http\Controllers\ProfileController::class, 'editProfile']);
Route::post('/updateProfile', [App\Http\Controllers\ProfileController::class, 'update']);

//Staff

Route::get('/staff_money',[App\Http\Controllers\UserDonateController::class, 'index'])->name('staff_money');
Route::get('/staff_verify',[App\Http\Controllers\ManagerController::class, 'index'])->name('staff_verify');

Route::get('/staff_money/approve/{id}',[App\Http\Controllers\UserDonateController::class, 'approve'])->name('staff_approve');
Route::get('/staff_money/deny/{id}',[App\Http\Controllers\UserDonateController::class, 'deny'])->name('staff_deny');

Route::get('/staff_verify/approve/{id}',[App\Http\Controllers\ManagerController::class, 'approve'])->name('verify_approve');
Route::get('/staff_verify/deny/{id}',[App\Http\Controllers\ManagerController::class, 'deny'])->name('verify_deny');