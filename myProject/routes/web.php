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

Route::get('/', [App\Http\Controllers\CampaignController::class, 'index'])->name('welcome');
Route::get('/search', [App\Http\Controllers\CampaignController::class, 'search']);

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/indexM', [App\Http\Controllers\HomeController::class, 'index'])->name('indexM');

//donate
Route::get('/donate/{id}', [App\Http\Controllers\DonateController::class, 'index']);
Route::post('/donated', [App\Http\Controllers\DonateController::class, 'create']);

Route::get('/request/{id}', [App\Http\Controllers\RequestController::class, 'index']);
Route::post('/requested', [App\Http\Controllers\RequestController::class, 'create']);

//progress
Route::get('/progress/{id}', [App\Http\Controllers\ProgressController::class, 'index']);
Route::get('/progressObject/{id}', [App\Http\Controllers\ProgressController::class, 'indexObject']);
Route::get('/progressGuest/{id}', [App\Http\Controllers\ProgressController::class, 'indexGuest']);
Route::get('/progressObjectGuest/{id}', [App\Http\Controllers\ProgressController::class, 'indexObjectGuest']);
Route::get('/progressManager/{id}', [App\Http\Controllers\ProgressController::class, 'indexManager']);
Route::get('/progressObjectManager/{id}', [App\Http\Controllers\ProgressController::class, 'indexObjectManager']);
Route::get('/addProgress/{id}', [App\Http\Controllers\ProgressController::class, 'toAddProgress'])->name('addProgress');
Route::get('/addProgressPage/{id}', [App\Http\Controllers\ProgressController::class, 'indexAdd']);
Route::post('/add', [App\Http\Controllers\ProgressController::class, 'add']);
Route::get('/moneyProgress/{id}',[App\Http\Controllers\UserDonateController::class, 'moneyProgressPage']);
Route::get('/moneyProgress/eslip/{id}',[App\Http\Controllers\UserDonateController::class, 'eSlipDonate']);

//Profile
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::get('/statusDonate/{id}', [App\Http\Controllers\ProfileController::class, 'statusDonate']);
Route::get('/statusObject/{id}', [App\Http\Controllers\ProfileController::class, 'statusObject']);
Route::get('/editProfile', [App\Http\Controllers\ProfileController::class, 'editProfile']);
Route::post('/updateProfile', [App\Http\Controllers\ProfileController::class, 'update']);

//Profile
Route::get('/profileManager', [App\Http\Controllers\ProfileManagerController::class, 'index']);
Route::get('/statusDonateManager/{id}', [App\Http\Controllers\ProfileManagerController::class, 'statusDonate']);
Route::get('/statusObjectManager/{id}', [App\Http\Controllers\ProfileManagerController::class, 'statusObject']);
Route::get('/editProfileManager', [App\Http\Controllers\ProfileManagerController::class, 'editProfile']);
Route::post('/updateProfileManager', [App\Http\Controllers\ProfileManagerController::class, 'update']);

//Request Manager Permission
Route::get('/requestVerify', [App\Http\Controllers\RequestPermissionController::class, 'index']);
Route::post('/requestVerify/update', [App\Http\Controllers\RequestPermissionController::class, 'update']);
Route::get('/managerPage', [App\Http\Controllers\ManagerPageController::class, 'index'])->name('managerPage');;

//For Manager Open Money Campaign
Route::get('/openCampaignMoney', [App\Http\Controllers\openCampaignMoneyController::class, 'index']);
Route::post('/openCampaignMoneyController/create', [App\Http\Controllers\openCampaignMoneyController::class, 'create']);

// edit Money Campaign
Route::get('/edit/{id}',[App\Http\Controllers\CampaignController::class, 'editCampaign']);
Route::post('/update',[App\Http\Controllers\CampaignController::class, 'update']);

// object Request Manager
Route::get('/decisionObject/{id}', [App\Http\Controllers\ProgressController::class, 'decisionObject']);
Route::get('/decisionObjectVote/{id}', [App\Http\Controllers\ProgressController::class, 'vote']);
Route::get('/vote/{id}/bool/{bool}', [App\Http\Controllers\ProgressController::class, 'voteChangeStatus']);

// For Manager Open Object Campaign
Route::get('/openCampaignObject/callOpenCampaign', [App\Http\Controllers\ManagerPageController::class, 'callOpenCampaign']);
Route::get('/openCampaignObject', [App\Http\Controllers\openCampaignObjectController::class, 'index']);
Route::post('/openCampaignObjectController/create', [App\Http\Controllers\openCampaignObjectController::class, 'create']);

// campaign Terminate Request
Route::get('/requestTerminate/{id}',[App\Http\Controllers\CampaignController::class, 'requestTerminate']);
Route::post('/request', [App\Http\Controllers\CampaignController::class, 'request']);

//Staff
Route::get('/staff_money',[App\Http\Controllers\UserDonateController::class, 'index'])->name('staff_money');
Route::get('/staff_money/donated',[App\Http\Controllers\UserDonateController::class, 'donated'])->name('donated');
Route::get('/staff_money/donated/search',[App\Http\Controllers\UserDonateController::class, 'search'])->name('donatedSearch');
Route::get('/staff_verify',[App\Http\Controllers\ManagerController::class, 'index'])->name('staff_verify');
Route::get('/terminatereq',[App\Http\Controllers\ManagerController::class, 'terminateCam'])->name('terminatereq');
Route::get('/terminatereq/info/{id}',[App\Http\Controllers\ManagerController::class, 'terminateInfo'])->name('terminateinfo');
Route::get('/terminatereq/deny/{id}',[App\Http\Controllers\ManagerController::class, 'terminateDeny'])->name('terminatedeny');
Route::get('/terminatereq/approve/{id}',[App\Http\Controllers\ManagerController::class, 'terminateApprove'])->name('terminateapprove');
Route::get('/staff_verify/approved',[App\Http\Controllers\ManagerController::class, 'approved'])->name('approved');
Route::get('/staff_verify/search',[App\Http\Controllers\ManagerController::class, 'search'])->name('verifySearch');

Route::get('/staff_money/approve/{id}/{amount}/{campaign_money_id}',[App\Http\Controllers\UserDonateController::class, 'approve'])->name('staff_approve');
Route::get('/staff_money/deny/{id}',[App\Http\Controllers\UserDonateController::class, 'deny'])->name('staff_deny');
Route::get('/staff_verify/eslip/{id}',[App\Http\Controllers\UserDonateController::class, 'eslip'])->name('eslip');

Route::get('/staff_verify/approve/{id}',[App\Http\Controllers\ManagerController::class, 'approve'])->name('verify_approve');
Route::get('/staff_verify/deny/{id}',[App\Http\Controllers\ManagerController::class, 'deny'])->name('verify_deny');
Route::get('/staff_verify/info/{id}',[App\Http\Controllers\ManagerController::class, 'info'])->name('info');

Route::get('/terminatereq',[App\Http\Controllers\ManagerController::class, 'terminateCam'])->name('terminatereq');
Route::get('/terminatereq/terminated',[App\Http\Controllers\ManagerController::class, 'terminated'])->name('terminated');
Route::get('/terminatereq/terminated/search',[App\Http\Controllers\ManagerController::class, 'terminateSearch'])->name('terminateSearch');
Route::get('/terminatereq/info/{id}',[App\Http\Controllers\ManagerController::class, 'terminateInfo'])->name('terminateinfo');
Route::get('/terminatereq/deny/{id}',[App\Http\Controllers\ManagerController::class, 'terminateDeny'])->name('terminatedeny');
Route::get('/terminatereq/approve/{id}',[App\Http\Controllers\ManagerController::class, 'terminateApprove'])->name('terminateapprove');


//Admin
Route::get('/admin',[App\Http\Controllers\StaffController::class,'index'])->name('admin');
Route::get('/admin/search/',[App\Http\Controllers\StaffController::class,'search'])->name('search');
Route::get('/admin/createStaff/',[App\Http\Controllers\StaffController::class,'createStaffPage'])->name('createStaffPage');
Route::post('admin/postStaff', [App\Http\Controllers\StaffController::class,'createStaffFromCreatePage'])->name('createStaff');
Route::get('admin/delete/{id}', [App\Http\Controllers\StaffController::class,'deleteStaff'])->name('deleteStaff');
Route::get('admin/edit/{id}', [App\Http\Controllers\StaffController::class,'editStaff'])->name('editStaff');
Route::get('admin/update/{id}', [App\Http\Controllers\StaffController::class,'updateStaff'])->name('updateStaff');