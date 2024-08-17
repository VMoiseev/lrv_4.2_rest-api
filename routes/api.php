<?php

use App\Http\Controllers\ApiTokenController;
use App\Http\Controllers\CarsController;
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

Route::post('/tokens/create', [ApiTokenController::class, 'createToken']);

Route::get('/user', [ApiTokenController::class]);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::apiResource('/cars', CarsController::class);
});
