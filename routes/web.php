<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiarioController;
use App\Http\Controllers\RecadoController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/diario', [DiarioController::class, 'index'])->name('index');
Route::post('/criar-nota', [DiarioController::class, 'criar'])->name('nota.criar');

Route::get('/recados', [RecadoController::class, 'index'])->name('index');


