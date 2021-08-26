<?php

use App\Http\Controllers\StockController;
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

Route::get("/add-stock", [StockController::class, 'addStock']);
Route::post("/create-stock", [StockController::class, 'createStock'])->name('stock.create');
Route::get("/edit-stock/{id}", [StockController::class, 'editStock']);
Route::post("/update-stock", [StockController::class, 'updateStock'])->name('stock.update');
Route::get("/", [StockController::class, 'getStock']);
Route::get("/delete-stock/{id}", [StockController::class, 'deleteStock']);
