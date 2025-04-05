<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\CgpaController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('auth/authenticate');
});

Route::get('/home', function(){
    return view('home');
})->name('home');



Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/logout', [UserController::class,'logout'])->name('logout');
Route::post('/login', [UserController::class,'login'])->name('login');

Route::post('/enter-details',[ProfileController::class, 'enterDetails'])->name('');
Route::get('/edit-details',[ProfileController::class, 'editDetails'])->name('edit-profile');

Route::get('/module-tracker', [ModuleController::class, 'showModules'])->name('module-tracker');
Route::post('/module-tracker/store', [ModuleController::class, 'store'])->name('modules.store');
Route::post('/modules/update/{module_id}', [ModuleController::class, 'update'])->name('modules.update');

Route::post('/add-module', [ModuleController::class, 'addModule'])->name('add-module');
Route::get('/get-module-name/{module_id}', [ModuleController::class, 'getModuleName']);

Route::get('/cgpa',[CgpaController::class, 'showCGPA'])->name('cgpa-overview');
Route::post('/cgpa/store', [CgpaController::class, 'storeCGPA'])->name('cgpa.store');

Route::get('/info/major', [InfoController::class, 'showMajorInfo'])->name('major-overview');
Route::get('/info/module', [InfoController::class, 'showModuleInfo'])->name('module-overview');

Route::post('/home/createPost', [PostController::class, 'createPosts'])->name('add-post');