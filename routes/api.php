<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [\App\Http\Controllers\Api\UserController::class,'login']);
Route::post('register', [\App\Http\Controllers\Api\UserController::class,'register']);
Route::get('list', [\App\Http\Controllers\Api\UserController::class,'list']);

Route::post('job/create', [\App\Http\Controllers\Api\JobController::class,'create']);
Route::get('job/list', [\App\Http\Controllers\Api\JobController::class,'list']);
Route::delete('job/delete/{id}', [\App\Http\Controllers\Api\JobController::class,'delete']);
