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
//User Reg an Auth
Route::post('/v1/auth/login', [App\Http\Controllers\API\AuthController::class, 'login']);
Route::post('/v1/auth/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
Route::post('/v1/auth/register', [App\Http\Controllers\API\AuthController::class, 'registration']);
Route::get('/v1/auth/request/otp', [App\Http\Controllers\API\AuthController::class, 'getOTP']);
Route::post('/v1/auth/verify', [App\Http\Controllers\API\AuthController::class, 'verifyAccount']);
Route::get('/v1/user', [App\Http\Controllers\API\AuthController::class, 'userData']);
Route::post('/v1/update/password', [App\Http\Controllers\API\AuthController::class, 'updatePassword']);
Route::post('/v1/update/phonenumber', [App\Http\Controllers\API\AuthController::class, 'updatePhone']);
Route::post('/v1/update/email', [App\Http\Controllers\API\AuthController::class, 'updateEmail']);

//Access control 
Route::get('/v1/get/access', [App\Http\Controllers\API\AccessController::class, 'GetAccess']);
Route::post('/v1/create/access', [App\Http\Controllers\API\AccessController::class, 'CreateAccess']);
Route::post('/v1/auth/access', [App\Http\Controllers\API\AccessController::class, 'AuthAccess']);
Route::post('/v1/update/access', [App\Http\Controllers\API\AccessController::class, 'UpdateeAccess']);

//Request and complains
Route::post('/v1/create/request', [App\Http\Controllers\API\RequestController::class, 'CreateRequest']);
Route::get('/v1/get/request', [App\Http\Controllers\API\RequestController::class, 'GetRequest']);
Route::get('/v1/request/details', [App\Http\Controllers\API\RequestController::class, 'RequestDetails']);
Route::get('/v1/request/category', [App\Http\Controllers\API\RequestController::class, 'LoadCategory']);


//Emergency
Route::post('/v1/emergency/alert', [App\Http\Controllers\API\EmergencyController::class, 'emergencyAlert']);
Route::post('/v1/emergency/contact', [App\Http\Controllers\API\EmergencyController::class, 'postEmergencyContact']);
Route::get('/v1/emergency/contact', [App\Http\Controllers\API\EmergencyController::class, 'getEmergencyContact']);
Route::post('/v1/emergency/delete', [App\Http\Controllers\API\EmergencyController::class, 'deleteEmergencyContact']);

//Messaging