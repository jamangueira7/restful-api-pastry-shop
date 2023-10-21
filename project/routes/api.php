<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/clients', [ClientController::class, 'list']);
Route::get('/client/{id}', [ClientController::class, 'show']);
Route::delete('/client/{id}', [ClientController::class, 'delete']);
Route::post('/client/{id}', [ClientController::class, 'restore']);


Route::get('/products', [ProductController::class, 'list']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::delete('/product/{id}', [ProductController::class, 'delete']);
Route::post('/product/{id}', [ProductController::class, 'restore']);
