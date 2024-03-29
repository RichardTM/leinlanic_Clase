<?php
use App\Http\Controllers\AdminController;

Route::get('/', function () {

    return view('welcome');
});
//Autentificacion rutas
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//Registracion rutas
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
//Reseteo de contraseña rutas
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['role:super-admin|editor|moderador']], function() {

        Route::resource('usuarios', 'UsersController');
    });

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/perfil', 'PerfilController@index2')->name('perfil');


    Route::get('miskito/cursomiskito', function () {
        return view('miskito/cursomiskito');
    });
    Route::get('miskito/cursomiskitoajax', function () {
        return view('miskito/cursomiskitoajax');
    });
    Route::get('miskito/leccionesmiskito', function () {
        return view('miskito/leccionesmiskito');
    });
    Route::get('miskito/actividadlec1miskito', function () {
        return view('miskito/actividadlec1miskito');
    });

    Route::get('miskito/vocalesmiskito', function () {
        return view('miskito/vocalesmiskito');
    });
    Route::get('miskito/preguntasmiskito', function () {
        return view('miskito/preguntasmiskito');
    });
    Route::get('about', function () {
        return view('about');
    });
    Route::get('miskito/mknivel1', function () {
        return view('miskito/mknivel1');
    });
    Route::get('miskito/mkleccion1', function () {
        return view('miskito/mkleccion1');
    });
    Route::get('miskito/leccion2', function () {
        return view('miskito/leccion2');
    });
    Route::get('miskito/leccion3', function () {
        return view('miskito/leccion3');
    });
    Route::get('miskito/leccion4',function () {
        return view('miskito/leccion4');
    });


    // A R E A
    Route::get('areas/editar/{area}', 'AreaController@edit');
    Route::get('areas/lista', 'AreaController@list');
    Route::get('areas', 'AreaController@index');
    Route::get('areas/crear', 'AreaController@create');
    Route::get('areas/{area}', 'AreaController@show');
    Route::post('areas', 'AreaController@store');
    Route::patch('areas/{area}', 'AreaController@update');
    Route::delete('areas/{area}', 'AreaController@destroy');



    // A C T I V I D A D
    Route::get('actividades/editar/{actividad}', 'ActividadController@edit');
    Route::get('actividades/lista', 'ActividadController@list');
    Route::get('actividades', 'ActividadController@index1');
    Route::get('actividades/crear', 'ActividadController@create');
    Route::get('actividades/{actividad}', 'ActividadController@show');
    Route::post('actividades', 'ActividadController@store');
    Route::patch('actividades/{actividad}', 'ActividadController@update');
    Route::delete('actividades/{actividad}', 'ActividadController@destroy');



    //Modalidades
    Route::get('modalidades/editar/{modalidad}', 'ModalidadController@edit');
    Route::get('modalidades/lista', 'ModalidadController@list');
    Route::get('modalidades/crear', 'ModalidadController@create');
    Route::get('modalidades', 'ModalidadController@index');
    Route::get('modalidades/{modalidad}', 'ModalidadController@show');
    Route::post('modalidades', 'ModalidadController@store');
    Route::patch('modalidades/{modalidad}', 'ModalidadController@update');
    Route::delete('modalidades/{modalidad}', 'ModalidadController@destroy');


    // C A R R E R A S

    Route::get('carreras/editar/{carrera}', 'CarreraController@edit');
    Route::get('carreras/lista', 'CarreraController@list');
    Route::get('carreras', 'CarreraController@index');
    Route::get('carreras/crear', 'CarreraController@create');
    Route::get('carreras/{carrera}', 'CarreraController@show');
    Route::post('carreras', 'CarreraController@store');
    Route::patch('carreras/{carrera}', 'CarreraController@update');
    Route::delete('carreras/{carrera}', 'CarreraController@destroy');

    // D E P A R T A M E N T O

    Route::get('departamentos/editar/{departamento}', 'DepartamentoController@edit');
    Route::get('departamentos/lista', 'DepartamentoController@list');
    Route::get('departamentos', 'DepartamentoController@index');
    Route::get('departamentos/crear', 'DepartamentoController@create');
    Route::get('departamentos/{departamento}', 'DepartamentoController@show');
    Route::post('departamentos', 'DepartamentoController@store');
    Route::patch('departamentos/{departamento}', 'DepartamentoController@update');
    Route::delete('departamentos/{departamento}', 'DepartamentoController@destroy');

    // E T N I A S

    Route::get('etnias/editar/{etnia}', 'EtniaController@edit');
    Route::get('etnias/lista', 'EtniaController@list');
    Route::get('etnias', 'EtniaController@index');
    Route::get('etnias/crear', 'EtniaController@create');
    Route::get('etnias/{etnia}', 'EtniaController@show');
    Route::post('etnias', 'EtniaController@store');
    Route::patch('etnias/{etnia}', 'EtniaController@update');
    Route::delete('etnias/{etnia}', 'EtniaController@destroy');


    // JHONATAN RUTAS

    //SEXOS
    Route::get('sexos/editar/{sexo}', 'SexoController@edit');
    Route::get('sexos/lista', 'SexoController@list');
    Route::get('sexos/crear', 'SexoController@create');
    Route::get('sexos', 'SexoController@index');
    Route::get('sexos/{sexo}', 'SexoController@show');
    Route::post('sexos', 'SexoController@store');
    Route::patch('sexos/{sexo}', 'SexoController@update');
    Route::delete('sexos/{sexo}', 'SexoController@destroy');
    Route::get('areas', 'AreaController@index');
    Route::get('areas/{id}', 'AreaController@show');

    //Modalidades
    Route::get('modalidades/editar/{modalidad}', 'ModalidadController@edit');
    Route::get('modalidades/lista', 'ModalidadController@list');
    Route::get('modalidades/crear', 'ModalidadController@create');
    Route::get('modalidades', 'ModalidadController@index');
    Route::get('modalidades/{modalidad}', 'ModalidadController@show');
    Route::post('modalidades', 'ModalidadController@store');
    Route::patch('modalidades/{modalidad}', 'ModalidadController@update');
    Route::delete('modalidades/{modalidad}', 'ModalidadController@destroy');

    //Municipios
    Route::get('municipios/editar/{municipio}', 'MunicipioController@edit');
    Route::get('municipios/lista', 'MunicipioController@list');
    Route::get('municipios/crear', 'MunicipioController@create');
    Route::get('municipios', 'MunicipioController@index');
    Route::get('municipios/{municipio}', 'MunicipioController@show');
    Route::post('municipios', 'MunicipioController@store');
    Route::patch('municipios/{municipio}', 'MunicipioController@update');
    Route::delete('municipios/{municipio}', 'MunicipioController@destroy');

    //Nacionalidades
    Route::get('nacionalidades/editar/{nacionalidad}', 'NacionalidadController@edit');
    Route::get('nacionalidades/lista', 'NacionalidadController@list');
    Route::get('nacionalidades/crear', 'NacionalidadController@create');
    Route::get('nacionalidades', 'NacionalidadController@index');
    Route::get('nacionalidades/{nacionalidad}', 'NacionalidadController@show');
    Route::post('nacionalidades', 'NacionalidadController@store');
    Route::patch('nacionalidades/{nacionalidad}', 'NacionalidadController@update');
    Route::delete('nacionalidades/{nacionalidad}', 'NacionalidadController@destroy');

    // RUTAS LECCIONES

    Route::get('lecciones/editar/{leccion}', 'LeccionController@edit');
    Route::get('lecciones/lista', 'LeccionController@list');
    Route::get('miskito/cursomiskito', 'LeccionController@listmiskito');
    Route::get('lecciones/crear', 'LeccionController@create');

    Route::get('lecciones', 'LeccionController@index1');
    Route::get('lecciones/{leccion}', 'LeccionController@show');
    Route::post('lecciones', 'LeccionController@store');
    Route::patch('lecciones/{leccion}', 'LeccionController@update');
    Route::delete('lecciones/{leccion}', 'LeccionController@destroy');


    // RUTAS NIVELES

    Route::get('niveles/editar/{nivel}', 'NivelController@edit');
    Route::get('niveles/lista', 'NivelController@list');
    Route::get('niveles/crear', 'NivelController@create');

    Route::get('niveles', 'NivelController@index1');
    Route::get('niveles/{leccion}', 'NivelController@show');
    Route::post('niveles', 'NivelController@store');
    Route::patch('niveles/{nivel}', 'NivelController@update');
    Route::delete('niveles/{nivel}', 'NivelController@destroy');


    // RUTAS RECINTOS


    Route::get('recintos/editar/{recinto}', 'RecintoController@edit');
    Route::get('recintos/lista', 'RecintoController@list');
    Route::get('recintos/crear', 'RecintoController@create');

    Route::get('recintos', 'RecintoController@index');
    Route::get('recintos/{recinto}', 'RecintoController@show');
    Route::post('recintos', 'RecintoController@store');
    Route::patch('recintos/{recinto}', 'RecintoController@update');
    Route::delete('recintos/{recinto}', 'RecintoController@destroy');

    // RUTAS PERFILES

    Route::get('perfiles/editar/{perfil}', 'PerfilController@edit');
    Route::get('perfiles/lista', 'PerfilController@list');
    Route::get('perfiles/crear', 'PerfilController@create');

    Route::get('perfiles', 'PerfilController@index');
    Route::get('perfiles/{perfil}', 'PerfilController@show');
    Route::post('perfiles', 'PerfilController@store');
    Route::patch('perfiles/{perfil}', 'PerfilController@update');
    Route::delete('perfiles/{perfil}', 'PerfilController@destroy');



    // RUTAS LENGUAS

    Route::get('lenguas/editar/{lengua}', 'LenguaController@edit');
    Route::get('lenguas/lista', 'LenguaController@list');
    Route::get('lenguas/crear', 'LenguaController@create');

    Route::get('lenguas', 'LenguaController@index');
    Route::get('lenguas/{lengua}', 'LenguaController@show');
    Route::post('lenguas', 'LenguaController@store');
    Route::patch('lenguas/{lengua}', 'LenguaController@update');
    Route::delete('lenguas/{lengua}', 'LenguaController@destroy');


    // RUTAS DESARROLLADORES

    Route::get('desarrolladores/editar/{desarrollador}', 'DesarrolladorController@edit');
    Route::get('desarrolladores/lista', 'DesarrolladorController@list');
    Route::get('desarrolladores/crear', 'DesarrolladorController@create');

    Route::get('desarrolladores', 'DesarrolladorController@index');
    Route::get('desarrolladores/{desarrollador}', 'DesarrolladorController@show');
    Route::post('desarrolladores', 'DesarrolladorController@store');
    Route::patch('desarrolladores/{desarrollador}', 'DesarrolladorController@update');
    Route::delete('desarrolladores/{desarrollador}', 'DesarrolladorController@destroy');

    // C U R S O S
    Route::get('admin','CursoController@list2');
    Route::get('cursos/editar/{curso}', 'CursoController@edit');
    Route::get('cursos/lista', 'CursoController@list');
    Route::get('cursos/crear', 'CursoController@create');
    Route::get('cursos', 'CursoController@index');
    Route::get('cursos/show/{curso}', 'CursoController@show');
    Route::post('cursos', 'CursoController@store');
    Route::patch('cursos/{curso}', 'CursoController@update');
    Route::delete('cursos/{curso}', 'CursoController@destroy');

    //TIPO PALABRA
    Route::get('tipopalabras/editar/{tipopalabra}', 'TipopalabraController@edit');
    Route::get('tipopalabras/lista', 'TipopalabraController@list');
    Route::get('tipopalabras/crear', 'TipopalabraController@create');

    Route::get('tipopalabras', 'TipopalabraController@index');
    Route::get('tipopalabras/{tipopalabra}', 'TipopalabraController@show');
    Route::post('tipopalabras', 'TipopalabraController@store');
    Route::patch('tipopalabras/{tipopalabra}', 'TipopalabraController@update');
    Route::delete('tipopalabras/{tipopalabra}', 'TipopalabraController@destroy');

    //PALABRA NUEVAS
    Route::get('palabranuevas/editar/{palabranueva}', 'PalabranuevaController@edit');
    Route::get('palabranuevas/lista', 'PalabranuevaController@list');
    Route::get('palabranuevas/crear', 'PalabranuevaController@create');

    Route::get('palabranuevas', 'PalabranuevaController@index');
    Route::get('palabranuevas/{palabranueva}', 'PalabranuevaController@show');
    Route::post('palabranuevas', 'PalabranuevaController@store');
    Route::patch('palabranuevas/{palabranueva}', 'PalabranuevaController@update');
    Route::delete('palabranuevas/{palabranueva}', 'PalabranuevaController@destroy');

    //TRADUCCION PALABRA
    Route::get('traduccionesp/editar/{traduccionpalabra}', 'TraduccionpalabraController@edit');
    Route::get('traduccionesp/lista', 'TraduccionpalabraController@list');
    Route::get('traduccionesp/crear', 'TraduccionpalabraController@create');

    Route::get('traduccionesp', 'TraduccionpalabraController@index');
    Route::get('traduccionesp/{traduccionpalabra}', 'TraduccionpalabraController@show');
    Route::post('traduccionesp', 'TraduccionpalabraController@store');
    Route::patch('traduccionesp/{traduccionpalabra}', 'TraduccionpalabraController@update');
    Route::delete('traduccionesp/{traduccionpalabra}', 'TraduccionpalabraController@destroy');

    //TRADUCCIONES
    Route::get('traducciones/editar/{traduccion}', 'TraduccionController@edit');
    Route::get('traducciones/lista', 'TraduccionController@list');
    Route::get('traducciones/crear', 'TraduccionController@create');

    Route::get('traducciones', 'TraduccionController@index');
    Route::get('traducciones/{traduccion}', 'TraduccionController@show');
    Route::post('traducciones', 'TraduccionController@store');
    Route::patch('traducciones/{traduccion}', 'TraduccionController@update');
    Route::delete('traducciones/{traduccion}', 'TraduccionController@destroy');


    //TIPO PREGUNTAS
    Route::get('tipopreguntas/editar/{tipoPregunta}', 'TipoPreguntaController@edit');
    Route::get('tipopreguntas/lista', 'TipoPreguntaController@list');
    Route::get('tipopreguntas/crear', 'TipoPreguntaController@create');

    Route::get('tipopreguntas', 'TipoPreguntaController@index');
    Route::get('tipopreguntas/{tipoPregunta}', 'TipoPreguntaController@show');
    Route::post('tipopreguntas', 'TipoPreguntaController@store');
    Route::patch('tipopreguntas/{tipoPregunta}', 'TipoPreguntaController@update');
    Route::delete('tipopreguntas/{tipoPregunta}', 'TipoPreguntaController@destroy');


    // PREGUNTAS
    Route::get('preguntas/editar/{pregunta}', 'PreguntaController@edit');
    Route::get('preguntas/lista', 'PreguntaController@list');
    Route::get('preguntas/crear', 'PreguntaController@create');

    Route::get('preguntas', 'PreguntaController@index1');
    Route::get('preguntas/{pregunta}', 'PreguntaController@show');
    Route::post('preguntas', 'PreguntaController@store');
    Route::patch('preguntas/{pregunta}', 'PreguntaController@update');
    Route::delete('preguntas/{pregunta}', 'PreguntaController@destroy');


    // LECCION PREGUNTAS
    Route::get('lpreguntas/editar/{leccionPregunta}', 'LeccionPreguntaController@edit');
    Route::get('lpreguntas/lista', 'LeccionPreguntaController@list');
    Route::get('lpreguntas/crear', 'LeccionPreguntaController@create');

    Route::get('lpreguntas', 'LeccionPreguntaController@index');
    Route::get('lpreguntas/{leccionPregunta}', 'LeccionPreguntaController@show');
    Route::post('lpreguntas', 'LeccionPreguntaController@store');
    Route::patch('lpreguntas/{lpregunta}', 'LeccionPreguntaController@update');
    Route::delete('lpreguntas/{lpregunta}', 'LeccionPreguntaController@destroy');


    // RESPUESTAS
    Route::get('respuestas/editar/{respuesta}', 'RespuestaController@edit');
    Route::get('respuestas/lista', 'RespuestaController@list');
    Route::get('respuestas/crear', 'RespuestaController@create');

    Route::get('respuestas', 'RespuestaController@index1');
    Route::get('respuestas/{respuesta}', 'RespuestaController@show');
    Route::post('respuestas', 'RespuestaController@store');
    Route::patch('respuestas/{respuesta}', 'RespuestaController@update');
    Route::delete('respuestas/{respuesta}', 'RespuestaController@destroy');

    //PREGUNTA RESPUESTA
    Route::get('preguntaresp/editar/{preguntarespuesta}', 'PreguntaRespuestaController@edit');
    Route::get('preguntaresp/lista', 'PreguntaRespuestaController@list');
    Route::get('preguntaresp/crear', 'PreguntaRespuestaController@create');

    Route::get('preguntaresp', 'PreguntaRespuestaController@index');
    Route::get('preguntaresp/{preguntarespuesta}', 'PreguntaRespuestaController@show');
    Route::post('preguntaresp', 'PreguntaRespuestaController@store');
    Route::patch('preguntaresp/{preguntarespuesta}', 'PreguntaRespuestaController@update');
    Route::delete('preguntaresp/{preguntarespuesta}', 'PreguntaRespuestaController@destroy');

    //ESTUDIANTES
    Route::get('estudiantes/editar/{estudiante}', 'EstudianteController@edit');
    Route::get('estudiantes/lista', 'EstudianteController@list');
    Route::get('estudiantes/crear', 'EstudianteController@create');

    Route::get('estudiantes', 'EstudianteController@index');
    Route::get('estudiantes/{estudiante}', 'EstudianteController@show');
    Route::post('estudiantes', 'EstudianteController@store');
    Route::patch('estudiantes/{estudiante}', 'EstudianteController@update');
    Route::delete('estudiantes/{estudiante}', 'EstudianteController@destroy');


});
