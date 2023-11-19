@extends('layouts.articulos')
@section('title', 'Bases de datos en la nube')
@section('content')

        <article>
            <h1 id="introduccion">Bases de datos en la nube</h1>
            <p class="metadata">Publicado el 15 de Noviembre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <img style="width: 600px" src="/images/creacion-de-bases-de-datos-nosql/2.svg" alt="">
                <p>
                    "Una base de datos en la nube es una colección de contenido informativo, ya sea estructurado o no estructurado, que reside en una plataforma de infraestructura de computación en la nube privada, pública o híbrida." Sheldon, R., & Shore, J. (2021)
                </p>
                <p>
                    De igual forma, hacen referencia a una nueva modalidad de almacenamiento, en Cloud, no es en un equipo o sistema local, se ejecuta desde un servidor en la nube.
                </p>
                <p>
                    A continuación se describen sus principales ventajas y desventajas:
                </p>

                <p>
                    <strong>Tabla 1 Ventajas y desventajas bases de datos NoSQL</strong>
                </p>

                <table border="1">
                    <tr>
                        <th>Ventajas</th>
                        <th>Desventajas</th>
                    </tr>
                    <tr>
                        <td>Portabilidad: puede ser usado desde cualquier dispositivo tecnológico.</td>
                        <td>Atomicidad: no incorporan atomicidad en la información, presenta información inconsistente entre nodos.</td>
                    </tr>
                    <tr>
                        <td>Versatilidad: ofrece crecimientos sobre su forma de almacenar la información, se manejan campos o tablas, “colección”, dado que intercambia documentos basado en JSON, solo se agregan notas sobre el documento y se sigue operando.</td>
                        <td>No documentación: suele ocurrir que el software, posee operaciones no documentadas, por lo cual podrían ser muy limitadas, por falta de información sobre sus herramientas y características.</td>
                    </tr>
                    <tr>
                        <td>Optimización: poseen un algoritmo interno que reescribe las consultas de los usuarios, para no sobrecargar los servidores y optimizar las operaciones.</td>
                        <td>Menos madurez: las bases de datos NoSQL, tienen muchas características importantes que aún no se han implementado.</td>
                    </tr>
                    <tr>
                        <td>Crecimiento horizontal: soportan estructuras distribuidas, si el desempeño de los servidores baja, se instalan nuevos nodos para nivelar la carga de trabajo.</td>
                        <td>Poca estandarización: no se definen exactamente los motores que la utilizan, los lenguajes hacen variar el tipo de base de datos a utilizar.</td>
                    </tr>
                    <tr>
                        <td>Aplicaciones de Big Data: se pueden manejar grandes volúmenes de datos.</td>
                        <td>No interfaz: la mayoría de las bases de datos NoSQL, no tienen interfaz gráfica, por lo cual se requiere un buen conocimiento para poder manipular algunas.</td>
                    </tr>
                    <tr>
                        <td>Administración: se utiliza menos administración práctica, se distribuyen datos y se reparan automáticamente, menos requisitos de ajuste y administración.</td>
                        <td></td>
                    </tr>
                </table>
                <br>
            </section>
        </article>
@endsection

@section('aside')
        @include('partials-bases-de-datos-nosql.creacion-de-bases-de-datos-nosql.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">Bases de datos NoSQL</a></li>
            <li><a href="#Guía de aprendizaje">Guía de aprendizaje</a></li>
        </ul>

@endsection
