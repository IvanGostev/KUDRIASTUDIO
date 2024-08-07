<?php

use App\Http\Controllers\Admin\MessageAdminController;
use App\Http\Controllers\Admin\PostAdminController;
use App\Http\Controllers\Admin\ReviewAdminController;
use App\Http\Controllers\Admin\WorkAdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::controller(MainController::class)->group(function ()  {
    Route::get('/', 'index')->name('index');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/price', 'price')->name('price');
    Route::get('/reviews', 'reviews')->name('reviews');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'store')->name('contact.store');
});
Route::controller(PostController::class)->prefix('blog')->group(function ()  {
    Route::get('/', 'index')->name('post.index');
    Route::get('{post}~{slug}', 'show')->name('post.show');
});



Route::prefix('admin')->middleware('auth')->group(function () {
    Route::controller(PostAdminController::class)->prefix('posts')->group(function ()  {
        Route::get('/', 'index')->name('admin.post.index');
        Route::get('/create', 'create')->name('admin.post.create');
        Route::post('/', 'store')->name('admin.post.store');
        Route::get('{post}/edit', 'edit')->name('admin.post.edit');
        Route::patch('{post}', 'update')->name('admin.post.update');
        Route::delete('{post}/destroy', 'destroy')->name('admin.post.destroy');
    });
    Route::controller(ReviewAdminController::class)->prefix('reviews')->group(function ()  {
        Route::get('/', 'index')->name('admin.review.index');
        Route::get('/create', 'create')->name('admin.review.create');
        Route::post('/', 'store')->name('admin.review.store');
        Route::get('{review}/edit', 'edit')->name('admin.review.edit');
        Route::patch('{review}', 'update')->name('admin.review.update');
        Route::delete('{review}/destroy', 'destroy')->name('admin.review.destroy');
    });
    Route::controller(MessageAdminController::class)->prefix('messages')->group(function ()  {
        Route::get('/', 'index')->name('admin.message.index');
        Route::delete('{message}/destroy', 'destroy')->name('admin.message.destroy');
    });
    Route::controller(WorkAdminController::class)->prefix('portfolio')->group(function ()  {
        Route::get('/', 'index')->name('admin.work.index');
        Route::post('/', 'store')->name('admin.work.store');
        Route::delete('{work}/destroy', 'destroy')->name('admin.work.destroy');
    });
});


Auth::routes();
