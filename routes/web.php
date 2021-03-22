<?php
Auth::routes();
Route::get('/', function(){return view('welcome');})->name('/');

Route::get('welcome', 'PrincipalController@index')->name('welcome');
Route::get('filtrateIndex', 'PrincipalController@filtrateIndex')->name('filtrateIndex');
Route::get('user.index', 'AddController@mostrar')->name('user.index');
Route::get('showList', 'AddController@showList')->name('showList');

Route::resource('categorias', 'CategoriaController');
Route::resource('insumos', 'InsumoController');
Route::resource('proyectos', 'ProyectoController');
Route::resource('proveedores', 'ProveedorController');
Route::resource('clientes', 'ClienteController');
Route::resource('usuarios', 'UsuarioController');

Route::get('name-project/{flag?}', 'PrincipalController@nameProject')->name('name-project');
Route::post('save-project', 'PrincipalController@saveProject')->name('save-project');
Route::get('insumoShow', 'AddController@show')->name('insumo');
Route::get('insumoShow/agregar/{producto}', 'AddController@add')->name('insumo-agregar');
Route::get('insumoShow/borrar/{producto}', 'AddController@remove')->name('insumo-borrar');
Route::get('eliminarTodo/', 'AddController@removeAll')->name('insumo-vaciar');
Route::get('insumo/actualizar/{producto}/{cantidad?}', 'AddController@update')->name('insumo-actualizar');

Route::get('generateReport', 'AddController@generateReport')->name('generateReport');
/** FIN DE OPERACIONES */
