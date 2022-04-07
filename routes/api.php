<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// apiResource não terá Create e Edit
Route::apiResource('cliente','App\Http\controllers\ClienteController');

Route::apiResource('carro','App\Http\controllers\CarroController');

Route::apiResource('locacao','App\Http\controllers\LocacaoController');

Route::apiResource('marca','App\Http\controllers\MarcaController');

Route::apiResource('modelo','App\Http\controllers\ModeloController');
