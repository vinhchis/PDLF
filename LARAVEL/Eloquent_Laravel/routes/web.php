<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('item/homepage', [ItemController::class, 'index']);

Route::get('item/create', [ItemController::class, 'create']);
Route::post('item/createProcess', [ItemController::class, 'createProcess']);

Route::get('item/update/{id}', [ItemController::class, 'update']);
Route::post('item/updateProcess/{id}', [ItemController::class, 'updateProcess']);

Route::get('item/delete/{id}', [ItemController::class, 'delete']);