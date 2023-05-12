<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['namespace' => 'Backend'], function () {
    Route::get('api_pekerjaan', [App\Http\Controllers\ApiPekerjaanController::class, 'getAll']);
    Route::get('api_pekerjaan/{id}', [App\Http\Controllers\ApiPekerjaanController::class, 'getPen']);
    Route::post('api_pekerjaan', [App\Http\Controllers\ApiPekerjaanController::class, 'createPen']);
    Route::put('api_pekerjaan/{id}', [App\Http\Controllers\ApiPekerjaanController::class, 'updatePen']);
    Route::delete('api_pekerjaan/{id}', [App\Http\Controllers\ApiPekerjaanController::class, 'deletePen']);
});

