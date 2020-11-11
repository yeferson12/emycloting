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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::middleware(['jwt.auth'])->group(function(){
    
    
// });

Route::post('login'        , 'UserController@authenticate');
Route::get('productos'     , 'ProductoController@productos');
Route::get('productos/{id}', 'ProductoController@oneProduct');
Route::get('promociones'   , 'ProductoController@promociones');
Route::get('categorias'    , 'ProductoController@categorias');
Route::get('categoriaProducto/{id}', 'ProductoController@categoriaProducto');
