@extends('layouts.articulos')
@section('title', 'Tipos de datos')
@section('content')

        <article>
            <h1 id="introduccion">Tipos de datos</h1>
            <p class="metadata">Publicado el 19 de Noviembre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <div style="text-align: center">
                    <img style="width: 400px" src="/images/curso-python/5.svg" alt="">
                </div>
                <p>
                    En Python se encuentran diferentes tipos de datos con sus respectivas características y clasificaciones. A continuación se detallarán los tipos de datos básicos y otros tipos de datos predefinidos por el lenguaje.
                </p>
                <p>
                    Arias (2019) se refiere a los siguientes tipos de datos básicos de Python:
                </p>
                <ul>
                    <li>Numéricos</li>
                    <li>Booleanos</li>
                    <li>Cadenas de texto</li>
                </ul>
                <p>
                    Python también define otros tipos de datos, entre los que se encuentran:
                </p>
                <ul>
                    <li><strong>Secuencias:</strong> list, tuple y range</li>
                    <li><strong>Conjuntos:</strong> set</li>
                    <li><strong>Mapas:</strong> dict</li>
                </ul>

                <h2 id="Conceptos: datos numéricos, booleanos, cadena de caracteres, otros tipos de datos">Conceptos: datos numéricos, booleanos, cadena de caracteres, otros tipos de datos</h2>

                <h2 id="Datos numéricos">Datos numéricos</h2>

                <p>
                    Python define tres tipos de datos numéricos: enteros, punto flotante y números complejos.
                </p>

                <h2 id="Números enteros">Números enteros</h2>

                <p>
                    Se denominan <strong>int</strong>. Este tipo de dato comprende el conjunto de todos los números enteros, cuyo límite depende de la capacidad de memoria del computador.
                </p>
                <p>
                    Un número de tipo <strong>int</strong> se crea a partir de un literal que represente un número entero, o como resultado de una expresión o como una llamada a una función.
                </p>

                <div class="recuadro">
                    <p>
                        # Ejemplo
                    </p>
                    <p>
                        # v es de tipo int y su valor asignado es -3
                    </p>
                    <p style="color: green">
                        >>> v = -3
                    </p>
                    <p>
                        # m es de tipo int y su valor calculado es 5
                    </p>
                    <p style="color: green">
                        >>> m = v + 8
                    </p>
                    <p style="color: green">
                        >>>print (m)
                    </p>
                    <p>
                        5
                    </p>
                    <p>
                        # z es de tipo int y con la función redondeo es 2
                    </p>
                    <p style="color: green">
                        >>> z = round(m/2)
                    </p>
                    <p style="color: green">
                        >>> print(z)
                    </p>
                    <p>
                        2
                    </p>
                </div>

                <p>
                    También se pueden representar los números enteros en formato binario, octal o hexadecimal.
                </p>
                <ul>
                    <li>Para crear un número entero en binario, se antepone 0b a una secuencia de dígitos 0 y 1.</li>
                    <li>Para crear un número entero en octal, se antepone 0o a una secuencia de dígitos del 0 al 7.</li>
                    <li>Para crear un número entero en hexadecimal, se antepone 0x a una secuencia de dígitos del 0 al 9 y de la A la F.<</li>
                </ul>

                <div class="recuadro">
                    <p>
                        Ejemplo
                    </p>
                    <p style="color: green">
                        >>> decimal = 8
                    </p>
                    <p style="color: green">
                        >>> binario = 0b1101
                    </p>
                    <p style="color: green">
                        >>> octal = 0o11
                    </p>
                    <p style="color: green">
                        >>> hexadecimal = 0xc
                    </p>
                    <p style="color: green">
                        >>> print(decimal)
                    </p>
                    <p>
                        8
                    </p>
                    <p style="color: green">
                        >>> print(binario)
                    </p>
                    <p>
                        13
                    </p>
                    <p style="color: green">
                        >>> print(octal)
                    </p>
                    <p>
                        9
                    </p>
                    <p style="color: green">
                        >>> print(hexadecimal)
                    </p>
                    <p>
                        12
                    </p>
                </div>

                <h2 id="Números de punto flotante">Números de punto flotante</h2>

                <p>
                    Se denominan <strong>float</strong>. Se usa el tipo <strong>float</strong> para representar cualquier número real que represente valores de temperaturas, velocidades, estaturas y otras.
                </p>

                <div class="recuadro">
                    <p>
                        # Ejemplo
                    </p>
                    <p style="color: green">
                        >>> real = 1.1 + 2.2 # real es un float
                    </p>
                    <p style="color: green">
                        >>> print(real)
                    </p>
                    <p>
                        3.3000000000000003 # representación aproximada de 3.3
                    </p>
                    <p style="color: green">
                        >>> print(round(real,1))
                    </p>
                    <p>
                        3.3 # real mostrando únicamente 1 cifra decimal
                    </p>
                </div>

                <h2 id="Números complejos">Números complejos</h2>

                <p>
                    Este tipo de datos en Python se denomina complex.
                </p>
                <p>
                    Los números complejos tienen una parte real y otra imaginaria y cada una de ellas se representa como un float. Los números imaginarios son múltiplos de la unidad imaginaria (la raíz cuadrada de -1).
                </p>
                <ul>
                    <li>Para definir un número complejo, se hace así:
                        <br><br>
                        <img style="width: 400px" src="/images/curso-python/11.png" alt="">
                        <br><br>
                        Ejemplo: 4 + 7j
                    </li>
                    <li>Para acceder a la parte real se usa el atributo real.</li>
                    <li>Para acceder a la parte imaginaria se usa el atributo imag.</li>
                </ul>

                <div class="recuadro">
                    <p>
                        # Ejemplo
                    </p>
                    <p style="color: green">
                        >>> complejo = 5+3j
                    </p>
                    <p style="color: green">
                        >>> complejo.real
                    </p>
                    <p>
                        5.0
                    </p>
                    <p style="color: green">
                        >>> complejo.imag
                    </p>
                    <p>
                        3.0
                    </p>
                </div>

                <p style="text-align: center">
                    Para tener acceso a los equivalentes complejos del módulo math, se debe usar cmath.
                </p>

                <h2 id="Aritmética de los tipos numéricos">Aritmética de los tipos numéricos</h2>

                <p>
                    Para todos los tipos numéricos se pueden aplicar las operaciones: suma, resta, producto o división. Para exponentes se usa ** y para la división entera se usa //.
                </p>
                <p>
                    Se permite realizar una operación aritmética con números de distinto tipo. En este caso, el tipo numérico “más pequeño” se convierte al del tipo “más grande”, de forma que el tipo del resultado siempre es el del tipo mayor.
                </p>

                <ol>
                    <li>El tipo int es menor que el tipo float, el tipo float es menor que el tipo complex.</li>
                    <li>Si vamos a sumar un int y un float, el resultado es un float.</li>
                    <li>Si vamos a sumar un int y un complex, el resultado es un complex.</li>
                </ol>

                <div class="recuadro">
                    <p>
                        # Ejemplo
                    </p>
                    <p style="color: green">
                        >>> x = 2
                    </p>
                    <p style="color: green">
                        >>> a = x**3  # a es 8 elevado a la 3
                    </p>
                    <p style="color: green">
                        >>>print(a)
                    </p>
                    <p>
                        8
                    </p>
                    <p style="color: green">
                        >>> b = 31
                    </p>
                    <p style="color: green">
                        >>> c = b//4 # c es la parte entera de dividir b entre 4
                    </p>
                    <p style="color: green">
                        >>> print(c)
                    </p>
                    <p>
                        7
                    </p>
                    <p style="color: green">
                        >>> g = 31.0
                    </p>
                    <p style="color: green">
                        >>> h = d/4 # h es la parte entera de dividir g entre 4
                    </p>
                    <p style="color: green">
                        >>>print(h)
                    </p>
                    <p>
                        7.0
                    </p>
                    <p style="color: green">
                        >>> 1 + 2.0
                    </p>
                    <p style="color: green">
                        3.0
                    </p>
                    <p style="color: green">
                        >>> 2+3j + 5.7
                    </p>
                    <p>
                        (7.7+3j)
                    </p>
                </div>

                <h2 id="Booleanos">Booleanos</h2>

                <p>
                    En Python se representan los valores booleanos con bool. Esta clase solo se puede instanciar con dos valores: True para verdadero y False para falso.
                </p>
                <p>
                    Una particularidad del lenguaje es que cualquier variable puede ser usada en un contexto donde se requiera comprobar si algo es verdadero o falso.
                </p>
                <p>
                    Los siguientes objetos/instancias son consideradas falsas:
                </p>

                <ol>
                    <li>None</li>
                    <li>False</li>
                    <li>El valor cero de cualquier tipo númerico: 0, 0.0, 0j</li>
                    <li>Secuencias y colecciones vacías: '', (), [], {}, set(), range(0)</li>
                </ol>

                <div class="recuadro">
                    <p>
                        # Ejemplo
                    </p>
                    <p style="color: green">
                        >>> a = False
                    </p>
                    <p style="color: green">
                        >>> b = True
                    </p>
                    <p style="color: green">
                        >>> Type(a)
                    </p>
                    <p style="color: green">
                        class ' bool '
                    </p>
                    <p style="color: green">
                        >>> print(a)
                    </p>
                    <p>
                        false
                    </p>
                    <p style="color: green">
                        >>> print(b)
                    </p>
                    <p>
                        True
                    </p>
                    <p style="color: green">
                        >>> c = None
                    </p>
                    <p style="color: green">
                        >>> print(c)
                    </p>
                    <p>
                        None
                    </p>
                    <p style="color: green">
                        >>> type(c)
                    </p>
                    <p style="color: green">
                        class ' NoneType '
                    </p>
                </div>
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
            <li><a href="#introduccion">Tipos de datos</a></li>
            <li><a href="#Conceptos: datos numéricos, booleanos, cadena de caracteres, otros tipos de datos">Conceptos: datos numéricos, booleanos, cadena de caracteres, otros tipos de datos</a></li>
            <li><a href="#Datos numéricos">Datos numéricos</a></li>
            <li><a href="#Números enteros">Números enteros</a></li>
            <li><a href="#Números de punto flotante">Números de punto flotante</a></li>
            <li><a href="#Números complejos">Números complejos</a></li>
            <li><a href="#Aritmética de los tipos numéricos">Aritmética de los tipos numéricos</a></li>
            <li><a href="#Booleanos">Booleanos</a></li>
        </ul>

@endsection
