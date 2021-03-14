<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controlers\UserAuth;
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


// Para el login 
// Route::post("user",[UserAuth::class, 'userLogin']);
// Route::view("login", 'login');
// Route::view("pagina_principal", 'pagina_principal');