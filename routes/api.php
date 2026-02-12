<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Stateless REST API.
| No CSRF.
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/applications', [ApplicationController::class, 'index']);
    Route::post('/applications', [ApplicationController::class, 'store']);
    Route::get('/applications/{application}', [ApplicationController::class, 'show']);
    Route::put('/applications/{application}', [ApplicationController::class, 'update']);
    Route::delete('/applications/{application}', [ApplicationController::class, 'destroy']);
    Route::delete('/applications', [ApplicationController::class, 'destroyAll']);
});

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');