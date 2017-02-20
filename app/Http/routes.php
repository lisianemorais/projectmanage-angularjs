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
    return view('app');
});

Route::post('oauth/access_token', function(){
	return Response::json(Authorizer::issueAccessToken());
});

//Route::group(['middleware'=>'oauth'], function(){
//	
//
//	//Route::get('clientes', 'ClientesController@index' );
//});

Route::resource('clientes', 'ClientesController', [ 'except'=>['create', 'edit']]);
//Route::group(['prefix'=>'projetos'], function(){
//	Route::resource('projetos', 'ProjectController', [ 'except'=>['create', 'edit']]);
//
//});
Route::get('projetos/{id}/notas'  , 'NotasProjectController@index'    );
Route::post('projetos/{id}/notas' , 'NotasProjectController@store'   );
Route::get('projetos/{id}/notas/{notaId}'   , 'NotasProjectController@show'    );
Route::delete('projetos/{id}/notas/{notaId}', 'NotasProjectController@destroy' );
Route::put('projetos/{id}/notas/{notaId}'   , 'NotasProjectController@update'  );

Route::post('projetos/{id}/arquivo' , 'ArquivosProjectController@store'   );


Route::get('projetos'        , 'ProjectController@index'   );
Route::post('projetos'       , 'ProjectController@store'   );
Route::get('projetos/{id}'   , 'ProjectController@show'    );
Route::delete('projetos/{id}', 'ProjectController@destroy' );
Route::put('projetos/{id}'   , 'ProjectController@update'  );

