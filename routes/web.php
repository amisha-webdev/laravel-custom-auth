<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordResertController;
use App\Http\Controllers\ProfileController;


// Route::get('/', function () {
//     return view('layouts.master');
// });


Route::middleware('guest')->group(function () {

      Route::get('/', [UserController::class, 'create'])->name('register');
      Route::post('/signup', [UserController::class, 'store'])->name('signup');
      Route::get('/signin', [LoginController::class, 'create'])->name('login');
      Route::post('/signin', [LoginController::class, 'store'])->name('signin');

      // forgot password
      Route::get('/forgot-pass', [PasswordResertController::class, 'create'])->name('forgot-pass');
      Route::post('/store/forgot-pass', [PasswordResertController::class, 'store'])->name('store.forgot-pass');
      Route::get('/reset-password/{token}', [PasswordResertController::class, 'createResetPassword'])
            ->name('show.reset-pass');
      Route::post('/reset-password', [PasswordResertController::class, 'storeResetPassword'])
            ->name('store.reset-pass');
});

Route::middleware('auth')->group(function () {
      Route::get('/userdashboard', [UserController::class, 'dashboard'])->name('dashboard');
      Route::get('/logout', [UserController::class, 'logout'])->name('logout');
      Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
      Route::put('/profileupdate', [ProfileController::class, 'update'])->name('update.profile');
      Route::put('/passwordupdate', [ProfileController::class, 'updatePassword'])->name('update.password');
});
