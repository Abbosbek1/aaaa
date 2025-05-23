<?php
namespace App\Http\Controllers\API;


use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'registerUser']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'loginUser']);


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/home', [AuthController::class, 'showHome'])->name('home');
});