<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

//LOGIN
Route::get('/login', [\App\Http\Controllers\ViewController::class, 'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout']);

//LOGIN WITH GOOGLE API
Route::get('/login/login_google', [\App\Http\Controllers\LoginController::class, 'loginGoogle']);
Route::get('/callback/google', [\App\Http\Controllers\LoginController::class, 'callbackGoogle']);

Route::get('/test/name', [\App\Http\Controllers\LoginController::class, 'createUsername']);

//Route::middleware('auth:owner')->group(function (){
    Route::prefix('owner')->group(function () {
        Route::get('/', [\App\Http\Controllers\ViewController::class, 'show']);
        Route::get('/index', [\App\Http\Controllers\ViewController::class, 'show']);

        //class
        Route::prefix('class')->group(function () {
            Route::get('/add', [\App\Http\Controllers\ViewController::class, 'store']);
            Route::get('/{id}', [\App\Http\Controllers\ViewController::class, 'showClass']);
        });

        Route::prefix('roll-call')->group(function () {
            Route::get('/', [\App\Http\Controllers\ViewController::class, 'showRollCall']);
            Route::get('/index', [\App\Http\Controllers\ViewController::class, 'showRollCall']);
        });

        Route::prefix('day-off')->group(function () {
            Route::get('/', [\App\Http\Controllers\ViewController::class, 'showDayOff']);
            Route::get('/create', [\App\Http\Controllers\ViewController::class, 'storeDayOff']);
        });
    });
//});


Route::get('/owner/class', [\App\Http\Controllers\OwnerController::class, 'getClass']);

Route::get('/owner/class', [\App\Http\Controllers\OwnerController::class, 'getClass']);
