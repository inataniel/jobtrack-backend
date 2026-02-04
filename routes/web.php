<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Only web. No API.
|
*/

Route::get('/', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'Web routes working'
    ]);
});
