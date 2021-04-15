<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'pagina_principal') -> name ('pagina_principal');
Route::view('/acercade', 'acercade') -> name ('acercade');
Route::view('/login', 'login') -> name ('login');

Auth::routes();

Route::view('/contacto', 'contacto')->name('contacto');
Route::post('contacto', '\App\Http\Controllers\MessagesController@store');