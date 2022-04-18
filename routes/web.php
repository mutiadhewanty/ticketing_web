<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', function(){
    \Auth::logout();
    return redirect('/home');
});
