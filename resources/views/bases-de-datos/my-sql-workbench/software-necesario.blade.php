@extends('layouts.articulos')
@section('title', 'MySQL Workbench')
@section('content')

        <article>
            <h1 id="introduccion">Software necesario para el diseño y gestión de bases de datos</h1>
            <p class="metadata">Publicado el 27 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <br>
                <img style="width: 600px" src="/images/mysql-workbench/img2.svg" alt="">
                <h2 id="MySQL Workbench">MySQL Workbench</h2>
                <iframe width="600" height="315" src="https://www.youtube.com/embed/XHS0TSshkjY?si=kdt9imn14abdS0xq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="info-box">
                    <p>Para visualizar esta herramienta y saber de su funcionamiento revise el siguiente video:</p>
                    <a href="https://youtu.be/X_umYKqKaF0">MySQL Workbench tutorial</a>
                </div>
                <h2 id="Características y funcionalidades">Características y funcionalidades</h2>
                <p>
                    Algunas de las características más importantes de Workbench son las siguientes:
                </p>

                <div class="titulo" onclick="toggleParrafo(1)">
                    <span>Diseño</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">MySQL Workbench permite a un DBA, desarrollador o arquitecto de datos diseñar, modelar, generar y administrar bases de datos visualmente. Incluye todo lo que un modelador de datos necesita para crear modelos ER complejos, ingeniería directa e inversa, y también ofrece características clave para realizar tareas difíciles de gestión de cambios y documentación que normalmente requieren mucho tiempo y esfuerzo. <br><br>
                <img style="width: 600px" src="/images/mysql-workbench/img4.png" alt=""><br><br>
                En la figura anterior se muestra cómo, desde Workbench, se pueden crear nuevos modelos, lo que equivale a crear una nueva base de datos e ir agregando los objetos requeridos como tablas, atributos, tipos de datos, relaciones, entre otros. <br><br>
                <img style="width: 600px" src="/images/mysql-workbench/img5.png" alt=""><br><br>
                Ejemplo de modelado de una nueva tabla llamada empleado y los atributos con sus respectivos tipos de datos y propiedades.
                </p>


                <div class="titulo" onclick="toggleParrafo(2)">
                    <span>Desarrollar</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">MySQL Workbench ofrece herramientas visuales para crear, ejecutar y optimizar consultas SQL. El editor de SQL proporciona resaltado de sintaxis de color, autocompletado, reutilización de fragmentos de código SQL e historial de ejecución de SQL. El panel de conexiones de base de datos permite a los desarrolladores administrar fácilmente las conexiones de base de datos estándar, incluido MySQL Fabric. El explorador de objetos proporciona acceso instantáneo al esquema y los objetos de la base de datos. <br><br>
                <img style="width: 600px" src="/images/mysql-workbench/img7.png" alt=""><br><br>

                </p>

                <div class="titulo" onclick="toggleParrafo(3)">
                    <span>Administrar</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">MySQL Workbench proporciona una consola visual para administrar fácilmente los entornos MySQL y obtener una mejor visibilidad de las bases de datos. Los desarrolladores y administradores de bases de datos pueden utilizar las herramientas visuales para configurar servidores, administrar usuarios, realizar copias de seguridad y recuperación, inspeccionar datos de auditoría y ver el estado de la base de datos. <br><br>
                <img style="width: 600px" src="/images/mysql-workbench/img8.png" alt=""><br><br>

                </p>

                <div class="titulo" onclick="toggleParrafo(4)">
                    <span>Panel de rendimiento visual</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">MySQL Workbench proporciona un conjunto de herramientas para mejorar el rendimiento de las aplicaciones MySQL. Los administradores de bases de datos pueden ver rápidamente los indicadores clave de rendimiento mediante el panel de rendimiento. Los informes de rendimiento proporcionan una fácil identificación y acceso a puntos de acceso de E / S, declaraciones SQL de alto costo y más. Además, con un (1) clic, los desarrolladores pueden ver dónde optimizar la consulta con el Plan Visual Explain mejorado y fácil de usar. <br><br>
                <img style="width: 600px" src="/images/mysql-workbench/img10.png" alt=""><br><br>

                </p>

                <div class="titulo" onclick="toggleParrafo(5)">
                    <span>Migración de base de datos</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">MySQL Workbench ahora proporciona una solución completa y fácil de usar para migrar Microsoft SQL Server, Microsoft Access, Sybase ASE, PostreSQL y otras tablas, objetos y datos RDBMS a MySQL. Los desarrolladores y administradores de bases de datos pueden convertir rápida y fácilmente las aplicaciones existentes para que se ejecuten en MySQL tanto en Windows como en otras plataformas. La migración también admite las versiones anteriores de MySQL a las últimas versiones. <br><br>
                <img style="width: 600px" src="/images/mysql-workbench/img11.png" alt=""><br><br>
                </p>
                
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

            .contenedor {
                display: flex;
                align-items: center;
            }

            .imagen {
                width: 200px; /* Ajusta el ancho de la imagen según tus necesidades */
                margin-right: 20px; /* Espacio entre la imagen y el texto */
            }

           /* Estilo para el botón título */
            .titulo {
                background-color: #343434;
                border: solid 1px #858585;
                color: #fff;
                padding: 10px 20px;
                cursor: pointer;
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 10px;
            }

            /* Estilo para ocultar el párrafo inicialmente */
            .parrafo {
                display: none;
            }

        </style>

        <script>
            function toggleParrafo(num) {
                var parrafo = document.getElementsByClassName("parrafo")[num - 1];
                var icono = document.getElementsByClassName("icono")[num - 1];
                if (parrafo.style.display === "none" || parrafo.style.display === "") {
                    parrafo.style.display = "block";
                    icono.textContent = "-";
                } else {
                    parrafo.style.display = "none";
                    icono.textContent = "+";
                }
            }
        </script>

@endsection

@section('aside')
        @include('partials-bases-de-datos.my-sql-workbench.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#MySQL Workbench">MySQL Workbench</a></li>
            <li><a href="#Características y funcionalidades">Características y funcionalidades</a></li>
        </ul>

@endsection
