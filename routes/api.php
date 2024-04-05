<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PaniersController;

Route::apiResource('artisans', ArtisanController::class);
Route::apiResource('produits', ProduitController::class);
Route::apiResource('commande', CommandesController::class);
Route::apiResource('users', UsersController::class);
Route::apiResource('panier', panierscontroller::class);

