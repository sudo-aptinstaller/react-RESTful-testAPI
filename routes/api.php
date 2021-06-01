<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/add-item', [App\Http\Controllers\GeneralController::class, 'createItem']);    
Route::put('/update-item/{id}', [App\Http\Controllers\GeneralController::class, 'updateItem']);    
Route::delete('/delete-item/{id}', [App\Http\Controllers\GeneralController::class, 'deleteItem']);    
Route::get('/get-all-item', [App\Http\Controllers\GeneralController::class, 'listAllItem']);    
Route::get('/get-item/{id}', [App\Http\Controllers\GeneralController::class, 'listOneItem']);    