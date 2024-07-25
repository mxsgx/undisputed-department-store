<?php

use App\Http\Controllers\Admin\EditProductController;
use App\Http\Controllers\Admin\ViewOrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ViewProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/how-to-order', 'how-to-order')->name('how-to-order');
Route::view('/order-tracking', 'order-tracking')->name('order-tracking');
Route::view('/shop', 'shop')->name('shop');
Route::get('/product/{product:slug}', ViewProductController::class)->name('product');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');

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
        Route::view('/categories', 'admin.category.index')->name('categories.index');
        Route::view('/products', 'admin.product.index')->name('products.index');
        Route::view('/products/create', 'admin.product.create')->name('products.create');
        Route::get('/products/{product}', EditProductController::class)->name('products.edit');
        Route::get('/orders', ViewOrderController::class)->name('orders.index');
        Route::view('/customers', 'admin.under-development')->name('customers.index');
        Route::view('/users', 'admin.under-development')->name('users.index');
    });
});
