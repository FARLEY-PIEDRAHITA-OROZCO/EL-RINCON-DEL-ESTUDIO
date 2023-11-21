@extends('layouts.articulos')
@section('title', 'Introducción')
@section('content')

        <article>
            <h1 id="introduccion">Términos asociados al tipo de datos</h1>
            <p class="metadata">Publicado el 19 de Noviembre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <p>
                    El lenguaje de programación Python es uno de los más utilizados actualmente en el mercado laboral, permitiendo así incrementar puestos de trabajo para programadores.
                </p>
                <p>
                    El aprendiz aprenderá a identificar los diferentes tipos de datos y su almacenamiento en variables: datos enteros, float, cadenas, listas, booleanos, conjuntos y tuplas. Además, desarrollará habilidades para realizar conversiones entre diferentes tipos de datos.
                </p>
                <div style="text-align: center">
                    <img style="width: 400px" src="/images/curso-python/2.svg" alt="">
                </div>

                <p>
                    Python es un lenguaje de programación de uso libre, permite crear sitios web, juegos, software científico, gráficos, entre otros, siendo uno de los lenguajes más utilizados hoy en la industria desarrolladora.
                </p>
                <p>
                    Creado a finales de 1989 en los países bajos por Guido Van Rossum, quien fue desarrollador de Google y ahora desarrollador de Dropbox, dicho lenguaje de programación hace parte de CWI (Centro de investigaciones holandés de carácter oficial).
                </p>
                <p>
                    Hinojosa (2016) menciona que el nombre "Python" viene dado por la afición de Van Rossum al grupo musical Monty Python Flying Circus, un grupo cómico británico de seis humoristas de los años 1960. Actualmente el logo de Python son dos serpientes pitón (python en inglés) en colores azul y amarillo, ver figura 1.
                </p>
                <img style="width: 600px" src="/images/curso-python/3.svg" alt="">
                <p style="text-align: center">
                    <strong>Figura 1. Logo actual de Python</strong>
                </p>
                <p>
                    En 1991 se publicó la versión 0.9.0. En 1994 se publicó la versión 1.0, en el 2000 se publicó la versión 2.0 y en el 2008 se publicó la versión 3.0.
                </p>
                <p>
                    Desde 2001 hasta 2018, la Python Software Foundation, es dueña de todo el código, documentación y especificaciones del lenguaje. Después del 2019, el desarrollo de Python está dirigido por un consejo de dirección de cinco miembros elegidos entre los desarrolladores de Python.
                </p>
                <p>
                    La Figura 2 presenta la fecha de publicación de las diferentes versiones de Python. Las versiones con punto rojo se consideran obsoletas, las versiones con punto azul se encuentran en actualizaciones y las versiones con punto blanco corresponden a futuras versiones.
                </p>
                <img style="width: 600px" src="/images/curso-python/4.svg" alt="">
                <p style="text-align: center">
                    <strong>Figura 2. Versiones del lenguaje Python</strong>
                </p>
                <p>
                    Python es un lenguaje de programación interpretado, por lo que funciona en cualquier sistema operativo que integre su interpretador.
                </p>
                <p>
                    Dicho lenguaje es multiplataforma y multiparadigma, sirve para desarrollar aplicaciones web o móviles. Este lenguaje de programación dispone de frameworks que apoyan el desarrollo de juegos y algoritmos científicos de cálculos avanzados. Además, es una herramienta conveniente para el área de Machine Learning.
                </p>
                <p>
                    Este lenguaje cuenta con una gran calidad en su sintaxis, utiliza bloques de código, los cuales llevan indentaciones, lo que garantiza una gran legibilidad en el código fuente. El código de Python 2.x no necesariamente debe correr en Python 3.0.
                </p>

                <div class="recuadro">
                    <p>
                        # Ejemplo
                    </p>
                    <p>
                        ----------------------------------
                    </p>
                    <p>
                        Python 3.x
                    </p>
                    <p style="color: green">
                        print (“Hola Mundo”)
                    </p>
                    <p>
                        ----------------------------------
                    </p>
                    <p>
                        Python 2.x
                    </p>
                    <p style="color: green">
                        print "Hola mundo"
                    </p>
                </div>
                <br>
            </section>

            <style>

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
            <li><a href="#introduccion">Términos asociados al tipo de datos</a></li>
        </ul>

@endsection
