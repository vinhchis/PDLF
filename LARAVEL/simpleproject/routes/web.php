<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
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

//1. Simple Route
//http://127.0.0.1:8080/dongian
//http://127.0.0.1:8080/simpleproject/public/dongian

Route::get('dongian', function() {
    return "haha";
});

//http://127.0.0.1:8080/dongian/Le Van A
Route::get('paras/{name}', function($name) {
    return 'Hello, '. $name;
});

//3. CSS
Route::get('parasCss/{name}', function($name) {
    return 'Hello, <span style="color: red; size: 3em;">'. $name. ' </span>';
});

//4. Tuỳ chỉnh view - simple
//http://127.0.0.1:8080/simple
Route::get('simple', function() {
    return view('vwSimple');
});

//5. Blade language View
//http://127.0.0.1:8080/fruits
Route::get('fruits', function() {
    return view('vwFruits', ['fruits' => ['Mango', 'Orange', 'Lemon', 'Coconut', 'Rambutan' ]]);
});


//6. Modify Controller - #sayGreeting
Route::get('Hello/{name}', [FirstController::class, 'sayGreeting']);


//7. Modify Controller - Show Content
Route::get('Content', [FirstController::class, 'showContent']);


//8. Modify Controller - #callForm | #showForm
Route::get('Step1', [FirstController::class, 'callForm']);
Route::post('Step2', [FirstController::class, 'showForm']);


//9. Session - #callSession #showSession
Route::get('Call', [FirstController::class, 'callSession']);
Route::get('Continue', [FirstController::class, 'getSession']);
Route::get('Clear', [FirstController::class, 'clearSession']);
Route::post('Get', [FirstController::class, 'showSession']);

//10.
//http://127.0.0.1:8080/simpleproject/public/item/index
Route::get('item/index', [ItemController::class, 'index']);
Route::get('item/create', [ItemController::class, 'create']);
Route::post('item/createProcess', [ItemController::class, 'createProcess']);
Route::get('item/update/{code}', [ItemController::class, 'update']);
Route::post('item/updateProcess/{code}', [ItemController::class, 'updateProcess']);
Route::get('item/delete/{code}', [ItemController::class, 'delete']);



// 11. Hashing
Route::get('auth/call', [FirstController::class,'callPassword']);
Route::post('auth/get', [FirstController::class,'getPassword']);


