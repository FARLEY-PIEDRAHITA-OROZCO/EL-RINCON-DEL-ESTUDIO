@extends('layouts.cursos')
@section('title', 'Cursos')
@section('content')

<section class="box-container-1">

            <div class="box-1">
                <img src="images/bases-de-datos/material1.png" alt="">
                <a class="boton" href="/cursos/bases-de-datos"><p class="p-1">BASES DE DATOS MYSQL</p></a>
            </div>

            <div class="box-1">
                <img src="images/bases-de-datos-nosql/material1.png" alt="">
                <a class="boton" href="/cursos/bases-de-datos-nosql"><p class="p-1">BASES DE DATOS NOSQL</p></a>
            </div>

            <div class="box-1">
                <img src="images/curso-python/1.svg" alt="">
                <a class="boton" href="/cursos/python"><p class="p-1">VARIABLES Y ESTRUCTURAS DE CONTROL EN PYTHON</p></a>
            </div>


@endsection
