<?php

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

/**
 * Importo Controller
 */
use \App\Http\Controllers\EventController;

/**
 * Passo o EventController como parâmetro e informo o método do controller que será
 * usado nessa rota
 */
Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);