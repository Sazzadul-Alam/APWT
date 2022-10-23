<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
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
Route::get('/login', function () {
    return view('logIn');
})->name('log.in');

Route::get('/registration', [RegistrationController::class, 'register'])->name('registration');

Route::post('/registration', [RegistrationController::class, 'registerSubmit'])->name('registration');