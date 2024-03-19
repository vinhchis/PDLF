<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [ProductsController::class, 'index']);
Route::get('cart', [ProductsController::class, 'cart']);
Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart']);
Route::patch('update-cart', [ProductsController::class,'update']);

Route::delete('remove-from-cart', [ProductsController::class,'remove']);