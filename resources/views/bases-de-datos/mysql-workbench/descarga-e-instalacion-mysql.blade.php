@extends('../../layouts.sistemas')
@section('../../title', 'Caracterización de procesos')

@section('navbar')
    @include('partials.navbar-introduccion-mysql-workbench')
@endsection

@section('content')
    <h1 class="h1-content" id="1. Descarga e instalación MySQL Community Server">1. Descarga e instalación MySQL Community Server</h1>
    <br>
    <img class="img-2 img-3" src="/images/mysql-workbench/img1.svg" alt="La definición de dato">
    <p>
        Un requisito indispensable para que puedas realizar trabajos y gestión de bases de datos SQL con MySQL Workbench es tener instalado un servidor de base de datos o en su defecto, tener acceso a un servidor compatible con MySQL o motores similares como MariaDB. Es por eso que para este componente hemos dispuesto las instrucciones y sugerido la herramienta MySQL Community Server que hará las veces de servidor.
    </p>
    <br>
    <p>
        A continuación, encontrarás las instrucciones, enlaces de descarga y de creación de perfiles requeridos para hacer uso de este software.
    </p>
    <br>
    <p>
        <strong>1. Descarga MySQL Community Server</strong>
    </p>
    <br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/aAk84iUplHw?si=ypqIgmcZ9K2LIj2z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <br>
    <br>
    <p>
        Da clic en el siguiente enlace y sigue atentamente los pasos para su instalación.
    </p>
    <br>
    <p>
        <a href="https://dev.mysql.com/downloads/mysql/">MySQL - The world´s most popular open source database</a>
    </p>
    <br>
    <p>
        Posiblemente requieras una cuenta ORACLE, en ese caso dirígete al paso 2
    </p>
    <br>
    <p>
        <strong>2. Crea una cuenta de acceso ORACLE</strong>
    </p>
    <br>
    <p>
        Da click en el siguiente enlace y sigue atentamente las instrucciones.
    </p>
    <br>
    <p>
        <a href="https://profile.oracle.com/myprofile/account/create-account.jspx">Crear una cuenta de acceso a ORACLE</a>
    </p>
@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#1. Descarga e instalación MySQL Community Server">1. Descarga e instalación MySQL Community Server</a>
@endsection
