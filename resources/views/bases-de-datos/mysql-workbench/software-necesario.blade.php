@extends('../../layouts.sistemas')
@section('../../title', 'Caracterización de procesos')

@section('navbar')
    @include('partials.navbar-introduccion-mysql-workbench')
@endsection

@section('content')
    <h1 class="h1-content" id="2. Software necesario para el diseño y gestión de bases de datos">2. Software necesario para el diseño y gestión de bases de datos</h1>
    <br>
    <img class="img-2 img-3" src="/images/mysql-workbench/img2.svg" alt="">
    <br>
    <h2 class="h2-content" id="2.1 MySQL Workbench">2.1 MySQL Workbench</h2>
    <br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/XHS0TSshkjY?si=VPYUUJukH_77MtuR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <br><br>
    <p>
        Para visualizar esta herramienta y saber de su funcionamiento revise el siguiente video:
    </p>
    <br>
    <p>
        <a href="https://youtu.be/X_umYKqKaF0">MySql Workbench tutorial</a>
    </p>
    <br>
    <h2 class="h2-content" id="2.2 Características y funcionalidades">2.2 Características y funcionalidades</h2>
    <br>
    <p>
        Algunas de las características más importantes de Workbench son las siguientes:
    </p>
    <br>
    <h2 class="h2-content">Diseño</h2>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/mysql-workbench/img3.svg" alt="">
        <p style="text-align: start" class="parrafo">
            MySQL Workbench permite a un DBA, desarrollador o arquitecto de datos diseñar, modelar, generar y administrar bases de datos visualmente. Incluye todo lo que un modelador de datos necesita para crear modelos ER complejos, ingeniería directa e inversa, y también ofrece características clave para realizar tareas difíciles de gestión de cambios y documentación que normalmente requieren mucho tiempo y esfuerzo.
        </p>
    </div>
    <br>
    <img class="img-4" src="/images/mysql-workbench/img4.png" alt="">
    <br>
    <p>
        En la figura anterior se muestra cómo, desde Workbench, se pueden crear nuevos modelos, lo que equivale a crear una nueva base de datos e ir agregando los objetos requeridos como tablas, atributos, tipos de datos, relaciones, entre otros.
    </p>
    <br>
    <img class="img-4" src="/images/mysql-workbench/img5.png" alt="">
    <p style="text-align: center">
        <strong>Ejemplo de modelado de una nueva tabla llamada empleado y los atributos con sus respectivos tipos de datos y propiedades.</strong>
    </p>
    <br>
    <h2 class="h2-content">Desarrollar</h2>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/mysql-workbench/img6.svg" alt="">
        <p style="text-align: start" class="parrafo">
            MySQL Workbench permite a un DBA, desarrollador o arquitecto de datos diseñar, modelar, generar y administrar bases de datos visualmente. Incluye todo lo que un modelador de datos necesita para crear modelos ER complejos, ingeniería directa e inversa, y también ofrece características clave para realizar tareas difíciles de gestión de cambios y documentación que normalmente requieren mucho tiempo y esfuerzo.
        </p>
    </div>
    <br>
    <p>
        MySQL Workbench ofrece herramientas visuales para crear, ejecutar y optimizar consultas SQL. El editor de SQL proporciona resaltado de sintaxis de color, autocompletado, reutilización de fragmentos de código SQL e historial de ejecución de SQL. El panel de conexiones de base de datos permite a los desarrolladores administrar fácilmente las conexiones de base de datos estándar, incluido MySQL Fabric. El explorador de objetos proporciona acceso instantáneo al esquema y los objetos de la base de datos.
    </p>
    <br>
    <img class="img-4" src="/images/mysql-workbench/img7.png" alt="">
    <br>
    <h2 class="h2-content">Administrar</h2>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/mysql-workbench/img12.svg" alt="">
        <p style="text-align: start" class="parrafo">
            MySQL Workbench proporciona una consola visual para administrar fácilmente los entornos MySQL y obtener una mejor visibilidad de las bases de datos. Los desarrolladores y administradores de bases de datos pueden utilizar las herramientas visuales para configurar servidores, administrar usuarios, realizar copias de seguridad y recuperación, inspeccionar datos de auditoría y ver el estado de la base de datos.
        </p>
    </div>
    <br>
    <img class="img-4" src="/images/mysql-workbench/img8.png" alt="">
    <br><br>
    <h2 class="h2-content">Panel de rendimiento visual</h2>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/mysql-workbench/img9.svg" alt="">
        <p style="text-align: start" class="parrafo">
            MySQL Workbench proporciona un conjunto de herramientas para mejorar el rendimiento de las aplicaciones MySQL. Los administradores de bases de datos pueden ver rápidamente los indicadores clave de rendimiento mediante el panel de rendimiento. Los informes de rendimiento proporcionan una fácil identificación y acceso a puntos de acceso de E / S, declaraciones SQL de alto costo y más. Además, con un (1) clic, los desarrolladores pueden ver dónde optimizar la consulta con el Plan Visual Explain mejorado y fácil de usar.
        </p>
    </div>
    <br>
    <img class="img-4" src="/images/mysql-workbench/img10.png" alt="">
    <br><br>
    <h2 class="h2-content">Migración de base de datos</h2>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/mysql-workbench/img10.svg" alt="">
        <p style="text-align: start" class="parrafo">
            MySQL Workbench ahora proporciona una solución completa y fácil de usar para migrar Microsoft SQL Server, Microsoft Access, Sybase ASE, PostreSQL y otras tablas, objetos y datos RDBMS a MySQL. Los desarrolladores y administradores de bases de datos pueden convertir rápida y fácilmente las aplicaciones existentes para que se ejecuten en MySQL tanto en Windows como en otras plataformas. La migración también admite las versiones anteriores de MySQL a las últimas versiones.
        </p>
    </div>
    <br>
    <img class="img-4" src="/images/mysql-workbench/img11.png" alt="">


    <style>

        .imagen{
            width: 150px;
            height: auto;
            margin-right: 10px;
            float: left;

        }

        .div-1{
            width: 100%;
            height: auto;
            flex-wrap: wrap;
        }

        ul.dentro {
            list-style-position:inside;
            height: auto;
            width: auto;
        }

        ul.fuera {list-style-position:outside;}

        .lista{
            text-align: start
        }

    </style>
@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#2. Software necesario para el diseño y gestión de bases de datos">2. Software necesario para el diseño y gestión de bases de datos</a><br><br>
    <a href="#2.1 MySQL Workbench">2.1 MySQL Workbench</a><br><br>
@endsection
