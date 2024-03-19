<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

// Controller-name@method-name
// Route::get('/', 'PagesController@index'); // localhost:8000/
Route::get('/', [PagesController::class, 'index']); // localhost:8000/
Route::get('/', [PagesController::class, 'index']); // localhost:8000/


Route::get('/about', [PagesController::class, 'about']); // localhost:8000/about
Route::get('/contact', [PagesController::class, 'contact']); // localhost:8000/contact
