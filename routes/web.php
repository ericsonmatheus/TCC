<?php

use App\Http\Controllers\AdmController;
use App\Http\Controllers\LunchController;
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


Route::get('/carteira', [AdmController::class, 'wallet'])->name('adm.carteira');

Route::get('/cardapio', [AdmController::class, 'menu'])->name('adm.cardapio');
Route::post('/cardapio/store', [LunchController::class, 'createLunch'])->name('adm.criarLanche');

Route::get('/login', [AdmController::class, 'login'])->name('adm.login');
Route::get('/sobre', [AdmController::class, 'about'])->name('adm.sobre');
Route::get('/contato', [AdmController::class, 'contact'])->name('adm.contato');
Route::get('/carrinho', [AdmController::class, 'cart'])->name('adm.carrinho');
Route::get('/localizacao', [AdmController::class, 'location'])->name('adm.localizacao');
Route::get('/', [AdmController::class, 'index'])->name('adm.index');
