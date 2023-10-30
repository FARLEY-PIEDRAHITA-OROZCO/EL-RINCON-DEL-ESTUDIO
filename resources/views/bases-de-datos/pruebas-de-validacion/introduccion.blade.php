@extends('layouts.articulos')
@section('title', 'Pruebas de validación de bases de datos MySQL')
@section('content')

        <article>
            <h1 id="introduccion">Pruebas de validación de bases de datos MySQL</h1>
            <p class="metadata">Publicado el 29 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <p>
                    Las pruebas al modelo de base de datos diseñada y construida son fundamentales para la validación de la integridad de los datos, este tipo de pruebas permitirá validar todas sus restricciones y correcta funcionalidad.
                </p>
                <img style="width: 600px" src="/images/pruebas-de-validacion/img1.svg" alt="">
                <p>
                    Una vez hecho el diseño y construcción de las bases de datos relacionales, el siguiente paso es probar el modelo, validar si está ajustado a los requerimientos y si este es funcional; en este módulo se aprenderá cuáles, qué tipo y cómo se pueden ejecutar las pruebas para validar el diseño y la integridad de los datos modelados y construidos en una base de datos relacional MySQL.
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
