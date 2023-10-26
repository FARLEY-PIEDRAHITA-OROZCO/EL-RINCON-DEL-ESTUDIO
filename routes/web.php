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
Route::view('/cursos', 'cursos');


/* Rutas de la carpeta software */
/* CARACTERIZACION DE PROCESOS */
Route::get('/software/caracterizacion-de-procesos/introduccion', function () {
    return view('software.caracterizacion-de-procesos.introduccion');
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

/* INGENIERIA DE REQUISITOS */
Route::get('/software/ingenieria-de-requisitos/introduccion', function () {
    return view('software.ingenieria-de-requisitos.introduccion');
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
Route::get('/software/solucion-de-problemas-con-algoritmos/introduccion', function () {
    return view('software.solucion-de-problemas-con-algoritmos.introduccion');
});
Route::get('/software/solucion-de-problemas-con-algoritmos/metodologia-de-algoritmos', function () {
    return view('software.solucion-de-problemas-con-algoritmos.metodologia-de-algoritmos');
});
Route::get('/software/solucion-de-problemas-con-algoritmos/diagramas-de-flujo', function () {
    return view('software.solucion-de-problemas-con-algoritmos.diagramas-de-flujo');
});
/* ________________________________________________________________________________________________*/

/* CODIFICACIÓN DE ALGORITMOS */
Route::get('/software/codificacion-de-algoritmos/introduccion', function () {
    return view('software.codificacion-de-algoritmos.introduccion');
});
/* ________________________________________________________________________________________________*/

/* LA CIENCIA DE LAS COSAS */
Route::get('/software/la-ciencia-de-las-cosas/introduccion', function () {
    return view('software.la-ciencia-de-las-cosas.introduccion');
});
/* ________________________________________________________________________________________________*/

/* TIC */
Route::get('/software/tic/introduccion', function () {
    return view('software.tic.introduccion');
});
/* ________________________________________________________________________________________________*/

Route::get('/software/diagramas-de-requisitos/introduccion', function () {
    return view('software.diagramas-de-requisitos.introduccion');
});

Route::get('/software/diseño-del-modelo-conceptual/introduccion', function () {
    return view('software.diseño-del-modelo-conceptual.introduccion');
});

/* ELICITACION DE REQUISITOS */
Route::get('/software/elicitacion-de-requisitos/introduccion', function () {
    return view('software.elicitacion-de-requisitos.introduccion');
});

Route::get('/software/elicitacion-de-requisitos/elicitación-de-requisitos', function () {
    return view('software.elicitacion-de-requisitos.elicitación-de-requisitos');
});
/* ________________________________________________________________________________________________*/

Route::get('/software/especificacion-de-requisitos/introduccion', function () {
    return view('software.especificacion-de-requisitos.introduccion');
});

Route::get('/software/especificaciones-de-software/introduccion', function () {
    return view('software.especificaciones-de-software.introduccion');
});

Route::get('/software/matematicas-nivel-avanzado/introduccion', function () {
    return view('software.matematicas-nivel-avanzado.introduccion');
});

Route::get('/software/matematicas-nivel-basico/introduccion', function () {
    return view('software.matematicas-nivel-basico.introduccion');
});

Route::get('/software/matematicas-nivel-intermedio/introduccion', function () {
    return view('software.matematicas-nivel-intermedio.introduccion');
});

Route::get('/software/matematicas-nivel-medio/introduccion', function () {
    return view('software.matematicas-nivel-medio.introduccion');
});

Route::get('/software/metodologias-de-desarrollo/introduccion', function () {
    return view('software.metodologias-de-desarrollo.introduccion');
});

Route::get('/software/propuesta-tecnica/introduccion', function () {
    return view('software.propuesta-tecnica.introduccion');
});

Route::get('/software/tecnologias-de-la-informacion/introduccion', function () {
    return view('software.tecnologias-de-la-informacion.introduccion');
});

Route::get('/software/validacion-de-documentos/introduccion', function () {
    return view('software.validacion-de-documentos.introduccion');
});

Route::get('/software/validacion-de-requisitos/introduccion', function () {
    return view('software.validacion-de-requisitos.introduccion');
});

// Rutas de la carpeta cursos
/* BASES DE DATOS */
Route::get('/cursos/bases-de-datos', function () {
    return view('/cursos.bases-de-datos');
});

/* INTRODUCCIÓN A BASES DE DATOS MYSQL */
Route::get('/bases-de-datos/introduccion-a-bases-de-datos/introduccion-bases-de-datos', function () {
    return view('bases-de-datos.introduccion-a-bases-de-datos.introduccion-bases-de-datos');
});
Route::get('/bases-de-datos/introduccion-a-bases-de-datos/conceptos-iniciales', function () {
    return view('bases-de-datos.introduccion-a-bases-de-datos.conceptos-iniciales');
});
Route::get('/bases-de-datos/introduccion-a-bases-de-datos/modelos-de-datos', function () {
    return view('bases-de-datos.introduccion-a-bases-de-datos.modelos-de-datos');
});
Route::get('/bases-de-datos/introduccion-a-bases-de-datos/sistemas-de-gestion-de-bases-de-datos', function () {
    return view('bases-de-datos.introduccion-a-bases-de-datos.sistemas-de-gestion-de-bases-de-datos');
});
Route::get('/bases-de-datos/introduccion-a-bases-de-datos/post', function () {
    return view('bases-de-datos.introduccion-a-bases-de-datos.post');
});
/* ________________________________________________________________________________________________*/

/* MYSQL WORKBENCH */
Route::get('/bases-de-datos/mysql-workbench/introduccion-mysql-workbench', function () {
    return view('bases-de-datos.mysql-workbench.introduccion-mysql-workbench');
});
Route::get('/bases-de-datos/mysql-workbench/descarga-e-instalacion-mysql', function () {
    return view('bases-de-datos.mysql-workbench.descarga-e-instalacion-mysql');
});
Route::get('/bases-de-datos/mysql-workbench/software-necesario', function () {
    return view('bases-de-datos.mysql-workbench.software-necesario');
});
/* ________________________________________________________________________________________________*/

/*  ESTUDIO DE CASO IMPORT TECH S.A.S */
Route::get('/bases-de-datos/estudio-de-caso-import-tech/introduccion-estudio-de-caso-import-tech', function () {
    return view('bases-de-datos.estudio-de-caso-import-tech.introduccion-estudio-de-caso-import-tech');
});
Route::get('/bases-de-datos/estudio-de-caso-import-tech/caso-de-estudio', function () {
    return view('bases-de-datos.estudio-de-caso-import-tech.caso-de-estudio');
});
/* ________________________________________________________________________________________________*/

/*  EL LENGUAJE SQL */
Route::get('/bases-de-datos/el-lenguaje-sql/introduccion-el-lenguaje-sql', function () {
    return view('bases-de-datos.el-lenguaje-sql.introduccion-el-lenguaje-sql');
});
/* ________________________________________________________________________________________________*/

/* PRUEBAS DE VALIDACION DE DATOS DE MYSQL */
Route::get('/bases-de-datos/pruebas-de-validacion-de-datos-mysql/introduccion-pruebas-de-validacion-de-datos-mysql', function () {
    return view('bases-de-datos.pruebas-de-validacion-de-datos-mysql.introduccion-pruebas-de-validacion-de-datos-mysql');
});
/* ________________________________________________________________________________________________*/
