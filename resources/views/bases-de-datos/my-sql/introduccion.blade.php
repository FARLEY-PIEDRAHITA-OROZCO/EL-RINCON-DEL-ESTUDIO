@extends('layouts.articulos')
@section('title', 'El lenguaje SQL')
@section('content')

        <article>
            <h1 id="introduccion">El lenguaje SQL</h1>
            <p class="metadata">Publicado el 29 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <p>
                    Es a través del lenguaje estructurado de consulta SQL que se puede acceder a la creación, gestión y administración de las bases de datos, a partir del uso de sentencias y comandos que nos facilitan la interacción con las bases de datos relacionales.
                </p>
                <iframe width="600" height="315" src="https://www.youtube.com/embed/Jzoj-o-R3x4?si=mzAVxGSInnqsOv78" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </section>
        </article>
@endsection

@section('aside')
        @include('partials-bases-de-datos.my-sql.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">El lenguaje SQL</a></li>
        </ul>

@endsection
