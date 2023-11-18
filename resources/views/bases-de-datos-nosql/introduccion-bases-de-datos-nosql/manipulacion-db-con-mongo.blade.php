@extends('layouts.articulos')
@section('title', 'Manipulación de datos con MongoDB')
@section('content')

        <article>
            <h1 id="introduccion">Manipulación de datos con MongoDB</h1>
            <p class="metadata">Publicado el 13 de Noviembre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <p>
                    Las bases de datos deben poder manipular la información de varias maneras, ya que los procesos en los sistemas informáticos necesitan de esas operaciones básicas, tales como crear datos, consultarlos, actualizarlos y, en algún punto, eliminarlos. (Create, Read, Update and Delete - CRUD).
                </p>
                <p>
                    Por tanto, queda establecido que almacenarla o contenerla no es su mera y única función básica.
                </p>
                <h2 id=" Crear documentos"> Crear documentos</h2>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/30.png" alt="">
                <p>
                    Es la primera de cuatro funciones elementales a la hora de utilizar bases de datos. Crear documentos permite insertar unidades de información; en el caso de MongoDB, a través de documentos en colecciones de datos.
                </p>

                <div class="titulo" onclick="toggleParrafo(1)">
                    <span>Para crear un documento</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Para poder crear un documento, MongoDB posee el método .insert(), .save() y, de una manera especial, .update() .(Graterol, 2014).
                <br><br>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/31.png" alt="">
                </p>

                <div class="titulo" onclick="toggleParrafo(2)">
                    <span>Insertar varios simultáneamente</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Se pueden insertar varios a la vez:
                <br><br>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/32.png" alt="">
                </p>

                <div class="titulo" onclick="toggleParrafo(3)">
                    <span>Actualizar documento</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Tiene todas las funciones de .insert(), pero además permite actualizar un documento si ya existe el _id de dicho documento. En ese caso, .insert() mostraría una excepción.
                <br><br>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/33.png" alt="">
                </p>

                <h2 id="Leer y consultar colecciones">Leer y consultar colecciones</h2>
                <p>
                    Cuando de la función leer y consultar la información se trata, la forma básica consiste en usar el método find() de la colección, tal como ya se ha dicho en un punto anterior de este componente formativo.
                </p>

                <div class="titulo" onclick="toggleParrafo(4)">
                    <span>Leer y consultar colecciones</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/34.png" alt="">
                </p>

                <div class="titulo" onclick="toggleParrafo(5)">
                    <span>Función pretty()</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">
                Otra forma de mejor visualización es aplicar la función pretty().
                <br><br>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/35.png" alt="">
                </p>
                <h2 id="Actualizar documentos">Actualizar documentos</h2>
                <p>
                    Es momento de ver un ejemplo de cómo se actualiza la información en la base de datos; ello, conociendo el contenido del atributo _id del documento a actualizar. Preste atención a la siguiente estructura:
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/36.png" alt="">
                <p>
                    La opción upsert, permite agregar un documento si no existe, siempre y cuando esta opción esté activada.
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/37.png" alt="">
                <h2 id="Borrar documentos">Borrar documentos</h2>
                <p>
                    El método remove() elimina uno o más documentos de una colección. Recibe parámetros para realizar una eliminación selectiva; si no se le pasa ningún parámetro, elimina todos los documentos de la colección (Graterol, 2014). Esto nos conduce a concluir que las bases de datos no relacionales son más sencillas de administrar, al no tener que hacer uso de estructuras complejas e interrelacionadas.
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/38.png" alt="">
                <p>
                    La función .drop() elimina toda una colección y es la más recomendable a la hora de realizar esta tarea, ya que utiliza menos recursos que .remove(). (Yohan D, 2014).
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/39.png" alt="">

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
        @include('partials-bases-de-datos-nosql.introduccion-bases-de-datos-nosql.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">Manipulación de datos con MongoDB</a></li>
            <li><a href="#Crear documentos">Crear documentos</a></li>
            <li><a href="#Leer y consultar colecciones">Leer y consultar colecciones</a></li>
            <li><a href="#Actualizar documentos">Actualizar documentos</a></li>
            <li><a href="#Borrar documentos">Borrar documentos</a></li>
        </ul>

@endsection
