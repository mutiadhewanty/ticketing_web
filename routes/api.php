<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceApiController;
use App\Http\Controllers\TicketApiController;
use App\Http\Controllers\BookPlaceApiController;
use App\Http\Controllers\AuthController;

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

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::get('/places', [PlaceApiController::class, 'index']);
Route::post('/places', [PlaceApiController::class, 'store']);
Route::get('/places/{id}', [PlaceApiController::class, 'show']);
Route::put('/places/{id}', [PlaceApiController::class, 'update']);
Route::delete('/places/{id}', [PlaceApiController::class, 'destroy']);

Route::get('/ticketing', [TicketApiController::class, 'index']);
Route::post('/ticketing', [TicketApiController::class, 'store']);
Route::get('/ticketing/{id}', [TicketApiController::class, 'show']);
Route::put('/ticketing/{id}', [TicketApiController::class, 'update']);
Route::delete('/ticketing/{id}', [TicketApiController::class, 'destroy']);

Route::get('/booking', [BookPlaceApiController::class, 'index']);
Route::post('/booking', [BookPlaceApiController::class, 'store']);
Route::get('/booking/{id}', [BookPlaceApiController::class, 'show']);
Route::put('/booking/{id}', [BookPlaceApiController::class, 'update']);
Route::delete('/booking/{id}', [BookPlaceApiController::class, 'destroy']);
