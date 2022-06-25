<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaloshController;
use App\Http\Controllers\Balosh_AdminController;

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







//Admin Route
Route::get('/admin', [Balosh_AdminController::class, 'admin'])->name('admin');
Route::get('/adminPower', [Balosh_AdminController::class, 'adminPower'])->name('adminPower');
Route::get('/adminEstate', [Balosh_AdminController::class, 'adminEstate'])->name('adminEstate');
Route::get('/adminManagers', [Balosh_AdminController::class, 'adminManagers'])->name('adminManagers');
Route::get('/adminRevenue', [Balosh_AdminController::class, 'adminRevenue'])->name('adminRevenue');
Route::get('/adminLogin', [Balosh_AdminController::class, 'adminLogin'])->name('adminLogin');
Route::get('/adminRegister', [Balosh_AdminController::class, 'adminRegister'])->name('adminRegister');
Route::get('/adminVisitors', [Balosh_AdminController::class, 'adminVisitors'])->name('adminVisitors');


