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


Route::post('/add-appreciation', [App\Http\Controllers\GeneralController::class, 'createAppreciation']);    
Route::put('/update-appreciation/{id}', [App\Http\Controllers\GeneralController::class, 'updateAppreciation']);    
Route::delete('/delete-appreciation/{id}', [App\Http\Controllers\GeneralController::class, 'deleteAppreciation']);    
Route::get('/get-all-appreciation', [App\Http\Controllers\GeneralController::class, 'listAllAppreciation']);    
Route::get('/get-appreciation/{id}', [App\Http\Controllers\GeneralController::class, 'listOneAppreciation']);    