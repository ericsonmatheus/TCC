<?php

use App\Http\Controllers\AdmController;
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

Route::get('/login', [AdmController::class, 'formLogin'])->name('adm.login');

Route::get('/', function () {
    return view('welcome');
});
