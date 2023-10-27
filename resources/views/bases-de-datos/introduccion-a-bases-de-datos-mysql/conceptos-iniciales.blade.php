@extends('layouts.articulos')
@section('title', 'Introducción a bases de datos MySQL')
@section('content')

        <article>
            <h1 id="introduccion">Conceptos iniciales</h1>
            <p class="metadata">Publicado el 26 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <br>
                <img style="width: 600px" src="/images/introduccion-a-bases-de-datos/img2.svg" alt="">
                <h2 id="Datos e información">Datos e información</h2>
                <p>
                    En el desarrollo de los sistemas de información es común encontrar constantemente estos dos términos y se tiende a comparar o entender como si fueran lo mismo, pero son dos términos que, aunque están relacionados, son diferentes.
                </p>
                <p>
                    <strong>Dato:</strong> los datos son la mínima unidad semántica y se corresponden con elementos primarios de información que por sí solos son irrelevantes como apoyo a la toma de decisiones. También se pueden ver como un conjunto discreto de valores que no dicen nada sobre el porqué de las cosas y no son orientativos para la acción.
                </p>
                <p>
                    Un número telefónico o un nombre de una persona, por ejemplo, son datos que, sin un propósito, una utilidad o un contexto no sirven como base para apoyar la toma de una decisión. Los datos pueden ser una colección de hechos almacenados en algún lugar físico como un papel, un dispositivo electrónico (CD, DVD, disco duro...), o la mente de una persona. En este sentido, las tecnologías de la información han aportado mucho a recopilación de datos.
                </p>
                <p>
                    <strong>Información: </strong>la información se puede definir como un conjunto de datos procesados que tienen un significado (relevancia, propósito y contexto) y que, por lo tanto, son de utilidad para quién debe tomar decisiones al disminuir su incertidumbre. Los datos se pueden transforman en información añadiéndoles valor.
                </p>
                <h2 id="El almacenamiento de los datos">El almacenamiento de los datos</h2>
                <p>
                    A lo largo de la historia, los seres humanos siempre han desarrollado estrategias, técnicas o herramientas que les permitan conservar y almacenar sus datos, es así como se ha utilizado la mente y la escritura en piedra, pieles, papel y en otros medios de comunicación disponibles.
                </p>
                <h2 id="Sistemas de bases de datos">Sistemas de bases de datos</h2>
                <p>
                    Se entienden como bases de datos una colección de datos estructurados, organizados, sin duplicidad y dispuestos con el objetivo de proporcionar información a los usuarios de manera centralizada para desarrollar sobre ellas transacciones.
                </p>
                <p>
                    Otro concepto importante es el de bases de datos relacionales lo cual significa que el conjunto de datos es almacenado de manera estructurada y organizada en tablas y estas se relacionan de alguna manera.
                </p>
                <p>
                    Las bases de datos relacionales se basan en el modelo relacional, una forma intuitiva y directa de representar datos en tablas. En una base de datos relacional, cada fila de la tabla es un registro con un ID único llamado clave. Las columnas de la tabla contienen atributos de los datos, y cada registro, generalmente, tiene un valor para cada atributo, lo que facilita el establecimiento de las relaciones entre los puntos de datos.
                </p>
            </section>
        </article>
@endsection

@section('aside')
        @include('partials-bases-de-datos.introduccion-a-bases-de-datos-mysql.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#Datos e información">Datos e información</a></li>
            <li><a href="#El almacenamiento de los datos">El almacenamiento de los datos</a></li>
            <li><a href="#Sistemas de bases de datos">Sistemas de bases de datos</a></li>
        </ul>

@endsection
