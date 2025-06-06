<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\RecordController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;

//Basic User registration, login, and logout methods
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Custom token creation
Route::post('/token/create', [AuthController::class, 'createToken'])->name('token.create');

//Routes Behind Authentication
Route::middleware(['auth:sanctum'])->group(function () {
    //User Read, Update, Delete methods
    Route::get('/user', [UserController::class, 'show'])->middleware(['ability:get-user'])->name('user.show');
    Route::patch('/user', [UserController::class, 'update'])->middleware(['ability:edit-user'])->name('user.patch');
    Route::put('/user', [UserController::class, 'update'])->middleware(['ability:edit-user'])->name('user.put');
    Route::delete('/user', [UserController::class, 'destroy'])->middleware(['ability:delete-user'])->name('user.destroy');

    //Full CRUD for Record resource
    Route::resource('record', RecordController::class);
});
