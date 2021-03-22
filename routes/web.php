<?php

use Illuminate\Support\Facades\Route;
//Controller Imports
use App\Http\Controllers\PokedexController;
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

// Using PHP callable syntax...
Route::get('/', [PokedexController::class, 'index']);
Route::get('/pokemon/all', [PokedexController::class, 'getAll']);
Route::get('/pokemon/{pokemon}', [PokedexController::class, 'getPokemon']);
