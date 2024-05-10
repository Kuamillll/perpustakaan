<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\DataController;

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

Route::get('/', [AppController::class,"Dashboard"]);
Route::get('data', [AppController::class,"data"]);
Route::get('category', [AppController::class,"category"]);
Route::get('bookshelf', [AppController::class,"bookshelf"]);
Route::get('user', [AppController::class,"user"]);
// view_tambah
Route::get('tambah-data', [DataController::class,"tambah_data"]);
Route::get('tambah-category', [DataController::class,"tambah_category"]);
Route::get('tambah-bookshelf', [DataController::class,"tambah_bookshelf"]);
// proses_tambah
Route::post('proses-tambah-data', [DataController::class,"proses_tambah_data"]);
Route::post('proses-tambah-category', [DataController::class,"proses_tambah_category"]);
Route::post('proses-tambah-bookshelf', [DataController::class,"proses_tambah_bookshelf"]);
// proses_edit
Route::post('proses-edit-data', [DataController::class,"proses_edit_data"]);
Route::post('proses-edit-category', [DataController::class,"proses_edit_category"]);
Route::post('proses-edit-bookshelf', [DataController::class,"proses_edit_bookshelf"]);

Route::get("showbook/{id}/detail", [DataController::class,"show"]);

// proses_hapus
Route::get('data/{id}/hapus', [DataController::class,"proses_hapus_data"]);
Route::get('category/{id}/hapus', [DataController::class,"proses_hapus_category"]);
Route::get('bookshelf/{id}/hapus', [DataController::class,"proses_hapus_bookshelf"]);
// view_edit
Route::get('data/{id}/edit', [DataController::class,"edit_data"]);
Route::get('category/{id}/edit', [DataController::class,"edit_category"]);
Route::get('bookshelf/{id}/edit', [DataController::class,"edit_bookshelf"]);

Route::get('login', [AppController::class,"login"]);
Route::get('register',[AppController::class,"register"]);
// Route::get('Dashboard',[AppController::class,"Dashboard"]);
