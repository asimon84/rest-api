<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/token/create', function (Request $request) {
    if (!Auth::attempt($request->only('email', 'password'))) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    $user = Auth::user();
    $token = $user->createToken('plainTextToken', []);

    return ['token' => $token->plainTextToken];
});

Route::middleware(['auth:sanctum'])->group(function () {
//    Route::get('/user', [DashboardController::class, 'index'])->name('user');
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
