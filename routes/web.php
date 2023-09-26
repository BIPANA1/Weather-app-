<?php

use App\Http\Controllers\WeatherController;
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
// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/', [WeatherController::class, 'index']);

// });

// This route is accessible without authentication
Route::get('/', [WeatherController::class, 'index']);
Route::post('/get-weather', [WeatherController::class, 'getWeather']);
