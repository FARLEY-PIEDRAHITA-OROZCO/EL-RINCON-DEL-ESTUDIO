@extends('../../layouts.sistemas')
@section('../../title', 'Introducción a la algoritmia')

@section('navbar')
    @include('partials.navbar-introduccion-a-la-algoritmia')
@endsection

@section('content')
    <h1 class="h1-content" id="introduccion">Introducción</h1>
    <br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/7bu6jnb5q8s?si=FW3bby93RJL_vZsg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <br><br>
    <p>
        <strong>En la vida cotidiana se deben imaginar, diseñar y planear soluciones a problemas corrientes del día a día</strong>, por ende, muchas veces la estrategia “divide y vencerás” es empleada para afrontar la solución a estos problemas, la cual consiste en tomar un problema grande y segmentarlo en pequeños subproblemas (o pequeñas metas) que son más fácil de abordar, y la unión logra la solución a lo inicialmente planteado.
    </p>
    <br>
    <p>
        Desde un punto de vista computacional esta estrategia es la más empleada y, los grandes sistemas informáticos son la unión de un conjunto de instrucciones computacionales que resuelven problemas puntuales.
    </p>
    <br>
    <p>
        Aquí se propone facilitar técnicas para el análisis de problemas, usando algoritmos que a futuro pueden llegar a ser parte constitutiva de un sistema teleinformático.
    </p>
@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#introduccion">Introducción</a>
@endsection
