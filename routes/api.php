<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ClothingItemController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\FavoriteController;

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('clothing-items', ClothingItemController::class);
    Route::apiResource('tags', TagController::class);
    Route::apiResource('favorites', FavoriteController::class);
    Route::post('/logout', [UserController::class, 'logout']);
});