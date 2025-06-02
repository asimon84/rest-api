<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/token/create', [AuthController::class, 'createToken'])->name('token.create');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', [AuthController::class, 'getUser'])->name('user.get');
});
