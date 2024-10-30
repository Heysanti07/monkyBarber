<?php

use App\Http\Controllers\createAccountController;
use App\Http\Controllers\forgetController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Iniciar secion
Route::get('/', [LoginController::class, 'login']);
Route::post('/', [LoginController::class, 'login']);
//cerra sesion
Route::get('/logout', [LoginController::class, 'logout']);

//recuperar contraseña
Route::get('/forget', [forgetController::class, 'forget']);
Route::post('/forget', [forgetController::class, 'forget']);
Route::get('/Resetting', [LoginController::class, 'Resetting']);
Route::post('/Resetting', [LoginController::class, 'Resetting']);

//Crear cuenta
Route::get('/createAccounts', [createAccountController::class, 'createAccounts']);
Route::post('/createAccounts', [createAccountController::class, 'createAccounts']);
