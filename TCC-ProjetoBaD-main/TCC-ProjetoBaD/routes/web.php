<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\DossieController;
use App\Http\Controllers\UserController;

/* Autenticação de usuario */
Route::get('/',[UserController::class, 'login']);

Route::post('/authenticate', [UserController::class, 'authenticate']);

Route::get('/logout',[UserController::class,'logout']);

Route::get('/turma',[UserController::class,'index']);

Route::get('/cadastro',[UserController::class,'createUser']);

Route::post('/user/store',[UserController::class,'store']);

require __DIR__.'/auth.php';
