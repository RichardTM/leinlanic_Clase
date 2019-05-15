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



//Municipios
Route::get('municipios/editar/{municipio}','MunicipioController@edit');
Route::get('municipios/lista','MunicipioController@list');
Route::get('municipios/crear','MunicipioController@create');
Route::get('municipios','MunicipioController@index');
Route::get('municipios/{municipio}','MunicipioController@show');
Route::post('municipios','MunicipioController@store');
Route::patch('municipios/{municipio}','MunicipioController@update');
Route::delete('municipios/{municipio}','MunicipioController@destroy');

//Nacionalidades
Route::get('nacionalidades/editar/{nacionalidad}','NacionalidadController@edit');
Route::get('nacionalidades/lista','NacionalidadController@list');
Route::get('nacionalidades/crear','NacionalidadController@create');
Route::get('nacionalidades','NacionalidadController@index');
Route::get('nacionalidades/{nacionalidad}','NacionalidadController@show');
Route::post('nacionalidades','NacionalidadController@store');
Route::patch('nacionalidades/{nacionalidad}','NacionalidadController@update');
Route::delete('nacionalidades/{nacionalidad}','NacionalidadController@destroy');
