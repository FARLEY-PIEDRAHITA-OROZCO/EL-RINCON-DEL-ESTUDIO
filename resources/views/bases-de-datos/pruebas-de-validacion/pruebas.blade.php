@extends('layouts.articulos')
@section('title', 'Pruebas de validación de bases de datos MySQL')
@section('content')

        <article>
            <h1 id="introduccion">Pruebas de integridad de datos</h1>
            <p class="metadata">Publicado el 29 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <iframe width="600" height="315" src="https://www.youtube.com/embed/orOFkuL23WU?si=a8jwidsPhYTrsNYQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                <p>
                    Las pruebas de integridad de datos son procedimientos o técnicas utilizadas para verificar la precisión y confiabilidad de los datos almacenados en sistemas de información o bases de datos. Estas pruebas son esenciales para garantizar que los datos no se hayan corrompido, alterado o modificado de manera no autorizada.
                </p>
            </section>
        </article>
@endsection

@section('aside')
        @include('partials-bases-de-datos.pruebas-de-validacion.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">MySQL Workbench como herramienta visual de diseño y gestión de bases de datos MySQL</a></li>
        </ul>

@endsection
