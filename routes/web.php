<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function(){
    return view('home');
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class,'logout']);
Route::post('/login', [UserController::class,'login']);
Route::post('/enter-details',[ProfileController::class, 'enterDetails']);