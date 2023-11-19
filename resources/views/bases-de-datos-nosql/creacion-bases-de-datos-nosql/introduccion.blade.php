@extends('layouts.articulos')
@section('title', 'Introducción')
@section('content')

        <article>
            <h1 id="introduccion">Creación de Bases de Datos NoSQL</h1>
            <p class="metadata">Publicado el 15 de Noviembre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <img style="width: 600px" src="/images/creacion-de-bases-de-datos-nosql/img1.png" alt="">
                <p>
                    Las bases de datos no relacionales utilizan una variedad de modelos de datos que pueden accederse y administrarse en la nube. Existen gran variedad de gestores de bases de datos, unos gratuitos limitados y otros con licencias pagadas, depende del uso que se necesite, se deberá seleccionar aquel que se adapte a los requerimientos.
                </p>
                <img style="width: 600px" src="/images/creacion-de-bases-de-datos-nosql/1.svg" alt="">
                <p>
                    Las bases de datos son una herramienta importante para las organizaciones, que permiten guardar, consultar y manipular la información, la cual tiene una tendencia a crecer, por lo cual, las empresas se ven en la necesidad de adquirir buenas herramientas para su almacenamiento y seguridad de la información.
                </p>
                <p>
                    Se invita al aprendiz a ver el video introductorio de este componente formativo:
                </p>
                <iframe width="600" height="315" src="https://www.youtube.com/embed/r97Ko4ZvIDQ?si=tLzFfJMll9apnbq1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </section>
        </article>
@endsection

@section('aside')
        @include('partials-bases-de-datos-nosql.creacion-de-bases-de-datos-nosql.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">Creación de Bases de Datos NoSQL</a></li>
        </ul>

@endsection
