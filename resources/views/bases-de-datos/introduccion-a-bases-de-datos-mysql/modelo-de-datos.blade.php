@extends('layouts.articulos')
@section('title', 'Introducción a bases de datos MySQL')
@section('content')

        <article>
            <h1 id="Modelos de datos">Modelos de datos</h1>
            <p class="metadata">Publicado el 26 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <br>
                <img style="width: 600px" src="/images/introduccion-a-bases-de-datos/img3.svg" alt="">
                <p>
                    Un modelo de datos es un conjunto de herramientas conceptuales para la descripción de los datos y las relaciones entre ellos, su semántica y las restricciones de consistencia; está compuesto por un conjunto de conceptos, reglas y convenciones que permiten describir los datos.
                </p>
                <p>
                    Por la orientación del presente programa de formación, se enfoca el estudio hacia el modelo relacional pero se recomienda la lectura de otros modelos como:
                </p>
                <ul>
                    <li>Modelo jerárquico</li>
                    <li>Modelo de red</li>
                    <li>Modelo orientado a objetos</li>
                    <li>Modelo orientado a documentos</li>
                </ul>
                <p>
                    Este modelo basado en tablas, gira en torno al concepto de relación, un término bien definido en matemáticas y que aquí se utiliza como sinónimo de tabla. Para formular las relaciones se utiliza álgebra relacional, con cuya ayuda puede obtenerse la información de estas relaciones; este es el principio que fundamenta el lenguaje SQL.
                </p>
                <table border="1">
                    <tr>
                        <td>idCarro</td>
                        <td>Marca</td>
                        <td>Número_placa</td>
                        <td>Número_chasis</td>
                        <td>idDueño</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mazda</td>
                        <td>GPQ 230</td>
                        <td>GHFD234567G</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Chevrolet</td>
                        <td>GPL 432</td>
                        <td>HYJH12344H</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Renault</td>
                        <td>GNU 654</td>
                        <td>G234578YTR2</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Daewoo</td>
                        <td>LTG 345</td>
                        <td>K28698YTL2	</td>
                        <td>4</td>
                    </tr>
                </table>
                <p style="text-align: center">Tabla. Modelo basado en tablas</p>
                <p>
                    Este modelo es solamente un método que se aprovecha para diseñar los esquemas que, posteriormente, se deben implementar en la base de datos. Este modelo se representa a través de diagramas y está formado por varios elementos que se analizarán a continuación.
                </p>
                <p>
                    <strong>Entidad</strong>
                </p>
                <p>
                    Cada entidad representa cosas y objetos ya sean reales o abstractos y que se diferencian entre sí. En un diagrama las entidades se representan con rectángulos.
                </p>
                <p>
                    <strong>Atributos</strong>
                </p>
                <p>
                    Definen las características de las entidades, son las propiedades de cada una. Cada entidad contiene distintos atributos que dan información sobre esta entidad, estos atributos pueden ser de distintos tipos (numéricos, texto, fecha...) en cada una de las columnas de una tabla. En un diagrama los atributos se representan con círculos que descienden de la entidad.
                </p>
                <img style="width: 600px" src="/images/introduccion-a-bases-de-datos/img10.svg" alt="">
                <p style="text-align: center">Atributos</p>
                <p>
                    <strong>Tupla</strong>
                </p>
                <p>
                    Son elementos formados por una fila de una tabla. Cada fila de la entidad estaría compuesta por los atributos de la entidad correspondiente.
                </p>
                <p>
                    <strong>Relación</strong>
                </p>
                <p>
                    Con una relación se establece qué tipo de dependencia se debe dar entre entidades, es decir, permite decir que ciertas entidades comparten ciertos atributos de manera necesaria.
                </p>
                <img style="width: 600px" src="/images/introduccion-a-bases-de-datos/img11.svg" alt="">
                <p style="text-align: center">Relación</p>
                <h2 id="Tipos de relación">Tipos de relación</h2>
                <p>
                    <strong>Según cardinalidad</strong>. La cardinalidad se representa en un diagrama ER como una etiqueta que se ubica en ambos extremos de la línea de relación de las entidades y que puede contener diversos valores entre los que destacan comúnmente el 1 y el *, obteniendo los siguientes tipos:
                </p>
                <img style="width: 600px" src="/images/introduccion-a-bases-de-datos/img12.svg" alt="">
                <p style="text-align: center">Relación 1 a 1</p>
                <p>
                    <strong>Relación 1 a 1</strong>. La relación uno a uno define que un único registro de la tabla puede estar relacionado con un único registro de la tabla relacionada.
                </p>
                <p>
                    Para el diseño de las bases de datos se pueden usar tres modelos que son los más populares y utilizados los cuales permitirán entender los requerimientos y trasladarlos a un modelo relacional que facilite, posteriormente, el almacenar los datos requeridos.
                </p>
                <div class="info-box">
                    <p>Complementar la información visualizando el siguiente video:</p>
                    <a href="https://www.youtube.com/watch?v=-tuDXYWn3fQ" target="_blank">Video. Diseño de bases de datos relacionales.</a>
                </div>
                <h2 id=" Modelos de datos conceptual">Modelos de datos conceptual</h2>
                <p>
                    Representa el modelo de datos de forma independiente del DBMS (sistema de gestión de bases de datos) que se utilizará, usa una representación gráfica para representar el diseño donde los rectángulos representan entidades, los rombos relaciones y los óvalos propiedades o atributos.
                </p>
                <img style="width: 600px" src="/images/introduccion-a-bases-de-datos/img13.svg" alt="">
                <p style="text-align: center">Modelo de datos de forma independiente</p>
                <h2 id=" Modelo de datos lógico"> Modelo de datos lógico</h2>
                <p>
                    Este modelo no es específico de un motor o base de datos que describe aspectos relacionados con las necesidades de una organización para recopilar datos y las relaciones, entre estos aspectos; un modelo lógico contiene representaciones de entidades, atributos y relaciones.
                </p>
                <img style="width: 600px" src="/images/introduccion-a-bases-de-datos/img14.svg" alt="">
                <p style="text-align: center">Modelo de datos lógico</p>
                <h2 id="">Modelo de datos físico</h2>
                <p>
                    El paso de un modelo lógico a uno físico requiere de un profundo entendimiento del manejador de bases de datos que se desea emplear, incluyendo características como:
                </p>
                <ol>
                    <li>Conocimiento a fondo de los tipos de objetos (elementos) soportados.</li>
                    <li>Detalles acerca del indexamiento, integridad referencial, restricciones, tipos de datos, etc.</li>
                    <li>Detalles y variaciones de las versiones.</li>
                    <li>Parámetros de configuración.</li>
                    <li>Data Definition Language (DDL)</li>
                </ol>
                <img style="width: 600px" src="/images/introduccion-a-bases-de-datos/img15.svg" alt="">
                <p style="text-align: center">Modelo de datos físico</p>
            </section>
        </article>

        <style>
            .info-box {
                border: 2px solid #ccc;
                padding: 20px;
                border-radius: 10px;
                width: 600px;
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
        @include('partials-bases-de-datos.introduccion-a-bases-de-datos-mysql.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#Modelos de datos">Modelos de datos</a></li>
            <li><a href="#Tipos de relación">Tipos de relación</a></li>
            <li><a href="# Modelos de datos conceptual">Modelos de datos conceptual</a></li>
            <li><a href="# Modelo de datos lógico">Modelo de datos lógico</a></li>
        </ul>

@endsection
