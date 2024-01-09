<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CategoryController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['as' => 'post.', 'prefix' => 'post'], function() {
    Route::get('/', [PostController::class, 'index'])->name('index');
});
Route::group(['as' => 'category.', 'prefix' => 'category'], function() {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
});
Route::group(['as' => 'contact.', 'prefix' => 'contact'], function() {
    Route::get('/', [ContactController::class, 'index'])->name('index');
});