<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ApplicationController;

Route::prefix('api')->group(function () {
    Route::apiResource('applications', ApplicationController::class);
});
