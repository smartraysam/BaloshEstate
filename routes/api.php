<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


//Mobile app api
Route::post('/v1/auth/login', [App\Http\Controllers\API\AuthController::class, 'login']);
Route::post('/v1/auth/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
Route::get('/v1/user', [App\Http\Controllers\API\AuthController::class, 'userData']);