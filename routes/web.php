<?php
use Illuminate\Support\Facades\Route;

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    // $exitCode = Artisan::call('config:cache');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/corte',function(){
    return 'corte';
});

/*
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
*/

//Route::get('/empleados', 'CartController@viewcart');
/*
Route::middleware(['auth'])->group(function(){
  Route::get('/activities', 'ActivitiesController@index');
});*/


//administrar
            
//empleado
Route::group(['prefix' => '/empleados', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', 'ControlController@cpanel_empleado');
        Route::post('/add', 'ControlController@add_empleado');
        Route::post('/buscar', 'ControlController@buscar_empleado')->name('search.empleado');
        Route::post('/buscar_imp', 'ControlController@buscar_empleado_imp')->name('search.empleado_imp');
        Route::post('/buscar_corte', 'ControlController@buscar_empleado_corte')->name('search.empleado_corte');
});


//ordenes
Route::group(['prefix' => '/ordenes', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', 'ControlController@cpanel_orden');
        Route::post('/add', 'ControlController@add_orden');
        Route::post('/buscar', 'ControlController@buscar_orden')->name('search.ordenes');
        Route::post('/edit', 'ControlController@edit_orden');
        Route::post('/update', 'ControlController@update_orden');
        Route::post('/orden_active', 'ControlController@buscar_orden_active')->name('search.orden_active');
});

//clientes
Route::group(['prefix' => '/clientes', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', 'ControlController@cpanel_cliente');
        Route::post('/add', 'ControlController@add_cliente');
        Route::post('/buscar', 'ControlController@buscar_cliente')->name('search.clientes');
        Route::post('/asociar', 'ControlController@asociar_cliente');
});

//productos
Route::group(['prefix' => '/productos', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', 'ControlController@cpanel_producto');
        Route::post('/add', 'ControlController@add_producto');
        Route::post('/buscar', 'ControlController@buscar_producto')->name('search.productos');
        Route::post('/asociar', 'ControlController@asociar_producto');
});

//produccion

//ext
Route::group(['prefix' => '/ext', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', 'ProductController@cpanel_ext');
        Route::get('/supervisor', 'ProductController@cpanel_ext_super');
        Route::post('/add', 'ProductController@insert_production');
        Route::post('/bovina', 'ProductController@bovina_ext')->name('ext.bovina');
        Route::post('/produccion', 'ProductController@produccion_ext');
        Route::post('/orden', 'ProductController@produccion_ext_orden');
});

//imp
Route::group(['prefix' => '/imp', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', 'ProductController@cpanel_imp');
        Route::get('/supervisor', 'ProductController@cpanel_imp_super');
        Route::post('/produccion', 'ProductController@produccion_imp')->name('imp.produccion');
});

//corte
Route::group(['prefix' => '/corte', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', 'ProductController@cpanel_corte');
        Route::get('/supervisor', 'ProductController@cpanel_corte_super');
        Route::post('/produccion', 'ProductController@produccion_corte')->name('corte.produccion');
});


//inventario

//bodega
Route::group(['prefix' => '/fardos', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', 'InventarioController@cpanel_fardos');
});

//bobina
Route::group(['prefix' => '/bobina', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', 'InventarioController@cpanel_bobina');
        Route::post('/add', 'InventarioController@add_bovina');
});

//funciones





