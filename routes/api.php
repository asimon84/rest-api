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

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', [UserController::class, 'getUser'])->name('user.get');
    Route::get('/user/{user}', [UserController::class, 'getUserByID'])->name('user.show');
    Route::put('/user/{id}', [UserController::class, 'patchUserByID'])->name('user.patch');
    Route::post('/user/{id}', [UserController::class, 'updateUserByID'])->name('user.update');
    Route::delete('/user/{id}', [UserController::class, 'deleteUserByID'])->name('user.delete');
});
