<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnderecosController;

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

Route::get('/', [EnderecosController::class, 'index'])->name('listar_enderecos');
Route::get('/enderecos', [EnderecosController::class, 'create'])->name('form_criar_endereco');
Route::post('/enderecos', [EnderecosController::class, 'store']);
Route::get('/enderecos/{id}', [EnderecosController::class, 'show']);
Route::patch('/enderecos/{id}', [EnderecosController::class, 'update']);
Route::delete('/enderecos/{id}', [EnderecosController::class, 'destroy']);
