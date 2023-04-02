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


//donate
Route::get('/donate/{id}', [App\Http\Controllers\DonateController::class, 'index']);
Route::post('/donated', [App\Http\Controllers\DonateController::class, 'create']);

Route::get('/request/{id}', [App\Http\Controllers\RequestController::class, 'index']);
Route::post('/requested', [App\Http\Controllers\RequestController::class, 'create']);

//Profile
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::get('/statusDonate/{id}', [App\Http\Controllers\ProfileController::class, 'statusDonate']);
Route::get('/statusObject/{id}', [App\Http\Controllers\ProfileController::class, 'statusObject']);
Route::get('/editProfile', [App\Http\Controllers\ProfileController::class, 'editProfile']);
Route::post('/updateProfile', [App\Http\Controllers\ProfileController::class, 'update']);

//progress
Route::get('/progress/{id}', [App\Http\Controllers\ProgressController::class, 'index']);

//Request Manager Permission
Route::get('/requestVerify', [App\Http\Controllers\RequestPermissionController::class, 'index']);
Route::post('/requestVerify/update', [App\Http\Controllers\RequestPermissionController::class, 'update']);
Route::get('/managerPage', [App\Http\Controllers\ManagerPageController::class, 'index']);

//For Manager Open Money Campaign
Route::get('/openCampaignMoney', [App\Http\Controllers\openCampaignMoneyController::class, 'index']);
Route::post('/openCampaignMoneyController/create', [App\Http\Controllers\openCampaignMoneyController::class, 'create']);

//For Manager Open Object Campaign
Route::get('/openCampaignObject/callOpenCampaign', [App\Http\Controllers\ManagerPageController::class, 'callOpenCampaign']);
Route::get('/openCampaignObject', [App\Http\Controllers\openCampaignObjectController::class, 'index']);
Route::post('/openCampaignObjectController/create', [App\Http\Controllers\openCampaignObjectController::class, 'create']);

// Update Money Campaign Progress


//Staff
Route::get('/staff_money',[App\Http\Controllers\UserDonateController::class, 'index'])->name('staff_money');
Route::get('/staff_verify',[App\Http\Controllers\ManagerController::class, 'index'])->name('staff_verify');

Route::get('/staff_money/approve/{id}/{amount}/{campaign_money_id}',[App\Http\Controllers\UserDonateController::class, 'approve'])->name('staff_approve');
Route::get('/staff_money/deny/{id}',[App\Http\Controllers\UserDonateController::class, 'deny'])->name('staff_deny');
Route::get('/staff_verify/eslip/{id}',[App\Http\Controllers\UserDonateController::class, 'eslip'])->name('eslip');

Route::get('/staff_verify/approve/{id}',[App\Http\Controllers\ManagerController::class, 'approve'])->name('verify_approve');
Route::get('/staff_verify/deny/{id}',[App\Http\Controllers\ManagerController::class, 'deny'])->name('verify_deny');
Route::get('/staff_verify/info/{id}',[App\Http\Controllers\ManagerController::class, 'info'])->name('info');

//Admin
Route::get('/admin',[App\Http\Controllers\StaffController::class,'index'])->name('admin');
Route::get('/admin/search/',[App\Http\Controllers\StaffController::class,'search'])->name('search');
Route::get('/admin/createStaff/',[App\Http\Controllers\StaffController::class,'createStaffPage'])->name('createStaffPage');
Route::post('admin/postStaff', [App\Http\Controllers\StaffController::class,'createStaffFromCreatePage'])->name('createStaff');
Route::get('admin/delete/{id}', [App\Http\Controllers\StaffController::class,'deleteStaff'])->name('deleteStaff');
Route::get('admin/edit/{id}', [App\Http\Controllers\StaffController::class,'editStaff'])->name('editStaff');
Route::get('admin/update/{id}', [App\Http\Controllers\StaffController::class,'updateStaff'])->name('updateStaff');