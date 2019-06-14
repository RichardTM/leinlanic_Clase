<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



// RUTAS JSON NIVELES
 Route::resource('cursos','CursoController')->only(['index', 'show','destroy']);
 Route::resource('cursos.nivel','NivelController')->only(['index', 'show','destroy']);


 // RUTAS JSON LECCIONES
 Route::resource('niveles','NivelController')->only(['index', 'show','destroy']);
 Route::resource('niveles.leccion', 'LeccionController')->only(['index']);


// RUTAS JSON ACTIVIDADES
 Route::resource('lecciones','LeccionController')->only(['index', 'show','destroy']);
 Route::resource('lecciones.actividad','ActividadController')->only(['index', 'show','destroy']);


 // RUTAS JSON PREGUNTAS
 Route::resource('actividades','ActividadController')->only(['index', 'show','destroy']);
 Route::resource('actividades.pregunta','PreguntaController')->only(['index', 'show','destroy']);


 // RUTAS JSON RESPUESTAS
 Route::resource('preguntas','PreguntaController')->only(['index', 'show','destroy']);
 Route::resource('preguntas.respuesta','RespuestaController')->only(['index', 'show','destroy']);
