<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReelsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("home",function(){
    return view('home');
});

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::get('/home', [HomeController::class, 'index'])->name('home');




Route::post('/profile/upload', [ProfileController::class, 'upload'])->name('profile.upload');
