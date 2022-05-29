<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\DetailTicketingController;
use App\Http\Controllers\BookPlaceController;

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

Route::get('/places', [PlaceController::class, 'index']);
Route::get('/places/create', [PlaceController::class, 'create']);
Route::post('/places', [PlaceController::class, 'store']);
Route::get('/places/{id}/edit', [PlaceController::class, 'edit']);
Route::put('/places/{id}', [PlaceController::class, 'update']);
Route::delete('/places/{id}', [PlaceController::class, 'destroy']);

// detail ticketing
Route::get('/ticketing', [DetailTicketingController::class, 'index']);
Route::get('/ticketing/create', [DetailTicketingController::class, 'create']);
Route::post('/ticketing', [DetailTicketingController::class, 'store']);
Route::get('/ticketing/{id}/edit', [DetailTicketingController::class, 'edit']);
Route::put('/ticketing/{id}', [DetailTicketingController::class, 'update']);
Route::delete('/ticketing/{id}', [DetailTicketingController::class, 'destroy']);

// detail booking
Route::get('/booking', [BookPlaceController::class, 'index']);
Route::get('/booking/create', [BookPlaceController::class, 'create']);
Route::post('/booking', [BookPlaceController::class, 'store']);
Route::get('/booking/{id}/edit', [BookPlaceController::class, 'edit']);
Route::put('/booking/{id}', [BookPlaceController::class, 'update']);
Route::delete('/booking/{id}', [BookPlaceController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', function(){
    \Auth::logout();
    return redirect('/home');
});
