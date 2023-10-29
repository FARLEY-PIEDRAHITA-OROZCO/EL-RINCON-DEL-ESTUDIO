@extends('layouts.articulos')
@section('title', 'MySQL Workbench')
@section('content')

        <article>
            <h1 id="introduccion">Descarga e instalación MySQL Community Server</h1>
            <p class="metadata">Publicado el 27 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <img style="width: 600px" src="/images/mysql-workbench/img1.svg" alt="">

                <p>
                    Un requisito indispensable para que puedas realizar trabajos y gestión de bases de datos SQL con MySQL Workbench es tener instalado un servidor de base de datos o en su defecto, tener acceso a un servidor compatible con MySQL o motores similares como MariaDB. Es por eso que para este componente hemos dispuesto las instrucciones y sugerido la herramienta MySQL Community Server que hará las veces de servidor.
                </p>
                <p>
                    A continuación, encontrarás las instrucciones, enlaces de descarga y de creación de perfiles requeridos para hacer uso de este software.
                </p>
                <h2 id="Descarga MySQL Community Server">Descarga MySQL Community Server</h2>
                <iframe width="600" height="315" src="https://www.youtube.com/embed/aAk84iUplHw?si=CLEGVnjtXWunQEtP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                <div class="info-box">
                    <p>Da clic en el siguiente enlace y sigue atentamente los pasos para su instalación.</p>
                    <a href="https://dev.mysql.com/downloads/mysql/" target="_blank">MySQL -The world´s most popular open source database</a>
                    <p>Posiblemente requieras una cuenta ORACLE, en ese caso dirígete al paso 2</p>
                </div>
                <h2 id="Crea una cuenta de acceso ORACLE">Crea una cuenta de acceso ORACLE</h2>
                <div class="info-box">
                    <p>Da click en el siguiente enlace y sigue atentamente las instrucciones.sw</p>
                    <a href="https://profile.oracle.com/myprofile/account/create-account.jspx" target="_blank">Crear cuenta de acceso a ORACLE</a>
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
        @include('partials-bases-de-datos.my-sql-workbench.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">Descarga e instalación MySQL Community Server</a></li>
            <li><a href="#Descarga MySQL Community Server">Descarga MySQL Community Server
            <li><a href="#Crea una cuenta de acceso ORACLE">Crea una cuenta de acceso ORACLE
            </a></li>
        </ul>

@endsection
