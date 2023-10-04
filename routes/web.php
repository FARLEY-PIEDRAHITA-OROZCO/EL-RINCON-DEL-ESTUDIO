<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/* Rutas principales */
Route::view('/', 'software');
Route::view('/contacto', 'contacto');

/* Rutas de la carpeta software */
/* CARACTERIZACION DE PROCESOS */
Route::get('/software/caracterizacion-de-procesos/introduccion-caracterizacion-de-procesos', function () {
    return view('software.caracterizacion-de-procesos.introduccion-caracterizacion-de-procesos');
});

Route::get('/software/caracterizacion-de-procesos/teoria-general-de-sistemas', function () {
    return view('software.caracterizacion-de-procesos.teoria-general-de-sistemas');
});

Route::get('/software/caracterizacion-de-procesos/enfoque-de-sistemas', function () {
    return view('software.caracterizacion-de-procesos.enfoque-de-sistemas');
});

Route::get('/software/caracterizacion-de-procesos/definicion-de-los-sistemas', function () {
    return view('software.caracterizacion-de-procesos.definicion-de-los-sistemas');
});

Route::get('/software/caracterizacion-de-procesos/analisis-de-los-procesos-a-nivel-de-negocio', function () {
    return view('software.caracterizacion-de-procesos.analisis-de-los-procesos-a-nivel-de-negocio');
});

/* ________________________________________________________________________________________________*/

/* INTRODUCCIÓN A LA ALGORITMIA */
Route::get('/software/introduccion-a-la-algoritmia/introduccion', function () {
    return view('software.introduccion-a-la-algoritmia.introduccion');
});
Route::get('/software/introduccion-a-la-algoritmia/introduccion-a-la-algoritmia', function () {
    return view('software.introduccion-a-la-algoritmia.introduccion-a-la-algoritmia');
});
Route::get('/software/introduccion-a-la-algoritmia/logica-matematica', function () {
    return view('software.introduccion-a-la-algoritmia.logica-matematica');
});
/* ________________________________________________________________________________________________*/

/* SOLUCIÓN DE PROBLEMAS CON ALGORITMOS */
Route::get('/software/solucion-de-problemas-con-algoritmos/introduccion-solucion-de-problemas-con-algoritmos', function () {
    return view('software.solucion-de-problemas-con-algoritmos.introduccion-solucion-de-problemas-con-algoritmos');
});
/* ________________________________________________________________________________________________*/

/* CODIFICACIÓN DE ALGORITMOS */
Route::get('/software/codificacion-de-algoritmos/introduccion-codificacion-de-algoritmos', function () {
    return view('software.codificacion-de-algoritmos.introduccion-codificacion-de-algoritmos');
});
/* ________________________________________________________________________________________________*/

/* LA CIENCIA DE LAS COSAS */
Route::get('/software/la-ciencia-de-las-cosas/introduccion-la-ciencia-de-las-cosas', function () {
    return view('software.la-ciencia-de-las-cosas.introduccion-la-ciencia-de-las-cosas');
});
/* ________________________________________________________________________________________________*/

/* TIC */
Route::get('/software/tic/introduccion-tic', function () {
    return view('software.tic.introduccion-tic');
});
/* ________________________________________________________________________________________________*/

Route::get('/software/diagramas-de-requisitos/introduccion-diagramas-de-requisitos', function () {
    return view('software.diagramas-de-requisitos.introduccion-diagramas-de-requisitos');
});

Route::get('/software/diseño-del-modelo-conceptual/introduccion-diseño-del-modelo-conceptual', function () {
    return view('software.diseño-del-modelo-conceptual.introduccion-diseño-del-modelo-conceptual');
});

/* ELICITACION DE REQUISITOS */
Route::get('/software/elicitacion-de-requisitos/introduccion-elicitacion-de-requisitos', function () {
    return view('software.elicitacion-de-requisitos.introduccion-elicitacion-de-requisitos');
});

Route::get('/software/elicitacion-de-requisitos/elicitación-de-requisitos', function () {
    return view('software.elicitacion-de-requisitos.elicitación-de-requisitos');
});
/* ________________________________________________________________________________________________*/

Route::get('/software/especificacion-de-requisitos/introduccion-especificacion-de-requisitos', function () {
    return view('software.especificacion-de-requisitos.introduccion-especificacion-de-requisitos');
});

Route::get('/software/especificaciones-de-software/introduccion-especificaciones-de-software', function () {
    return view('software.especificaciones-de-software.introduccion-especificaciones-de-software');
});

/* INGENIERIA DE REQUISITOS */
Route::get('/software/ingenieria-de-requisitos/introduccion-ingenieria-de-requisitos', function () {
    return view('software.ingenieria-de-requisitos.introduccion-ingenieria-de-requisitos');
});

Route::get('/software/ingenieria-de-requisitos/ciclo-de-vida-del-software', function () {
    return view('software.ingenieria-de-requisitos.ciclo-de-vida-del-software');
});

Route::get('/software/ingenieria-de-requisitos/fase-de-definición-de-requisitos', function () {
    return view('software.ingenieria-de-requisitos.fase-de-definición-de-requisitos');
});

Route::get('/software/ingenieria-de-requisitos/requisitos', function () {
    return view('software.ingenieria-de-requisitos.requisitos');
});

Route::get('/software/ingenieria-de-requisitos/ingeniería-de-requisitos', function () {
    return view('software.ingenieria-de-requisitos.ingeniería-de-requisitos');
});
/* ________________________________________________________________________________________________*/

Route::get('/software/matematicas-nivel-avanzado/introduccion-matematicas-nivel-avanzado', function () {
    return view('software.matematicas-nivel-avanzado.introduccion-matematicas-nivel-avanzado');
});

Route::get('/software/matematicas-nivel-basico/introduccion-matematicas-nivel-basico', function () {
    return view('software.matematicas-nivel-basico.introduccion-matematicas-nivel-basico');
});

Route::get('/software/matematicas-nivel-intermedio/introduccion-matematicas-nivel-intermedio', function () {
    return view('software.matematicas-nivel-intermedio.introduccion-matematicas-nivel-intermedio');
});

Route::get('/software/matematicas-nivel-medio/introduccion-matematicas-nivel-medio', function () {
    return view('software.matematicas-nivel-medio.introduccion-matematicas-nivel-medio');
});

Route::get('/software/metodologias-de-desarrollo/introduccion-metodologias-de-desarrollo', function () {
    return view('software.metodologias-de-desarrollo.introduccion-metodologias-de-desarrollo');
});

Route::get('/software/propuesta-tecnica/introduccion-propuesta-tecnica', function () {
    return view('software.propuesta-tecnica.introduccion-propuesta-tecnica');
});

Route::get('/software/tecnologias-de-la-informacion/introduccion-tecnologias-de-la-informacion', function () {
    return view('software.tecnologias-de-la-informacion.introduccion-tecnologias-de-la-informacion');
});

Route::get('/software/validacion-de-documentos/introduccion-validacion-de-documentos', function () {
    return view('software.validacion-de-documentos.introduccion-validacion-de-documentos');
});

Route::get('/software/validacion-de-requisitos/introduccion-validacion-de-requisitos', function () {
    return view('software.validacion-de-requisitos.introduccion-validacion-de-requisitos');
});



