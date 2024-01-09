<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'verified']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['as' => 'users.', 'prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::post('/save', [UserController::class, 'save'])->name('save');
        Route::post('/{user}/delete', [UserController::class, 'delete'])->name('delete');
    });
    

});
