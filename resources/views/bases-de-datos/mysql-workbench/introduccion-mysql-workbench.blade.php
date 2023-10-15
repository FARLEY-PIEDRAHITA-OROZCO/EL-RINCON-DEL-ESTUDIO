@extends('../../layouts.sistemas')
@section('../../title', 'Caracterización de procesos')

@section('navbar')
    @include('partials.navbar-introduccion-mysql-workbench')
@endsection

@section('content')
    <h1 class="h1-content" id="Introducción">Introducción</h1>
    <br>
    <p>
        En la actualidad, un gran porcentaje de software y aplicativos que se encuentran en el mercado, hacen uso de bases de datos con MySQL. Además, es de vital importancia contar con una gestión eficiente de la gran cantidad de información que se genera diariamente a través de múltiples dispositivos, pues las bases de datos bien gestionadas marcan una ventaja competitiva entre las diferentes empresas.
    </p>
    <br>
    <p>
        Por esto es importante la utilización de herramientas visuales que potencien el trabajo con las bases de datos relacionales MySQL; para este ejercicio se utilizará Workbench debido a su facilidad de uso, alta demanda y empleo en la gestión y administración de las bases de datos.
    </p>
    <br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/m-h80fyUIiA?si=2vgEPGt1btPa0CfL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#Introducción">Introducción</a>
@endsection
