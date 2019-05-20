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

        return view('home');

    });
Route::get('registrar', function () {return view('registro');});


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


// RUTAS NIVELLECCIONES

Route::get('nivellecciones/editar/{nivelleccion}', 'NivelleccionController@edit');
Route::get('nivellecciones/lista', 'NivelleccionController@list');
Route::get('nivellecciones/crear','NivelleccionController@create');

Route::get('nivellecciones', 'NivelleccionController@index');
Route::get('nivellecciones/{nivellecion}', 'NivelleccionController@show');
Route::post('nivellecciones', 'NivelleccionController@store');
Route::patch('nivellecciones/{nivelleccion}', 'NivelleccionController@update');
Route::delete('nivellecciones/{nivelleccion}', 'NivelleccionController@destroy');


// RUTAS PALABRAS

Route::get('palabras/editar/{palabra}', 'PalabraController@edit');
Route::get('palabras/lista', 'PalabraController@list');
Route::get('palabras/crear','PalabraController@create');

Route::get('palabras', 'PalabraController@index');
Route::get('palabras/{palabra}', 'PalabraController@show');
Route::post('palabras', 'PalabraController@store');
Route::patch('palabras/{palabra}', 'PalabraController@update');
Route::delete('palabras/{palabra}', 'PalabraController@destroy');


// RUTAS EXAMENES

Route::get('examenes/editar/{examen}', 'ExamenController@edit');
Route::get('examenes/lista', 'ExamenController@list');
Route::get('examenes/crear','ExamenController@create');

Route::get('examenes', 'ExamenController@index');
Route::get('examenes/{examen}', 'ExamenController@show');
Route::post('examenes', 'ExamenController@store');
Route::patch('examenes/{examen}', 'ExamenController@update');
Route::delete('examenes/{examen}', 'ExamenController@destroy');
