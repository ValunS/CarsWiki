<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MarkController;
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

Route::get('/cars', [CarController::class, "index"])->name("cars.index");
Route::get('/cars/create', [CarController::class, "create"])->name("cars.create");
Route::post('/cars', [CarController::class, "store"])->name("cars.store");

Route::get('/marks', [MarkController::class, "index"])->name("marks.index");
Route::get('/marks/{mark_name}', [MarkController::class, "show"])->name("marks.show");
// Route::post('/marks/create', [CarController::class, "store"])->name("marks.create");
