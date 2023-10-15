@extends('../../layouts.sistemas')
@section('../../title', 'Estudio de caso import tech s.a.s')

@section('navbar')
    @include('partials.navbar-introduccion-estudio-de-caso-import-tech')
@endsection

@section('content')
    <h1 class="h1-content" id="Introducción">Introducción</h1>
    <br>
    <p>
        Para el desarrollo práctico de trabajo con bases de datos relacionales MySQL nos apalancaremos en la utilización de un caso de estudio el cual se desarrollará y permitirá ir avanzando en la apropiación y uso del SGBB de MySQL.
    </p>
    <br>
    <img class="img-2 img-3" src="/images/estudio-de-caso/img1.svg" alt="">
    <br>
    <p>
        Para la apropiación más acertada de los conceptos de diseño, y construcción y gestión de las bases de datos relacionales en MySQL, en este módulo se construirán los modelos conceptuales, físico y entidad relación, además, de la generación de un script para construir la base de datos con un caso de estudio práctico que permita llevar la conceptualización y principios de las bases de datos a un escenario real.
    </p>

@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#Introducción">Introducción</a>
@endsection
