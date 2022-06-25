<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaloshController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [BaloshController::class, 'home'])->name('home');
Route::get('/power', [BaloshController::class, 'power'])->name('power');
Route::get('/visit', [BaloshController::class, 'visitor'])->name('visit');
Route::get('/serviceFee', [BaloshController::class, 'serviceFee'])->name('serviceFee');
// Route::get('/regHome', [BaloshController::class, 'registeredHome'])->name('regHome');
Route::get('/message', [BaloshController::class, 'messaging'])->name('message');
Route::get('/transaction', [BaloshController::class, 'transaction'])->name('transaction');
Route::get('/bookspace', [BaloshController::class, 'bookspace'])->name('bookspace');
Route::get('/emergency', [BaloshController::class, 'emergency'])->name('emergency');
Route::get('/register', [BaloshController::class, 'register'])->name('register');
Route::get('/security', [BaloshController::class, 'security'])->name('security');
Route::get('/managerEstate', [BaloshController::class, 'managerEstate'])->name('managerEstate');
Route::get('/revenue', [BaloshController::class, 'revenue'])->name('revenue');
Route::get('/powerDetails', [BaloshController::class, 'powerDetails'])->name('powerDetails');
Route::get('/visitorDetails', [BaloshController::class, 'visitorDetails'])->name('visitorDetails');
Route::get('/serviceFeeDetails', [BaloshController::class, 'serviceFeeDetails'])->name('serviceFeeDetails');
Route::get('/spaceDetails', [BaloshController::class, 'spaceDetails'])->name('spaceDetails');
Route::get('/revenueDetails', [BaloshController::class, 'revenueDetails'])->name('revenueDetails');
Route::get('/request', [BaloshController::class, 'request'])->name('request');
Route::get('/login', [BaloshController::class, 'login'])->name('login');
Route::get('/newMessage', [BaloshController::class, 'newMessage'])->name('newMessage');
Route::get('/inbox', [BaloshController::class, 'inbox'])->name('inbox');