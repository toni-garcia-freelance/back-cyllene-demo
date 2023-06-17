<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('dashboard', [AuthController::class, 'dashboard'])->middleware('auth:sanctum');

Route::get('address/all-zip', [AddressController::class, 'getAllZipCode']);
Route::get('address/all-city', [AddressController::class, 'getAllCity']);

Route::get('station-charging', [App\Http\Controllers\StationChargingController::class, 'getStationsCharging']);
Route::get('station-charging/{id}', [App\Http\Controllers\StationChargingController::class, 'getStationChargingById']);