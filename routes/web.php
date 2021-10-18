<?php

use App\Http\Controllers\ContainerController;
use App\Http\Controllers\MovementController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/** CONTAINER */
Route::resource('conteiner', ContainerController::class);

/** MOVEMENT */
Route::resource('movimentacao', MovementController::class);
Route::get('movimentacao/relatorio', [MovementController::class, 'relatorio'])
    ->name('relatorio');
