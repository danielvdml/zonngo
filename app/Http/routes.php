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
// INDEX Inicio de la Pagina
Route::get('/',["as"=>"index","uses"=>"ProductosController@index"]);

// DEMO Calculador de Precios
Route::get('/demo',["as"=>"demo","uses"=>"ProductosController@demo"]);


Route::get('demo/getListCategory',["uses"=>"ProductosController@getListCategory","as"=>"getListCategory"]);
Route::get('demo/getListMarca/{Category}',["uses"=>"ProductosController@getListMarca","as"=>"getListMarca"]);
Route::get('demo/getListModelo/{Category}/{Marca}',["uses"=>"ProductosController@getListModelo","as"=>"getListModelo"]);
Route::get('demo/getListItems/{Category}/{Marca}/{Modelo}',["uses"=>"ProductosController@getListItems","as"=>"getListItems"]);
Route::get('demo/getItems/{keyword}',['uses'=>"ProductosController@getItems","as"=>"getItems"]);
Route::get('demo/getList',['uses'=>"ProductosController@getList","as"=>"getList"]);
Route::get('demo/getList_',['uses'=>"ProductosController@getList_","as"=>"getList_"]);
Route::get("getImage",["uses"=>"ProductosController@getImage"]);
$router->resource('contacto', 'ContactoController');


