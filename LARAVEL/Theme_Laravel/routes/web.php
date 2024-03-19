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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ItemController::class, 'home']);
Route::get('/item/index', [ItemController::class, 'index']);

Route::get('/item/create', [ItemController::class, 'create']);
Route::post('/item/createProcess', [ItemController::class, 'createProcess']);


Route::get('item/update/{code}', [ItemController::class, 'update']);
Route::post('item/updateProcess/{code}', [ItemController::class, 'updateProcess']);

Route::get('item/delete/{code}', [ItemController::class, 'delete']);
