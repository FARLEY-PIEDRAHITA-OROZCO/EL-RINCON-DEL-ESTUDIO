@extends('layouts.articulos')
@section('title', 'MySQL Workbench')
@section('content')

        <article>
            <h1 id="introduccion">MySQL Workbench como herramienta visual de diseño y gestión de bases de datos MySQL</h1>
            <p class="metadata">Publicado el 27 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <p>
                    En la actualidad, un gran porcentaje de software y aplicativos que se encuentran en el mercado, hacen uso de bases de datos con MySQL. Además, es de vital importancia contar con una gestión eficiente de la gran cantidad de información que se genera diariamente a través de múltiples dispositivos, pues las bases de datos bien gestionadas marcan una ventaja competitiva entre las diferentes empresas.
                </p>
                <p>
                    Por esto es importante la utilización de herramientas visuales que potencien el trabajo con las bases de datos relacionales MySQL; para este ejercicio se utilizará Workbench debido a su facilidad de uso, alta demanda y empleo en la gestión y administración de las bases de datos.
                </p>
                <iframe width="600" height="315" src="https://www.youtube.com/embed/m-h80fyUIiA?si=uqy5iVAxEZvW9CBU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </section>
        </article>
@endsection

@section('aside')
        @include('partials-bases-de-datos.my-sql-workbench.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">MySQL Workbench como herramienta visual de diseño y gestión de bases de datos MySQL</a></li>
        </ul>

@endsection
