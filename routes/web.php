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

use  App\Http\Controllers\WorkersController;
use  App\Http\Controllers\PositionsController;
use App\Http\Controllers\PivotController;
use App\Http\Controllers\ComicsController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('index');
});

Route::resource('workers', WorkersController::class);

Route::resource('positions', PositionsController::class);

Route::resource('comics', ComicsController::class);

Route::resource('categories', CategoriesController::class);

Route::resource('pw',PivotController::class);

