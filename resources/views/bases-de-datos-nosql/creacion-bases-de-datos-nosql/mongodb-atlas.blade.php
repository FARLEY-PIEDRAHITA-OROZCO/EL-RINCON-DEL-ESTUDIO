@extends('layouts.articulos')
@section('title', 'MongoDB Atlas')
@section('content')

        <article>
            <h1 id="introduccion">MongoDB Atlas</h1>
            <p class="metadata">Publicado el 15 de Noviembre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <img style="width: 600px" src="/images/creacion-de-bases-de-datos-nosql/3.svg" alt="">
                <p>
                    Es una base de datos proporcionada por MongoDb, ofrece una gran escalabilidad y flexibilidad, así como un modelo de consultas e indexación avanzado. MongoDB. (2021). Es un escalamiento de otra base de datos, pero esta vez hacia la nube. Realiza de manera automatizada la creación de servidores, servicios, modificaciones y configuraciones.
                </p>
                <h2 id="Definición, servicios, costos">Definición, servicios, costos</h2>
                <p>
                    Los servicios de MongoDB consisten en alojar en la nube bases de datos con los servidores de AWS, Azure y Google Cloud. De igual forma compone su estructura con autorreparación formados por instancias de bases de datos distribuidas geográficamente minimizando los fallos. Mejora la confiabilidad de sus bases de datos con copias de seguridad continua y recuperaciones efectivas.
                </p>
                <p>
                    Las siguientes son algunas de sus características:
                </p>
                <p>
                    <strong>Seguridad:</strong>
                </p>
                <p>
                    MongoDB Atlas, posee un control de acceso a la nube, listados de direcciones IP, emparejamiento de las nubes virtuales, autenticaciones, cifrados y administraciones en roles de usuarios.
                </p>
                <p>
                    <strong>Infraestructura:</strong>
                </p>
                <p>
                    Automatiza el aprovisionamiento, configura e implementa la infraestructura para que los equipos obtengan recursos de las bases de datos cuando se requieran.
                </p>
                <p>
                    <strong>Escalamiento:</strong>
                </p>
                <p>
                    Permite modificar su clúster para escalar la base de datos o realizar actualizaciones.
                </p>
                <p>
                    Del mismo modo, en los proveedores de nubes y región, se puede escoger lo que se necesita de acuerdo a los requerimientos de cada cliente o proyecto, existiendo versiones gratuitas pero limitadas y las de pago.
                </p>
                <h2 id="Creación de una base de datos">Creación de una base de datos</h2>
                <ol>
                    <li>Ingreso a la plataforma</li>
                    <li>Registro en plataforma</li>
                    <li>Creación de base de datos</li>
                    <li>Operaciones CRUD</li>
                </ol>
                <iframe width="600" height="315" src="https://www.youtube.com/embed/u1IKJMISMgs?si=q3sU9fmvP2WJL05g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </section>
        </article>
@endsection

@section('aside')
        @include('partials-bases-de-datos-nosql.creacion-de-bases-de-datos-nosql.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">MongoDB Atlas</a></li>
            <li><a href="#Definición, servicios, costos">Definición, servicios, costos</a></li>
            <li><a href="#Creación de una base de datos">Creación de una base de datos</a></li>
        </ul>

@endsection
