<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\backend\TwoFactorController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
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


// Route Dashboard
Route::prefix('admin')->group(function(){
    // ===================================== Dashboard
    Route::get('dashboard',function(){
        return view('backend.dashboard');
    })->name('dashboard');


    // ===================================== Setting Home
    Route::get('setting-home',function(){
        return view('backend.settingHome');
    })->name('setting-home');


    // ===================================== Create Packages
    Route::get('create-package',function(){
        return view('backend.createpackage');
    })->name('create-package');


    // ===================================== Setting About us
    Route::get('setting-aboutus',function(){
        return view('backend.settingabout-us');
    })->name('setting-aboutus');


    // ===================================== Create Items
    Route::get('create-item',function(){
        return view('backend.create-item');
    })->name('create-item');



    // ===================================== Follow Items
    Route::get('follow-item',function(){
        return view('backend.follow-item');
    })->name('follow-item');



    // ===================================== Follow Packages
    Route::get('follow-package',function(){
        return view('backend.follow-package');
    })->name('follow-package');


    // ===================================== Coupon
    Route::get('coupon',function(){
        return view('backend.coupon');
    })->name('coupon');


    // ===================================== Client
    Route::get('client',function(){
        return view('backend.client');
    })->name('client');
});
