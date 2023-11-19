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
Route::view('/matematicas', 'matematicas');
Route::view('/cursos', 'cursos');
Route::view('/contacto', 'contacto');

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
Route::get('/cursos/bases-de-datos/introduccion-a-bases-de-datos-mysql/introduccion', function () {
    return view('bases-de-datos.introduccion-a-bases-de-datos-mysql.introduccion');
});
Route::get('/bases-de-datos/introduccion-a-bases-de-datos-mysql/conceptos-iniciales', function () {
    return view('bases-de-datos.introduccion-a-bases-de-datos-mysql.conceptos-iniciales');
});
Route::get('/bases-de-datos/introduccion-a-bases-de-datos-mysql/modelo-de-datos', function () {
    return view('bases-de-datos.introduccion-a-bases-de-datos-mysql.modelo-de-datos');
});
Route::get('/bases-de-datos/introduccion-a-bases-de-datos-mysql/sistemas-de-gestion', function () {
    return view('bases-de-datos.introduccion-a-bases-de-datos-mysql.sistemas-de-gestion');
});
/* ________________________________________________________________________________________________*/

/* MYSQL WORKBENCH */
Route::get('/bases-de-datos/mysql-workbench/introduccion', function () {
    return view('bases-de-datos.my-sql-workbench.introduccion');
});
Route::get('/bases-de-datos/my-sql-workbench/descarga-e-instalacion', function () {
    return view('bases-de-datos.my-sql-workbench.descarga-e-instalacion');
});
Route::get('/bases-de-datos/mysql-workbench/software-necesario', function () {
    return view('bases-de-datos.my-sql-workbench.software-necesario');
});
/* ________________________________________________________________________________________________*/

/*  ESTUDIO DE CASO IMPORT TECH S.A.S */
Route::get('/bases-de-datos/estudio-de-caso/introduccion', function () {
    return view('bases-de-datos.estudio-de-caso.introduccion');
});
Route::get('/bases-de-datos/estudio-de-caso/caso-de-estudio', function () {
    return view('bases-de-datos.estudio-de-caso.caso-de-estudio');
});
/* ________________________________________________________________________________________________*/

/*  EL LENGUAJE SQL */
Route::get('/bases-de-datos/my-sql/introduccion', function () {
    return view('bases-de-datos.my-sql.introduccion');
});
Route::get('/bases-de-datos/my-sql/que-es-sql', function () {
    return view('bases-de-datos.my-sql.que-es-sql');
});
/* ________________________________________________________________________________________________*/

/* PRUEBAS DE VALIDACION DE DATOS DE MYSQL */
Route::get('/bases-de-datos/pruebas-de-validacion/introduccion', function () {
    return view('bases-de-datos.pruebas-de-validacion.introduccion');
});
Route::get('/bases-de-datos/pruebas-de-validacion/pruebas', function () {
    return view('bases-de-datos.pruebas-de-validacion.pruebas');
});
Route::get('/bases-de-datos/pruebas-de-validacion/restricciones', function () {
    return view('bases-de-datos.pruebas-de-validacion.restricciones');
});
Route::get('/bases-de-datos/pruebas-de-validacion/ejecucion', function () {
    return view('bases-de-datos.pruebas-de-validacion.ejecucion');
});
/* ________________________________________________________________________________________________*/

/* BASES DE DATOS NO SQL */
Route::get('/cursos/bases-de-datos-nosql', function () {
    return view('/cursos.bases-de-datos-nosql');
});

/* INTRODUCCIÓN A BASES DE DATOS NOSQL */
Route::get('/cursos/bases-de-datos-nosql/introduccion-a-bases-de-datos-nosql/introduccion', function () {
    return view('bases-de-datos-nosql.introduccion-bases-de-datos-nosql.introduccion');
});
Route::get('/cursos/bases-de-datos-nosql/introduccion-a-bases-de-datos-nosql/introduccion-a-bases-de-datos-nosql', function () {
    return view('bases-de-datos-nosql.introduccion-bases-de-datos-nosql.introduccion-a-bases-de-datos-nosql');
});
Route::get('/cursos/bases-de-datos-nosql/introduccion-a-bases-de-datos-nosql/nosql-con-mongo-db', function () {
    return view('bases-de-datos-nosql.introduccion-bases-de-datos-nosql.nosql-con-mongo-db');
});
Route::get('/cursos/bases-de-datos-nosql/introduccion-a-bases-de-datos-nosql/manipulacion-db-con-mongo', function () {
    return view('bases-de-datos-nosql.introduccion-bases-de-datos-nosql.manipulacion-db-con-mongo');
});
/* ________________________________________________________________________________________________*/

/* CREACION DE BASES DE DATOS NOSQL */
Route::get('/cursos/bases-de-datos-nosql/creacion-bases-de-datos-nosql/introduccion', function () {
    return view('bases-de-datos-nosql.creacion-bases-de-datos-nosql.introduccion');
});
Route::get('/cursos/bases-de-datos-nosql/creacion-bases-de-datos-nosql/bases-de-datos-en-la-nube', function () {
    return view('bases-de-datos-nosql.creacion-bases-de-datos-nosql.bases-de-datos-en-la-nube');
});
Route::get('/cursos/bases-de-datos-nosql/creacion-bases-de-datos-nosql/mongodb-atlas', function () {
    return view('bases-de-datos-nosql.creacion-bases-de-datos-nosql.mongodb-atlas');
});
Route::get('/cursos/bases-de-datos-nosql/creacion-bases-de-datos-nosql/firebase', function () {
    return view('bases-de-datos-nosql.creacion-bases-de-datos-nosql.firebase');
});
