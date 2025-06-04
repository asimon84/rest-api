<?php

use App\Http\Controllers\API\AuthController;
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
    Route::middleware(['ability:get-user'])->get('/user', [UserController::class, 'getUser'])->name('user.get');
    Route::middleware(['ability:edit-user'])->patch('/user', [UserController::class, 'patchUser'])->name('user.patch');
    Route::middleware(['ability:edit-user'])->put('/user', [UserController::class, 'updateUser'])->name('user.update');
    Route::middleware(['ability:delete-user'])->delete('/user', [UserController::class, 'deleteUser'])->name('user.delete');
});
