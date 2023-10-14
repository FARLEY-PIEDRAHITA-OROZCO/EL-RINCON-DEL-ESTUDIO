@extends('../../layouts.sistemas')
@section('../../title', 'Introducción a los sistemas de gestión de bases de datos MySQL')

@section('navbar')
    @include('partials.navbar-introduccion-a-bases-de-datos')
@endsection

@section('content')
    <h1 class="h1-content" id="Introducción">Introducción</h1>
    <br>
    <p>
        En la actualidad, un gran porcentaje de software y aplicativos que se encuentran en el mercado hacen uso de bases de datos con MySQL. Además, es de vital importancia contar con una gestión eficiente de la gran cantidad de información que se genera diariamente a través de múltiples dispositivos. Las bases de datos bien gestionadas marcan una ventaja competitiva entre las diferentes empresas.
    </p>
    <br>
    <p>
        En consecuencia, los diferentes sectores productivos de la economía colombiana se encuentran en la búsqueda de personal con las mejores capacidades laborales y profesionales que cuenten con el dominio en la administración y manipulación de bases de datos, para así contribuir al desarrollo económico, social y tecnológico de su entorno y del país.
    </p>
    <br>
    <img class="img-2 img-3" src="/images/introduccion-a-bases-de-datos/img1.svg" alt="La definición de dato">
    <br><br>
    <p>
        En este módulo se estudiarán los principios y conocimientos generales de las bases de datos relacionales, enfatizando en el motor de MySQL como la herramienta seleccionada para el desarrollo del programa de formación, en este módulo se incluye el estudio de los diferentes modelos para el diseño de las bases de datos, así como las herramientas utilizadas para este propósito, y finaliza con la introducción y el estudio inicial del lenguaje estructurado de consulta SQL.
    </p>
@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#Introducción">Introducción</a>
@endsection
