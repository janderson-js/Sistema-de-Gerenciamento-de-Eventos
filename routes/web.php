<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;
use GuzzleHttp\Middleware;

Route::get('/',[EventController::class, 'index']);
Route::get('/events/create',[EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}',[EventController::class, 'show']);
Route::post('/events',[EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy'])->Middleware('auth');
Route::get('/events/edit/{id}', [EventController::class,'edit'])->Middleware('auth');
Route::put('/events/update/{id}',[EventController::class,'update'])->Middleware('auth');
Route::get('/dashboard', [EventController::class, 'dashboard'])->Middleware('auth');
Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');
Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');
 
