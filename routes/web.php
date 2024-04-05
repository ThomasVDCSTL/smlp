<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PaniersController;


Route::get('/', function () {
    return view('welcome');
});



