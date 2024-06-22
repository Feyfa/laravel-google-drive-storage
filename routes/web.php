<?php

use App\Http\Controllers\GdriveController;
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

Route::get('/', [GdriveController::class, 'index']);
Route::post('/', [GdriveController::class, 'store']);
Route::delete('/', [GdriveController::class, 'delete']);
Route::get('/list', [GdriveController::class, 'list']);