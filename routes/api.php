<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProvinceController;

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

Route::prefix('/province')->group(function () {
    Route::get('', [ProvinceController::class, 'index']);
    Route::post('', [ProvinceController::class, 'create']);
    Route::get('/{id}', [ProvinceController::class, 'detail']);
    Route::put('/{id}', [ProvinceController::class, 'update']);
    Route::patch('/{id}', [ProvinceController::class, 'patch']);
    Route::delete('/{id}', [ProvinceController::class, 'delete']);
});
