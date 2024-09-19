<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'front'])->name("front");
Route::get('/work/{id}', [App\Http\Controllers\HomeController::class, 'work'])->name("work");
Route::get('/resume/{id}', [App\Http\Controllers\HomeController::class, 'resume'])->name("resume");
Route::post('/send_resume/{id}', [App\Http\Controllers\HomeController::class, 'send_resume'])->name("send_resume");

Route::group(['middleware' => ['auth'],'prefix' => 'admin'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'profile']);
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name("profile");
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('roles', \App\Http\Controllers\RoleController::class);
    Route::resource('permissions', \App\Http\Controllers\PermissionController::class);

    Route::resource('category', \App\Http\Controllers\CategoryController::class);
    Route::resource('work', \App\Http\Controllers\WorkController::class);
    Route::resource('submit', \App\Http\Controllers\SubmitController::class);
});
