<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\BusController;
use App\Http\Middleware\login;

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
})->name('home');
Route::get('/login', function () {
    return view('pLogin');
})->name('log.in');

Route::get('/registration', [RegistrationController::class, 'register'])->name('registration');
Route::post('/registration', [RegistrationController::class, 'registerSubmit'])->name('registration');

Route::get('/OwnerRegistration', [RegistrationController::class, 'oRegister'])->name('ownerReg');
Route::post('/OwnerRegistration', [RegistrationController::class, 'oRegisterSubmit'])->name('ownerReg');
Route::post('login-user',[RegistrationController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[RegistrationController::class,'dashboard'])->name('passenger')->middleware('ValidUser');
Route::get('/owner',[RegistrationController::class,'owner'])->middleware('ValidUser');
Route::get('/Add-Bus',[BusController::class,'busAdd'])->name('addBus')->middleware('ValidUser');