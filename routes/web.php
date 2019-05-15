<?php
use App\Empresa;

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

Route::get('/', function () {
    return view('welcome');
});

        // RUTAS LECCIONES

Route::get('lecciones/editar/{leccion}', 'LeccionController@edit');
Route::get('lecciones/lista', 'LeccionController@list');
Route::get('lecciones/crear','LeccionController@create');

Route::get('lecciones', 'LeccionController@index');
Route::get('lecciones/{leccion}', 'LeccionController@show');
Route::post('lecciones', 'LeccionController@store');
Route::patch('lecciones/{leccion}', 'LeccionController@update');
Route::delete('lecciones/{leccion}', 'LeccionController@destroy');


// RUTAS NIVELES

Route::get('niveles/editar/{nivel}', 'NivelController@edit');
Route::get('niveles/lista', 'NivelController@list');
Route::get('niveles/crear','NivelController@create');

Route::get('niveles', 'NivelController@index');
Route::get('niveles/{leccion}', 'NivelController@show');
Route::post('niveles', 'NivelController@store');
Route::patch('niveles/{nivel}', 'NivelController@update');
Route::delete('niveles/{nivel}', 'NivelController@destroy');


// RUTAS RECINTOS


Route::get('recintos/editar/{recinto}', 'RecintoController@edit');
Route::get('recintos/lista', 'RecintoController@list');
Route::get('recintos/crear','RecintoController@create');

Route::get('recintos', 'RecintoController@index');
Route::get('recintos/{recinto}', 'RecintoController@show');
Route::post('recintos', 'RecintoController@store');
Route::patch('recintos/{recinto}', 'RecintoController@update');
Route::delete('recintos/{recinto}', 'RecintoController@destroy');

// RUTAS PERFILES

Route::get('perfiles/editar/{perfil}', 'PerfilController@edit');
Route::get('perfiles/lista', 'PerfilController@list');
Route::get('perfiles/crear','PerfilController@create');

Route::get('perfiles', 'PerfilController@index');
Route::get('perfiles/{perfil}', 'PerfilController@show');
Route::post('perfiles', 'PerfilController@store');
Route::patch('perfiles/{perfil}', 'PerfilController@update');
Route::delete('perfiles/{perfil}', 'PerfilController@destroy');
