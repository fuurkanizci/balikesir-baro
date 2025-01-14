<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [LoginController::class, 'loginPageShow'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('auth');
    });
    Route::middleware(['auth:admin'])->group(function () {

        Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::resource("aboutUs", AboutUsController::class);
    });
});