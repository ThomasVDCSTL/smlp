<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OrdersController;


Route::get('/', function () {
    return view('welcome');
});



