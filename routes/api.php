<?php

use App\Http\Controllers\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OrdersController;

//Route::apiResource('artisans', ArtisanController::class);
//Route::apiResource('produits', ProductController::class);
//Route::apiResource('users', UsersController::class);
//Route::apiResource('panier', OrdersController::class);

Route::post('register',[UserAuthController::class,'register']);
Route::post('login',[UserAuthController::class,'login']);
Route::post('logout',[UserAuthController::class,'logout'])
    ->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('users', [UsersController::class, 'index']);
    Route::get('users/{user}', [UsersController::class, 'show']);
    Route::put('users/{user}', [UsersController::class, 'update']);
    Route::delete('users/{user}', [UsersController::class, 'destroy']);
    Route::apiResource('artisans', ArtisanController::class);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('users', UsersController::class);
    Route::apiResource('panier', OrdersController::class);
    Route::post('add-to-cart', [OrdersController::class, 'addToCart']);

});
