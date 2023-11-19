@extends('layouts.articulos')
@section('title', 'Firebase')
@section('content')

        <article>
            <h1 id="introduccion">Firebase</h1>
            <p class="metadata">Publicado el 15 de Noviembre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <img style="width: 600px" src="/images/creacion-de-bases-de-datos-nosql/4.svg" alt="">
                <p>
                    Firebase es una plataforma en la nube de Google para el desarrollo de aplicaciones web y móviles. Fue creada en 2011 pasando a ser parte de Google en 2014, su función esencial es hacer más sencilla la creación de aplicaciones web y móviles en su desarrollo, proporcionando herramientas que facilitan el trabajo para que sea más rápido, pero sin renunciar a la calidad y la seguridad. Digital55 (2020).
                </p>
                <h2 id="">Definición, servicios, costos</h2>
                <p>
                    La principal herramienta y esencial de Firebase son las bases de datos en tiempo real. Estas se alojan en la nube, son de tipo NoSQL en formato JSON como se vio en el componente de base de datos. Este servicio ofrece alojar y disponer de los datos e información de la aplicación en tiempo real, manteniéndolos actualizados, aunque el usuario no realice ninguna acción.
                </p>
                <p>
                    Firebase ayuda a compilar y ejecutar las aplicaciones de manera exitosa, desde los IOS, Android y la Web móvil, y para esto se necesita un servidor backend para almacenar datos y administrarlos.
                </p>
                <p>
                    Igualmente, en las aplicaciones, ayuda a crear nuevos usuarios, mantenerlos comprometidos y escalonamientos desde el registro de usuarios hasta los que consultan la base de datos.
                </p>
                <p>
                    Firebase, maneja los detalles de infraestructura de backend de las aplicaciones, las participaciones de los usuarios y la monetización.
                </p>
                <p>
                    Para la administración y monitoreo de las aplicaciones conectadas a Firebase existe una consola web, para verificar las fallas y configurar arreglos, rastreo de análisis y estadísticas.
                </p>
                <p>
                    También instala conjuntos de código abierto empaquetados para automatizar las tareas de desarrollo. Se integra fácilmente con las herramientas de los equipos, como AdMob, plataforma de marketing de Google, <strong>Play Store, Data Studio, BigQuery, Slack, Jira y PagerDuty</strong>, del mismo modo soporta videojuegos y aplicaciones muy grandes.
                </p>
                <p>
                    En cuanto a sus costos de servicio, posee planes gratuitos y de prepago, los cuales son muy fáciles de adquirir y dan muy buen soporte.
                </p>
                <h2 id="Creación de una base de datos">Creación de una base de datos</h2>
                <img style="width: 600px" src="/images/creacion-de-bases-de-datos-nosql/5.svg" alt="">
                <p>
                    Se invita al aprendiz a ver el siguiente video, en lo que podrá observar y escuchar en detalle el procedimiento para realizar cada una de las siguientes actividades:
                </p>
                <ol>
                    <li>Ingreso a la plataforma</li>
                    <li>Ingreso a la plataforma</li>
                    <li>Creación de base de datos</li>
                    <li>Operaciones CRUD</li>
                </ol>
                <iframe width="600" height="315" src="https://www.youtube.com/embed/iB-xhO8zzjY?si=p_lSNFna9ohmRsAI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <p>
                    <strong>Finalmente y con el fin de sintetizar el contenido de este componente formativo se presenta el siguiente mapa conceptual:</strong>
                </p>
                <p>
                    Implementación de bases de datos NoSQL - creación de bases de datos NoSQL en la nube
                </p>
                <p style="text-align: center">
                    <strong>Ventajas y desventajas de bases de datos NoSQL</strong>
                </p>
                <img style="width: 600px" src="/images/creacion-de-bases-de-datos-nosql/6.svg" alt="">
                <br><br>

                <div class="titulo" onclick="toggleParrafo(1)">
                    <span>Portabilidad:</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Por el cual se adopta y se expide el Reglamento General de Archivos.</p>

                <div class="titulo" onclick="toggleParrafo(2)">
                    <span>Versatibilidad:</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Ofrece crecimientos sobre su forma de almacenar la información, se manejan campos o tablas, “colecciones”.</p>

                <div class="titulo" onclick="toggleParrafo(3)">
                    <span>Optimización:</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Poseen un algoritmo interno que reescriben las consultas de los usuarios, para no sobrecargar los servidores y optimizar las operaciones.</p>

                <div class="titulo" onclick="toggleParrafo(4)">
                    <span>Crecimiento horizontal:</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Soportan estructuras distribuidas, si el desempeño de los servidores baja, se instalan nuevos nodos para nivelar la carga de trabajo.</p>

                <div class="titulo" onclick="toggleParrafo(5)">
                    <span>Atomicidad:</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">No incorporan atomicidad en la información, presenta información inconsistente entre nodos.</p>

                <div class="titulo" onclick="toggleParrafo(6)">
                    <span>No documentación:</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Suele ocurrir que el software, posee operaciones no documentadas, por lo cual podrían ser muy limitadas, por falta de información sobre sus herramientas y características.</p>

                <div class="titulo" onclick="toggleParrafo(7)">
                    <span>Menos madurez:</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Las bases de datos NoSQL, tienen muchas características importantes que aún no se han implementado.</p>

                <div class="titulo" onclick="toggleParrafo(8)">
                    <span>Poca estandarización:</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">No se definen exactamente los motores que la utilizan, los lenguajes hacen variar el tipo de base de datos a utilizar.</p>

                <div class="titulo" onclick="toggleParrafo(9)">
                    <span>No interfaz:</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">La mayoría de las bases de datos NoSQL no tienen interfaz gráfica, por lo cual se requiere un buen conocimiento para poder manipular algunas.</p>
            </section>


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

            <style>
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

        </article>
@endsection

@section('aside')
        @include('partials-bases-de-datos-nosql.creacion-de-bases-de-datos-nosql.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">Firebase</a></li>
            <li><a href="#Definición, servicios, costos">Definición, servicios, costos</a></li>
        </ul>

@endsection
