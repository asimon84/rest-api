<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::middleware(['auth:sanctum'])->group(function () {
//    Route::get('/user', [DashboardController::class, 'index'])->name('user');
//    Route::get('/user', function (Request $request) {
//        var_dump($request);
//    });
//});
