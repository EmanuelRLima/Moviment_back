<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Create and login

Route::post('login', [\App\Http\Controllers\Auth\Api\LoginController::class, 'login'])
        ->name('api.login');
Route::post('logout', [\App\Http\Controllers\Auth\Api\LoginController::class, 'logout'])
        ->name('api.logout')
        ->middleware('auth:sanctum');
Route::post('login-register', [\App\Http\Controllers\Auth\Api\LoginController::class, 'register'])
        ->name('api.register');

// Add pokemon

Route::get('pokemon', [\App\Http\Controllers\PokeAddController::class, 'index'])
        ->name('api.pokemon')
        ->middleware('auth:sanctum');