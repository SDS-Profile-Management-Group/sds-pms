<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ModuleController;

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
Route::get('/edit-details',[ProfileController::class, 'editDetails'])->name('edit-details');

Route::get('/enter-MCT', [ModuleController::class, 'showModules'])->name('module-tracker');
Route::post('/add-module', [ModuleController::class, 'addModule'])->name('add-module');
Route::get('/get-module-name/{module_id}', [ModuleController::class, 'getModuleName']);