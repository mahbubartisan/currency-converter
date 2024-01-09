<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SettingController;

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'verified']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['as' => 'categories.', 'prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::post('/save', [CategoryController::class, 'save'])->name('save');
        Route::post('/{category}/delete', [CategoryController::class, 'delete'])->name('delete');
    });
    Route::group(['as' => 'posts.', 'prefix' => 'posts'], function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/create-post', [PostController::class, 'create'])->name('create');
        Route::get('/{slug}', [PostController::class, 'edit'])->name('edit');
        Route::post('/save', [PostController::class, 'save'])->name('save');
        Route::post('/{post}/update', [PostController::class, 'update'])->name('update');
        // Route::post('/{post}/delete', [PostController::class, 'delete'])->name('delete');
    });
    Route::group(['as' => 'settings.', 'prefix' => 'settings'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('index');
        // Route::get('/create-post', [PostController::class, 'create'])->name('create');
        // Route::post('/save', [PostController::class, 'save'])->name('save');
        // Route::post('/{post}/delete', [PostController::class, 'delete'])->name('delete');
    });

});
