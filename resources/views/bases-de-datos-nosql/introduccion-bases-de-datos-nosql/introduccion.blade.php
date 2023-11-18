@extends('layouts.articulos')
@section('title', 'Introducción')
@section('content')

        <article>
            <h1 id="introduccion">Bases de datos NoSQL</h1>
            <p class="metadata">Publicado el 13 de Noviembre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img1.png" alt="">
                <p>
                    En este componente se abordarán elementos claves del Big Data, administración masiva de datos, consulta de datos de las organizaciones y tipos de respuesta más cortos. El aprendiz conocerá cómo se plantean nuevas técnicas y tecnologías para atender esas nuevas necesidades: las Bases de datos NoSQL, orientadas a resolver problemas de escalabilidad y rendimiento, mediante nuevos entornos de manejo de datos.
                </p>
                <p>
                    El almacenamiento de información es importante en las empresas ya integradas en la era digital, debido a que se dispone de una cantidad significativa de datos. Los especialistas en análisis de datos elaboran estrategias que pueden ayudar a identificar mejor las necesidades de clientes y prever riesgos o el comportamiento del mercado. Es por esto que las empresas saben de la importancia de administrar tanta información de sus clientes y del mercado. Por tanto, aparecen nuevas necesidades para las cuales el Big Data, que hace referencia a la administración de enormes volúmenes de datos, enfoca sus esfuerzos en procesar información con características de gran volumen, dejando de lado otros aspectos de los datos que, en el caso de las bases de datos tradicionales, se concentran más en la integridad o la no repetición de los datos.
                </p>
                <p>
                    Para la elaboración de este componente, se abordaron varios autores conocidos en bases de datos NoSQL, de quienes se han citado y referenciado conceptos y ejemplos para los fines educativos de esta materia, en el entendido que el conocimiento es social y, por lo tanto, es para usarlo por quienes necesitan adquirirlo. Se espera que este documento sea útil para todos, aprendices y lectores en general, que estén interesados en acercarse a asuntos básicos de la programación de aplicaciones y servicios para la nube.
                </p>
                <div class="info-box">
                    <a id="Guía de aprendizaje" href="https://drive.google.com/file/d/1NdzmxqeMgs9tfljMb9d56mz5qAPhEvv5/view?usp=drive_link" target="_blank">Guía de aprendizaje</a>
                </div>
            </section>

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

        </article>
@endsection

@section('aside')
        @include('partials-bases-de-datos-nosql.introduccion-bases-de-datos-nosql.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">Bases de datos NoSQL</a></li>
            <li><a href="#Guía de aprendizaje">Guía de aprendizaje</a></li>
        </ul>

@endsection
