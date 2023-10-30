@extends('layouts.articulos')
@section('title', 'Estudio de caso Import Tech S.A.S.')
@section('content')

        <article>
            <h1 id="introduccion">Estudio de caso Import Tech S.A.S.</h1>
            <p class="metadata">Publicado el 28 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <p>
                    Para el desarrollo práctico de trabajo con bases de datos relacionales MySQL nos apalancaremos en la utilización de un caso de estudio el cual se desarrollará y permitirá ir avanzando en la apropiación y uso del SGBB de MySQL.
                </p>
                <img style="width: 600px" src="/images/caso-de-estudio/img1.svg" alt="">
                <p>
                    Para la apropiación más acertada de los conceptos de diseño, y construcción y gestión de las bases de datos relacionales en MySQL, en este módulo se construirán los modelos conceptuales, físico y entidad relación, además, de la generación de un script para construir la base de datos con un caso de estudio práctico que permita llevar la conceptualización y principios de las bases de datos a un escenario real.
                </p>
            </section>
        </article>
@endsection

@section('aside')
        @include('partials-bases-de-datos.estudio-de-caso.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">Estudio de caso Import Tech S.A.S.</a></li>
        </ul>

@endsection
