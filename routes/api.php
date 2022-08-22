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

Route::prefix('owner')->group(function () {
    Route::get('/index', [\App\Http\Controllers\OwnerController::class, 'show']);

    //class
    Route::prefix('class')->group(function () {
        Route::post('/add', [\App\Http\Controllers\ClassController::class, 'store']);
        Route::get('/show', [\App\Http\Controllers\ClassController::class, 'show']);
        Route::delete('/delete/{classID}', [\App\Http\Controllers\ClassController::class, 'delete']);
    });

    Route::prefix('rollcall')->group(function () {
        Route::post('/add/{class}', [\App\Http\Controllers\RollCallController::class, 'store']);
        Route::get('/show', [\App\Http\Controllers\ClassController::class, 'show']);
        Route::delete('/delete/{classID}', [\App\Http\Controllers\ClassController::class, 'delete']);
    });  /* /owner/rollcall/create/id/ */
});