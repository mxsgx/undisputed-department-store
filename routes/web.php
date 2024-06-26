<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginPage'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/lost-password', [ResetPasswordController::class, 'showRequestResetPasswordPage'])->name('lost-password');
    Route::post('/lost-password', [ResetPasswordController::class, 'requestResetPassword']);
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordPage'])->name('reset-password');
    Route::post('/reset-password/{token}', [ResetPasswordController::class, 'resetPassword']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', LogoutController::class)->name('logout');

    Route::prefix('/admin')->group(function () {
        Route::get('/', DashboardController::class)->name('dashboard')->middleware('role:admin,owner');
        Route::view('/categories', 'admin.under-development')->name('categories.index');
        Route::view('/products', 'admin.under-development')->name('products.index');
        Route::view('/orders', 'admin.under-development')->name('orders.index');
        Route::view('/customers', 'admin.under-development')->name('customers.index');
        Route::view('/users', 'admin.under-development')->name('users.index');
    });
});
