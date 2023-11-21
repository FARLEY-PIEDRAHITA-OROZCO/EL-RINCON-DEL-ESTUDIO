@extends('layouts.articulos')
@section('title', 'Proceso de instalación de Python')
@section('content')

        <article>
            <h1 id="introduccion">Proceso de instalación de Python</h1>
            <p class="metadata">Publicado el 19 de Noviembre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">

                <div class="titulo" onclick="toggleParrafo(1)">
                    <span>Paso 1</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">
                    <img style="width: 600px" src="/images/curso-python/7.png" alt="">
                    <br>
                    Para realizar el proceso de instalación es necesario ir al sitio oficial de Python <a href="http://www.python.org" target="_blank">(http://www.python.org)</a> y descargar el instalador ejecutable en el menú superior: la opción Downloads.
                </p>

                <div class="titulo" onclick="toggleParrafo(2)">
                    <span>Paso 2</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">
                    <img style="width: 600px" src="/images/curso-python/8.png" alt="">
                    <br>
                    Una vez descargado, iniciar la instalación ejecutando el archivo con doble clic.
                </p>

                <div class="titulo" onclick="toggleParrafo(3)">
                    <span>Paso 3</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">
                    <img style="width: 600px" src="/images/curso-python/9.png" alt="">
                    <br>
                    Para comprobar Python, acceder a la línea de comandos de Windows, ejecutando el programa cmd.exe
                </p>

                <div class="titulo" onclick="toggleParrafo(4)">
                    <span>Paso 4</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">
                    <img style="width: 600px" src="/images/curso-python/10.png" alt="">
                    <br>
                    Después, escribir "python" y ENTER para iniciar el entorno interactivo de Python e introducir comandos. Salir con el comando quit() o CTRL-Z.
                </p>

                <h2 id="Comentarios en Python">Comentarios en Python</h2>
                <p>
                    Un comentario es una línea de texto no ejecutable, esto quiere decir que el compilador o intérprete no la tomará como una línea de código.
                </p>
                <p>
                    Es una buena práctica en programación documentar el código para mayor claridad en un proyecto. Se pueden hacer comentarios en Python para dar pequeñas explicaciones acerca de lo que hace el programa. Se pueden usar tantos comentarios como sean necesarios.
                </p>
                <p>
                    Hay dos formas para hacer comentarios:
                </p>
                <ol>
                    <li>Digitando el símbolo # al comienzo del comentario.</li>
                    <li>Digitando triple comilla (“) al principio y al final del comentario, cuando ocupan varias líneas.</li>
                </ol>

                <div class="recuadro">
                    <p>
                        # Ejemplo
                    </p>
                    <p>
                        # Autor: Pepito Pérez
                    </p>
                    <p>
                        # Ciudad: Bogotá
                    </p>
                    <p>
                        >>> x=0
                    </p>
                    <p>
                        >>> y=8 # Los omentarios también pueden estar dentro de una línea
                    </p>
                    <p>
                        """ Este es un comentario multilínea.
                    </p>
                    <p>
                        Podemos escribir varias líneas sucesivamente en la documentación"""
                    </p>
                </div>

                <h2 id=" Errores de tecleo y excepciones"> Errores de tecleo y excepciones</h2>
                <p>
                    Si se digita incorrectamente una expresión, Python nos lo indicará con un mensaje de error. El mensaje de error proporciona información acerca del tipo de error cometido y del lugar en el que este ha sido detectado.
                </p>

                <div class="recuadro">
                    <p>
                        # Ejemplo
                    </p>
                    <p>
                        >>> 1+2
                    </p>
                    <p>
                        File "<stdin>", line 1
                    </p>
                    <p>
                        1 + 2)
                    </p>
                    <p>
                        ^
                    </p>
                    <p>
                        SyntaxError: unmatched ')'
                    </p>
                </div>

                <p>
                    En este ejemplo se ha cerrado un paréntesis cuando no había otro abierto previamente, lo cual es incorrecto. Python indica que ha detectado un error de sintaxis (SyntaxError) y señala con el carácter ^ al lugar en el que se encuentra.
                </p>
                <p>
                    En Python los errores se denominan excepciones. Cuando Python es incapaz de analizar una expresión, produce una excepción. Cuando el intérprete interactivo detecta la excepción, nos muestra por pantalla un mensaje de error.
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

            .recuadro {
                border: 2px solid #858585; /* Cambia el color del borde al que desees, #007bff es azul en este ejemplo */
                background-color: #1b1b1b; /* Cambia el color de fondo al que desees, #f0f0f0 es gris claro en este ejemplo */
                padding: 10px; /* Espacio interno alrededor del contenido del recuadro */
            }

            </style>

        </article>
@endsection

@section('aside')
        @include('partials-python.terminos.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">Proceso de instalación de Python</a></li>
            <li><a href="#Comentarios en Python">Comentarios en Python</a></li>
            <li><a href="# Errores de tecleo y excepciones"> Errores de tecleo y excepciones</a></li>
        </ul>

@endsection
