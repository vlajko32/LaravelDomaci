<?php

use App\Http\Controllers\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teams', [TeamController::class, 'index']);

Route::get('/teams/{id}', [TeamController::class, 'show']);

Route::post('/teams', [TeamController::class, 'store']);

Route::put('/teams/{id}', [TeamController::class, 'update']);

Route::delete('/teams/{id}', [TeamController::class, 'destroy']);

Route::post('/city', [CityController::class, 'store']);

Route::get('/city', [CityController::class, 'index']);

