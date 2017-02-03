<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('clientes', 'ClientesController@index' );
Route::post('clientes', 'ClientesController@store' );
Route::get('clientes/{id}', 'ClientesController@show' );
Route::delete('clientes/{id}', 'ClientesController@destroy' );
Route::put('clientes/{id}', 'ClientesController@update' );

Route::get('projetos'        , 'ProjectController@index'   );
Route::post('projetos'       , 'ProjectController@store'   );
Route::get('projetos/{id}'   , 'ProjectController@show'    );
Route::delete('projetos/{id}', 'ProjectController@destroy' );
Route::put('projetos/{id}'   , 'ProjectController@update'  );

Route::get('notas'        , 'NotasProjectController@index'   );
Route::post('notas'       , 'NotasProjectController@store'   );
Route::get('notas/{id}'   , 'NotasProjectController@show'    );
Route::delete('notas/{id}', 'NotasProjectController@destroy' );
Route::put('notas/{id}'   , 'NotasProjectController@update'  );