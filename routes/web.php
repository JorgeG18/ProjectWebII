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

Route::view('/', 'pagina_principal') -> name ('pagina_principal');
Route::view('/acercade', 'acercade') -> name ('acercade');
Route::view('/contacto', 'contacto') -> name ('contacto');
Route::view('/login', 'login') -> name ('login');

Route::post('login', ('validationLoginController@Login'))->name('login');