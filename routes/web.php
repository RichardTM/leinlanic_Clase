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

        return view('Home');

    });


    // A R E A
    Route::get('areas/editar/{area}','AreaController@edit');
    Route::get('areas/lista', 'AreaController@list');
    Route::get('areas','AreaController@index');
    Route::get('areas/crear','AreaController@create');
    Route::get('areas/{area}','AreaController@show');
    Route::post('areas','AreaController@store');
    Route::patch('areas/{area}', 'AreaController@update');
    Route::delete('areas/{area}', 'AreaController@destroy');



    //Modalidades
    Route::get('modalidades/editar/{modalidad}','ModalidadController@edit');
    Route::get('modalidades/lista','ModalidadController@list');
    Route::get('modalidades/crear','ModalidadController@create');
    Route::get('modalidades','ModalidadController@index');
    Route::get('modalidades/{modalidad}','ModalidadController@show');
    Route::post('modalidades','ModalidadController@store');
    Route::patch('modalidades/{modalidad}','ModalidadController@update');
    Route::delete('modalidades/{modalidad}','ModalidadController@destroy');


    // C A R R E R A S

    Route::get('carreras/editar/{carrera}','CarreraController@edit');
    Route::get('carreras/lista', 'CarreraController@list');
    Route::get('carreras','CarreraController@index');
    Route::get('carreras/crear','CarreraController@create');
    Route::get('carreras/{carrera}','CarreraController@show');
    Route::post('carreras','CarreraController@store');
    Route::patch('carreras/{carrera}', 'CarreraController@update');
    Route::delete('carreras/{carrera}', 'CarreraController@destroy');

    // D E P A R T A M E N T O

    Route::get('departamentos/editar/{departamento}','DepartamentoController@edit');
    Route::get('departamentos/lista', 'DepartamentoController@list');
    Route::get('departamentos','DepartamentoController@index');
    Route::get('departamentos/crear','DepartamentoController@create');
    Route::get('departamentos/{departamento}','DepartamentoController@show');
    Route::post('departamentos','DepartamentoController@store');
    Route::patch('departamentos/{departamento}', 'DepartamentoController@update');
    Route::delete('departamentos/{departamento}', 'DepartamentoController@destroy');

    // E T N I A S

    Route::get('etnias/editar/{etnia}','EtniaController@edit');
    Route::get('etnias/lista', 'EtniaController@list');
    Route::get('etnias','EtniaController@index');
    Route::get('etnias/crear','EtniaController@create');
    Route::get('etnias/{etnia}','EtniaController@show');
    Route::post('etnias','EtniaController@store');
    Route::patch('etnias/{etnia}', 'EtniaController@update');
    Route::delete('etnias/{etnia}', 'EtniaController@destroy');


    // JHONATAN RUTAS

    //SEXOS
Route::get('sexos/editar/{sexo}','SexoController@edit');
Route::get('sexos/lista','SexoController@list');
Route::get('sexos/crear','SexoController@create');
Route::get('sexos','SexoController@index');
Route::get('sexos/{sexo}','SexoController@show');
Route::post('sexos','SexoController@store');
Route::patch('sexos/{sexo}','SexoController@update');
Route::delete('sexos/{sexo}','SexoController@destroy');
Route::get('areas', 'AreaController@index');
Route::get('areas/{id}', 'AreaController@show');

//Modalidades
Route::get('modalidades/editar/{modalidad}','ModalidadController@edit');
Route::get('modalidades/lista','ModalidadController@list');
Route::get('modalidades/crear','ModalidadController@create');
Route::get('modalidades','ModalidadController@index');
Route::get('modalidades/{modalidad}','ModalidadController@show');
Route::post('modalidades','ModalidadController@store');
Route::patch('modalidades/{modalidad}','ModalidadController@update');
Route::delete('modalidades/{modalidad}','ModalidadController@destroy');

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

