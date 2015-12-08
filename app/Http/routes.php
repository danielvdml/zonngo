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

Route::get('/',["as"=>"index","uses"=>"ProductosController@demo"]);
Route::get('getListCategory',["uses"=>"ProductosController@getListCategory","as"=>"getListCategory"]);
Route::get('getListMarca/{Category}',["uses"=>"ProductosController@getListMarca","as"=>"getListMarca"]);
Route::get('getListModelo/{Category}/{Marca}',["uses"=>"ProductosController@getListModelo","as"=>"getListModelo"]);
Route::get('getListItems/{Category}/{Marca}/{Modelo}',["uses"=>"ProductosController@getListItems","as"=>"getListItems"]);
Route::get('getItems/{keyword}',['uses'=>"ProductosController@getItems","as"=>"getItems"]);
Route::get('getList',['uses'=>"Productos	Controller@getList","as"=>"getList"]);
Route::get('getList_',['uses'=>"ProductosController@getList_","as"=>"getList_"]);
Route::get("getImage",["uses"=>"ProductosController@getImage"]);
Route::resource("Registrar","RegistrarController");
Route::resource("Nosotros","NosotrosController");
Route::resource("Ingresar","IngresarController");
Route::resource('contacto', 'ContactoController');


