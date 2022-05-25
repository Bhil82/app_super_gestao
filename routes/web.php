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


// idicado para versão do laravel 8.x
// versão 1 de roteamento

Route::get('/sobreNos',[\App\Http\Controllers\SobreNosController::class,'sobreNos']);
Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato']);
Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);


/*/versão 2 de roteamento
Route::get('/', 'PrincipalController@principal');

Route::get('/contato', 'ContatoController@contato');

Route::get('/sobreNos', 'SobreNosController@sobreNos');
*/


/* versão 3 de roteamento
// esta é a versão apropriada ao laravel 9.13
Route::get('/', function () {});

Route::get('/contato', function () {});

Route::get('/sobreNos', function () {});
*/
