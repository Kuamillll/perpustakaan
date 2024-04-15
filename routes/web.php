<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AppController::class,"home"]);
Route::get('data', [AppController::class,"data"]);
Route::get('login', [AppController::class,"login"]);
Route::get('register',[AppController::class,"register"]);
Route::get('Dashboard',[AppController::class,"Dashboard"]);
