<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\TwoFactorController;
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

 // ===================================== Index Page
    Route::get('/',function(){
        return view('frontend.index');
    })->name('home');

 // ===================================== Services Page
    Route::get('servies-page',function(){
        return view('frontend.ServicesPage');
    })->name('servies-page');

 // ===================================== About Us
    Route::get('about-us',function(){
        return view('frontend.about-us');
    })->name('about-us');
