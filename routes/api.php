<?php
namespace App\Http\Controllers\API;


use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Route;
use Request;



Route::post('/register', [AuthController::class, 'registerUser']);
Route::post('/login', [AuthController::class, 'loginUser']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', function (Request $request) {
        return $request->user();
    });
});


