<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceApiController;

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

Route::get('/places', [PlaceApiController::class, 'index']);
Route::post('/places', [PlaceApiController::class, 'store']);
Route::get('/places/{id}', [PlaceApiController::class, 'show']);
Route::put('/places/{id}', [PlaceApiController::class, 'update']);
Route::delete('/places/{id}', [PlaceApiController::class, 'destroy']);
