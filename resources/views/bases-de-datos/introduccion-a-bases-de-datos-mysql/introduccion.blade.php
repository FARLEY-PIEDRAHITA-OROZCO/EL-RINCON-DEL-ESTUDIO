@extends('layouts.articulos')
@section('title', 'Introducción a bases de datos MySQL')
@section('content')

        <article>
            <h1 id="introduccion">Introducción a los sistemas de gestión de bases de datos MySQL</h1>
            <p class="metadata">Publicado el 26 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <p>
                    En la actualidad, un gran porcentaje de software y aplicativos que se encuentran en el mercado hacen uso de bases de datos con MySQL. Además, es de vital importancia contar con una gestión eficiente de la gran cantidad de información que se genera diariamente a través de múltiples dispositivos. Las bases de datos bien gestionadas marcan una ventaja competitiva entre las diferentes empresas.
                </p>
                <p>
                    En consecuencia, los diferentes sectores productivos de la economía colombiana se encuentran en la búsqueda de personal con las mejores capacidades laborales y profesionales que cuenten con el dominio en la administración y manipulación de bases de datos, para así contribuir al desarrollo económico, social y tecnológico de su entorno y del país.
                </p>
                <img style="width: 600px" src="/images/introduccion-a-bases-de-datos/img1.svg" alt="">
                <p>
                    En este módulo se estudiarán los principios y conocimientos generales de las bases de datos relacionales, enfatizando en el motor de MySQL como la herramienta seleccionada para el desarrollo del programa de formación, en este módulo se incluye el estudio de los diferentes modelos para el diseño de las bases de datos, así como las herramientas utilizadas para este propósito, y finaliza con la introducción y el estudio inicial del lenguaje estructurado de consulta SQL.
                </p>
                <div class="info-box">
                    <a href="https://drive.google.com/file/d/1_8RTGFTkaQyHPZ2q9B088CYYZBVCGNPV/view?usp=sharing" target="_blank">Guía de aprendizaje</a>
                </div>


            </section>
        </article>

        <style>
            .info-box {
                border: 2px solid #ccc;
                padding: 20px;
                border-radius: 10px;
                width: 550px;
                text-align: center;
                margin: 20px auto;
            }

            .info-box a {
                text-decoration: none;
                background-color: #0074e4;
                color: #fff;
                padding: 10px 20px;
                border-radius: 5px;
            }

            .info-box a:hover {
                background-color: #0058a3;
            }
        </style>

@endsection

@section('aside')
        @include('partials-bases-de-datos.introduccion-a-bases-de-datos-mysql.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">Introducción a los sistemas de gestión de bases de datos MySQL</a></li>
        </ul>

@endsection
