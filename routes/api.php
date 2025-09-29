<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BookController;
use Illuminate\Support\Facades\Route;

// Route Login
Route::post('/login', [AuthController::class, 'login']);

// Route with Sanctum Authentication
Route::middleware('auth:sanctum')->group(function () {

    // Route Logout
    Route::post('/logout', [AuthController::class, 'logout']);
    // Route Manage Books
    Route::apiResource('books', BookController::class);

});
