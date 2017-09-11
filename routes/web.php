<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::group(['middleware' => 'auth'],function(){
	//ruta con la que comenzamos
	Route::get('/', 'HomeController@index');
	//ruta a la que te dirige si realizas bien el registro

	Route::name('admin_path')->get('/admin','AdminController@admin');

	Route::name('administrador_path')->get('/administrador','AdminController@administrador');
	Route::name('clientes_path')->get('/clientes','AdminController@clientes');
	Route::name('inventario_path')->get('/inventario','AdminController@inventario');
	Route::name('ventas_path')->get('/ventas','AdminController@ventas');
	Route::name('productos_path')->get('/productos','AdminController@productos');


	

	//Route::get('/home', 'HomeController@index');		
});

//Route::get('/home', 'HomeController@index');
