@extends('../../layouts.sistemas')
@section('../../title', 'Análisis y solución de problemas aplicando algoritmos')

@section('navbar')
    @include('partials.navbar-solucion-de-problemas-con-algoritmos')
@endsection

@section('content')
    <h1 class="h1-content" id="Introducción">Introducción</h1>
    <br>
    <p>
        El avance tecnológico lleva implícito la frontera del conocimiento, esto a su vez genera nuevos conceptos, terminologías, notaciones, nomenclaturas y su representación a través de diagramas, planos o artefactos que terminan convirtiéndose en un lenguaje natural de la tecnología en cuestión
    </p>
    <br>
    <p>
        En este componente se presentan los artefactos, diagramas y nomenclaturas con los que se describen los algoritmos.
    </p>
    <br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/s1f1AcpHL-g?si=GMfIL4zYO8nH-7Dz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
@endsection

@section('sidebar')
<h1 class="h1-sidebar">En este articulo</h1>
<a href="#Introducción">Introducción</a><br><br>
@endsection
