<?php

use App\Http\Controllers\AdvertisingController;
use App\Http\Controllers\ConsultingController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/consulting', [ConsultingController::class, 'index']);
Route::get('/advertising', [AdvertisingController::class, 'index']);
