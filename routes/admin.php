<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'admin-auth'
], function()
{
    Route::get('', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::group([
    'prefix' => 'auth'
], function()
{
    Route::match(['get', 'post'], 'logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::match(['get', 'post'], 'login', [AuthController::class, 'login'])->name('admin.login');
});
