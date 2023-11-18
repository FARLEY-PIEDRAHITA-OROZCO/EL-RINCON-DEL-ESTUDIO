@extends('layouts.articulos')
@section('title', 'NoSQL con MongoDB')
@section('content')

        <article>
            <h1 id="introduccion">NoSQL con MongoDB</h1>
            <p class="metadata">Publicado el 13 de Noviembre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img17.png" alt="">
                <p>
                    Como se mencionó antes, MongoDB es un sistema de bases de datos no relacionales, multiplataforma, es decir, se puede instalar en cualquier sistema operativo para servidor (Windows, Linux, BSD, MAC). El tipo de base de datos empleada es el tipo de base de datos documental, pero también se pueden administrar bases de datos clave/valor.
                </p>
                <p>
                    El tipo de licencia de software libre es, específicamente, GNU AGPL v3.0. MongoDB usa el formato BSON (JSON compilado) para guardar la información.
                </p>
                <h2 id="Conceptos básicos">Conceptos básicos</h2>
                <p>
                    Los siguientes conceptos son claves para la asimilación de todos los elementos de este componente formativo. Para la implementación de bases de datos, conviene tener claridad acerca de lo que es un documento, una colección, a qué se hace referencia cuando se habla de creación y actualización de bases de datos, instalación de licencias, entre otros.
                </p>


                <div class="titulo" onclick="toggleParrafo(1)">
                    <span>JSON – JavaScript Object Notation</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Como la información gestionada usa el formato JSON para representar objetos según la especificación documento RFC 46274, y como JSON es independiente del lenguaje, se ha popularizado mucho el uso del lenguaje JavaScript. JSON es usado por muchos sistemas para intercambiar datos, por lo sencillo que es, si se compara con XML.</p>

                <div class="titulo" onclick="toggleParrafo(2)">
                    <span>Documento</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Un documento es un conjunto de datos estructurados, pero esta estructura no es estática, es decir, puede variar de un documento a otro. La estructura básica contiene pares clave/valor y se usa BSON (JSON Binario) como formato para almacenar los documentos dentro del SGBD. Un documento es como el equivalente a una fila dentro de una tabla de un modelo relacional.</p>

                <div class="titulo" onclick="toggleParrafo(3)">
                    <span>Colección</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">En este contexto, cuando se habla de colección, se está haciendo referencia a un conjunto de documentos. Se puede asemejar a una tabla en las bases de datos relacionales.</p>

                <h2 id="Instalación de MongoDB">Instalación de MongoDB</h2>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img18.png" alt="">
                <p>
                    La instalación de MongoDB en un sistema Windows 10, comenzando por su descarga, implica el seguimiento de una serie de pasos ordenados. En este punto del contenido formativo, se dará a conocer el recorrido detallado para tal instalación.
                </p>
                <p>
                    Siga cuidadosamente las instrucciones que se encuentran en el siguiente documento y luego aplíquelas en su computador.
                </p>
                <p>
                    Visite
                </p>
                <div class="info-box">
                    <p>
                        <a href="https://www.mongodb.com" target="_blank">Enlace web https://www.mongodb.com</a>
                    </p>
                </div>
                <p>
                    estando allí, haga clic en Products y Community Server para aplicar los pasos:
                </p>
                <div class="info-box">
                    <p>
                        <a href="https://drive.google.com/file/d/1dUjyZy8yiczF53DDq2s4GBWxb4n7_66y/view?usp=drive_link" target="_blank">Instalación de MongoDB</a>
                    </p>
                </div>
                <h2 id="Consola interactiva">Consola interactiva</h2>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img19.png" alt="">
                <p>
                    MongoDB tiene, al igual que todas las bases de datos, una interfaz de línea de comando (CLI), desde la cual se puede acceder a un API de las funcionalidades. Podemos acceder a su consola interactiva y realizar nuestras primeras interacciones con MongoDB.
                </p>

                <div class="titulo" onclick="toggleParrafo(4)">
                    <span>Ingreso</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Para ingresar a su consola interactiva, hay que dirigirse a la carpeta donde quedó instalado MongoDB. (C:\Program Files\MongoDB\Server\4.4\bin). Se debe dar clic en el ejecutable que se llama mongo.exe, como se muestra aquí:
                <br><br>
                <strong>Figura 16</strong>
                <br><br>
                Consola interactiva
                <br><br>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img20.png" alt=""></p>

                <div class="titulo" onclick="toggleParrafo(5)">
                    <span>Instalación exitosa</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Si la vista es como se muestra a continuación, es porque la instalación fue exitosa.
                <br><br>
                <strong>Figura 17</strong>
                <br><br>
                Instalación exitosa
                <br><br>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/21.png" alt=""></p>

                <div class="titulo" onclick="toggleParrafo(6)">
                    <span>Prueba</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Para probar que está funcionando bien, se escribe el comando ‘help’.
                <br><br>
                <strong>Figura 18</strong>
                <br><br>
                Comprobación de funcionamiento
                <br><br>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/22.png" alt=""></p>

                <div class="titulo" onclick="toggleParrafo(7)">
                    <span>Seleccionar base de datos
                    </span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Al igual que en bases de datos relacionales, se debe usar un comando para seleccionar una base de datos, pero antes de eso es necesario mirar qué bases de datos existen, con el siguiente comando:
                <br><br>
                <strong>Figura 19</strong>
                <br><br>
                Comando ‘show dbs’
                <br><br>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/23.png" alt=""></p>

                <div class="titulo" onclick="toggleParrafo(8)">
                    <span>Comando de selección</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">El comando para seleccionar una base de datos es use "nombre base de datos".
                <br><br>
                <strong>Figura 20</strong>
                <br><br>
                Nombre base de datos
                <br><br>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/24.png" alt=""></p>

                <div class="titulo" onclick="toggleParrafo(9)">
                    <span>Crear base de datos</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">El comando use se usa también para crear una nueva base de datos. El comando sería ‘use pruebas’:
                <br><br>
                <strong>Figura 21</strong>
                <br><br>
                Use pruebas
                <br><br>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/25.png" alt="">
                <br><br>
                El comando show dbs no mostrará esta base de datos hasta que exista el primer documento.
                </p>

                <h2 id="Crear primer documento">Crear primer documento</h2>
                <p>
                    Se creará una base de datos y una colección, y eso se hará almacenando un documento usando el objeto db, pero primero se debe ejecutar el comando use. Un documento puede tener, en teoría, un máximo de hasta 16MB de información.
                </p>
                <p>
                    Aprovechando el primer objeto visto, JSON, para almacenarlo en MongoDB y consultarlo, se debe tener en cuenta, dentro de la consola interactiva, usar variables para crear o modificar documentos; de esta manera, se pueden evitar accidentes con una mala manipulación directa de la base de datos.
                </p>
                <p>
                    <strong>Imagen 22</strong>
                </p>
                <p>
                    Creación del primer documento
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/26.png" alt="">
                <p>
                    Habría que añadir que, de esta manera, para almacenar un documento, es necesario ejecutar el método insert() del objeto db, especificando el nombre de la colección (la colección se crea de manera dinámica, como la base de datos).
                </p>
                <p>
                    <strong>Ejemplo</strong>
                </p>
                <p>
                    <strong>Figura 23</strong>
                </p>
                <p>
                    Almacenar un documento
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/27.png" alt="">
                <p>
                    <strong>Primera colección</strong>
                </p>
                <p>
                    Es así como se ha creado la primera colección de nombre coleccion_personas y nuestro primer documento. Para confirmar esto, se puede ejecutar el comando show collections.
                </p>
                <p>
                    <strong>Figura 24</strong>
                </p>
                <p>
                    Creación de una colección
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/28.png" alt="">
                <p>
                    Método find()
                </p>
                <p>
                    Para consultar los documentos, se usa el método find() de la colocación, como se muestra a continuación:
                </p>
                <p>
                    <strong>Figura 25</strong>
                </p>
                <p>
                    Consulta de documentos
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/29.png" alt="">
                <p>
                    <strong>Llave primaria</strong>
                </p>
                <p>
                    Note que existe un atributo que nunca se definió, llamado _id. Este es un índice, que es lo equivalente a llave primaria.
                </p>
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
            <li><a href="#introduccion">NoSQL con MongoDB</a></li>
            <li><a href="#Conceptos básicos">Conceptos básicos</a></li>
            <li><a href="#Instalación de MongoDB">Instalación de MongoDB</a></li>
            <li><a href="#Consola interactiva">Consola interactiva</a></li>
            <li><a href="#Crear primer documento">Crear primer documento</a></li>
        </ul>

@endsection
