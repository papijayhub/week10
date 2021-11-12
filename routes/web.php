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

Route::get('/', [App\Http\Controllers\HomeController::class,'index']);
Route::get('/merchandise', [App\Http\Controllers\MerchandiseController::class,'index']);
Route::get('/unit', [App\Http\Controllers\UnitsController::class,'index']);
Route::get('/category', [App\Http\Controllers\CategoriesController::class,'index']);
