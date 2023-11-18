@extends('layouts.articulos')
@section('title', 'Introducción a NoSQL')
@section('content')

        <article>
            <h1 id="introduccion">Introducción a NoSQL</h1>
            <p class="metadata">Publicado el 13 de Noviembre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img2.png" alt="">
                <p>
                    NoSQL (“no SQL”) comprende una amplia clase de sistemas de gestión de bases de datos que difieren del modelo clásico de SGBDR (Sistema de Gestión de Bases de Datos Relacionales) en aspectos importantes, siendo el más destacado que no usan SQL como lenguaje principal de consultas. <strong>(Wikipedia, 2021a).</strong>
                </p>
                <p>
                    Los datos almacenados no requieren estructuras fijas, como tablas; normalmente, no soportan operaciones JOIN ni garantizan completamente ACID (atomicidad, consistencia, aislamiento y durabilidad), y, habitualmente, escalan bien horizontalmente, es decir, pueden ir aumentado la estructura de manera sencilla. Los sistemas NoSQL se denominan, a veces, “no solo SQL” para subrayar el hecho de que también pueden soportar lenguajes de consulta de tipo SQL. <strong>(Wikipedia, 2021a).</strong>
                </p>
                <h2 id="Definición de NoSQL">Definición de NoSQL</h2>
                <p>
                    La web 2.0 (donde quienes suministran el contenido son los usuarios) trajo grandes necesidades de datos e infraestructura tecnológica, principalmente, para empresas como Google, Amazon y Facebook. Ellos tuvieron que buscar soluciones propias a estos problemas, enfocados en la gran cantidad de almacenamiento y el crecimiento de sistemas web con acceso a información en tiempo real, donde surgió la necesidad de proporcionar información gestionada y procesada desde grandes volúmenes de datos. Debido a que las bases de datos relacionales no responden de forma adecuada a esta necesidad, para la exigencia en tiempos de demanda, nacen las bases de datos NoSQL.
                </p>
                <p>
                    Se deben definir algunos conceptos técnicos de suma importancia:
                </p>

                <div class="titulo" onclick="toggleParrafo(1)">
                    <span>Escalabilidad</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Es la capacidad que tiene un sistema de ser configurado en software o hardware, para mejorar la respuesta a las exigencias o nuevas demandas de capacidad de procesamiento o almacenamiento (conservando las mismas funcionalidades). Actualmente, se usa mucho el término ‘escalabilidad vertical’, para referirse a este tipo de escalabilidad.</p>

                <div class="titulo" onclick="toggleParrafo(2)">
                    <span>Escalabilidad horizontal</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Consiste en potenciar el rendimiento del sistema desde un aspecto de mejora global, a diferencia de aumentar la potencia de una única parte del mismo. Este tipo de escalabilidad se basa en la modularidad de su funcionalidad (Junta de Andalucía, s. f.), es decir, que las funcionalidades se puedan extender con la misma facilidad con la que mejoran el rendimiento y capacidad.</p>

                <div class="titulo" onclick="toggleParrafo(3)">
                    <span>Escalabilidad vertical y horizontal</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Las bases de datos no relacionales están diseñadas para ofrecer sistemas con altas capacidades de escalabilidad vertical y horizontal.</p>

                <h2 id="Cómo diferenciar NoSQL de SQL">Cómo diferenciar NoSQL de SQL</h2>
                <p>
                    Al utilizar el término NoSQL no se hace referencia a una base de datos o a un tipo de base de datos, sino que, más bien, es la definición de un conjunto de tipos de bases de datos que son diferentes a las bases de datos convencionales (relacionales). La principal diferencia entre las bases de datos de NoSQL y las bases de datos relacionales tradicionales es que las NoSQL emplean una forma de almacenamiento no estructurado o de estructuras diferentes a tablas. Simplificando la estructura de almacenamiento, es así como las NoSQL pueden concentrarse en procesar grandes volúmenes de datos.
                </p>
                <p>
                    A continuación, se muestra una comparación rápida de las funciones de NoSQL con las bases de datos relacionales.
                </p>
                <p>
                    <strong>Tabla 1</strong>
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img3.png" alt="">
                <p>
                    A continuación, se presentan algunas ventajas y desventajas que tiene cada uno de estos tipos de bases de datos:
                </p>

                <div class="titulo" onclick="toggleParrafo(4)">
                    <span>Ventajas</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Contrario a las bases de datos relacionales, las NoSQL están basadas en key-value pairs (clave valor).
                    <br><br>
                    Las NoSQL tienen diferentes tipos de almacenamiento, como el almacén de columnas, documentos, claves, valor de gráficos (capas), objetos, en formato XML y otros modos de tipos de datos. Las bases de datos NoSQL de código abierto tienen una implementación rentable económicamente, al no requerir licencias ni hardware de precio alto.
                    <br><br>
                    Trabajando con bases de datos NoSQL, la expansión de funcionalidades es más fácil y más económica que usando bases de datos relacionales.</p>

                <div class="titulo" onclick="toggleParrafo(5)">
                    <span>Desventajas</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Casi todas las bases NoSQL no admiten funciones de fiabilidad o integridad de los datos, mientras que las bases de datos relacionales, sí. Las bases NoSQL no soportan las funcionalidades o restricciones de consistencia en los datos. Para garantizar la integridad, es responsabilidad de los desarrolladores implementar con código propio, lo que agrega más complejidad al sistema.
                <br><br>
                La falta de integridad referencial en los datos hace que no sean fiables para realizar transacciones seguras, como en los sistemas bancarios, donde la integridad de los datos es primordial. Otras formas de complejidad encontradas en la mayoría de las bases de datos NoSQL incluyen la incompatibilidad con consultas SQL; se necesita un lenguaje de consulta manual, haciendo los procesos mucho más lentos y complejos.</p>

                <h2 id="Tipos de bases de datos NoSQL">Tipos de bases de datos NoSQL</h2>
                <p>
                    Dentro de las bases de datos no relacionales, se encuentran distintos modelos o tipos de implementaciones. Este grupo de bases de datos no relacionales NoSQL desempeñan funciones para diferentes ambientes, en particular, y con necesidades también diferentes.
                </p>
                <p>
                    Existen algunos tipos más comunes que otros, ya que están orientadas a documentos, por permitir mejor escalabilidad horizontal (Macarrón, 2021).
                </p>
                <p>
                    <strong>Bases de datos basadas en clave valor.</strong>
                </p>
                <p>
                    Las bases de datos basadas en clave valor son un tipo de base de datos NoSQL sencillo, que sirve para insertar y consultar datos. El concepto ‘clave valor’ significa que los datos se almacenan como una colección de pares clave-valor; la clave identifica de forma única la colección y el valor contiene los datos, y se ordenan según la clave.
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img5.png" alt="">
                <p>
                    <strong>Ejemplo</strong>
                </p>
                <p>
                    Supóngase que se quieren almacenar datos de una persona, como su cédula, nombres, apellidos, correo y varios números de teléfono, y que, por ejemplo, necesita guardar los datos para las siguientes personas:
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img4.png" alt="">
                <p>
                    Se toma la cédula como una especie de llave para identificar a una persona, es decir, la cédula es el identificador único para cada persona y no hay dos personas con la misma cédula.
                </p>
                <p>
                    <strong>Más posibilidades</strong>
                </p>
                <p>
                    En la misma base de datos, se necesita guardar datos de carros, siendo la placa lo que permite identificar al vehículo; entonces, los datos a guardar serían:
                </p>
                <div class="recuadro">
                    <p>
                        Placa: MSR-13
                        <br>
                        Modelo: 2015
                        <br>
                        Marca: MAZDA
                        <br>
                        Tipo: SEDAN
                    </p>
                </div>
                <p>
                    <strong>La base de datos sería:</strong>
                </p>
                <p>
                    <strong>Tabla 3</strong>
                </p>
                <p>
                    Ejemplo 2 de base de datos
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img7.png" alt="">
                <p>
                    Estas bases de datos son óptimas para consultas en ambientes de respuesta rápida, para aplicaciones de tiempo real, como sistemas de telefonía IP o sistemas de chats.
                </p>
                <p>
                    <strong>Bases de datos orientadas a documentos.</strong>
                </p>
                <p>
                    Los SGBD con estas características son denominadas bases de datos documentales, funcionan en el marco de la definición de un “documento”; la mayoría de estos SGBD coinciden en cómo se almacena la información, empleando un formato estándar. Los formatos estándares más comunes o populares son JSON, BSON y XML. Se podría considerar este último tipo de formato como el más utilizado en la actualidad.
                </p>
                <div class="contenedor">
                    <img class="imagen" src="/images/introduccion-bases-de-datos-nosql/img9.svg" alt="">
                    <p>
                        <strong>Formato XML</strong><br>
                        XML, sigla en inglés de eXtensible Markup Language, traducido como “Lenguaje de Marcado Extensible” o “Lenguaje de Marcas Extensible”, es un metalenguaje que permite definir lenguajes de marcas, desarrollado por el World Wide Web Consortium (W3C), utilizado para almacenar datos en forma legible. Proviene del lenguaje SGML y permite definir la gramática de lenguajes específicos (de la misma manera que HTML es, a su vez, un lenguaje definido por SGML) para estructurar documentos grandes. A diferencia de otros lenguajes, XML da soporte a bases de datos, siendo útil cuando varias aplicaciones deben comunicarse entre sí o integrar información. (Wikipedia, 2021).
                    </p>
                </div>
                <p>
                    <strong>Modelar información.</strong>
                </p>
                <p>
                    Suponga que se desea modelar la información contenida en un mensaje de correo electrónico.
                </p>
                <p>
                    <strong>Figura 1</strong>
                </p>
                <p>
                    Modelación de información
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img8.png" alt="">
                <P>
                    <strong>En base de datos relacional</strong>
                </P>
                <p>
                    Si se quisiera modelar esto en una base de datos relacional, seguramente se definiría una tabla para personas (con atributos nombre y correo) y una tabla para los correos, con dos relaciones a la tabla personal: una para el remitente y otra para el destino.
                </p>
                <div class="recuadro">
                    <p>
                        Persona: (nombres, correo)
                        <br>
                        Correo: (asuntos y texto)
                    </p>
                </div>
                <p>
                    Sin embargo, en XML, en lugar de tener filas en las tablas, cada correo es un archivo con la estructura dada en el ejemplo.
                </p>
                <p>
                    Sin embargo, en XML, en lugar de tener filas en las tablas, cada correo es un archivo con la estructura dada en el ejemplo.
                </p>

                <div class="contenedor">
                    <img class="imagen" src="/images/introduccion-bases-de-datos-nosql/img10.svg" alt="">
                    <p>
                        <strong>Formato JSON</strong><br>
                        JSON (acrónimo de JavaScript Object Notation, «notación de objeto de JavaScript») es un formato de texto sencillo para el intercambio de datos. Se trata de un subconjunto de la notación literal de objetos de JavaScript, aunque, debido a su amplia adopción como alternativa a XML, se considera (año 2019) un formato independiente del lenguaje (Wikipedia, 2021).
                    </p>
                </div>

                <div class="titulo" onclick="toggleParrafo(6)">
                    <span>Cadenas de texto</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Al ser una secuencia de ninguno o más caracteres, se ponen entre doble comilla, cómo en lenguaje JavaScript. Ejemplo: “Hola Mundo”</p>

                <div class="titulo" onclick="toggleParrafo(7)">
                    <span>Números</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Se permiten números negativos y positivos, que también pueden contener parte no entera separada por puntos. Ejemplo: 654.321</p>

                <div class="titulo" onclick="toggleParrafo(8)">
                    <span>Arreglos</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Representan una lista con ninguno o más valores, los cuales pueden ser todos del mismo o de diferente tipo. Los valores separados por comas y el vector, entre llaves ([]). Ejemplo [“Luis”,”Carlos”,”Julian”,99]</p>

                <div class="titulo" onclick="toggleParrafo(9)">
                    <span>Booleanos</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Representan valores booleanos y pueden tener dos valores: true y false</p>

                <div class="titulo" onclick="toggleParrafo(10)">
                    <span>Valores nulos</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Representan el valor nulo (null)</p>

                <div class="titulo" onclick="toggleParrafo(11)">
                    <span>Objetos</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Son colecciones no ordenadas de pares de la forma <nombre>:<valor>, donde el nombre debe ser separado por comas y puestos entre corchetes ({})</p>

                <p>
                    <strong>Bases de datos no relacionales documentales</strong>
                </p>
                <p>
                    Las bases de datos no relacionales documentales y su concepto de guardar la información con el modelo clave/valor. Es por eso que los documentos más comunes son en formato JSON. La diferencia radica en que un documento se almacena en una clave. Esta definición puede parecer abstracta, se explica mejor con un ejemplo:
                </p>
                <p>
                    <strong>Figura 2</strong>
                </p>
                <p>
                    Representación de los datos de una persona en un documento
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img10.png" alt="">
                <p>
                    Note cómo “nombres” es la clave y “JUAN CARLOS” es el valor. De la misma forma como “edad” es la clave y 65 valor.
                </p>
                <p>
                    <strong>Ejemplo</strong>
                </p>
                <p>
                    Suponga que necesita modelar un menú de una aplicación como se muestra a continuación:
                </p>
                <div style="text-align: center;">
                    <img style="width: 300px" src="/images/introduccion-bases-de-datos-nosql/img11.png" alt="">
                </div>
                <div class="contenedor">
                    <img class="imagen" src="/images/introduccion-bases-de-datos-nosql/img10.svg" alt="">
                    <p>
                        <strong>Representación en formato BSON</strong><br>
                        La representación de JSON que se muestra en esta tabla es una representación en formato texto, pero también se puede representar en formato binario (unos y ceros); a esta otra representación equivalente en binario se le llama BSON. Es una cadena de unos y ceros sin nada que la caracterice de más, excepto que al convertirla en cadenas de texto se presenta como se observó en el ejemplo
                    </p>
                </div>
                <p>
                    <strong>Tabla 4</strong>
                </p>
                <p>
                    Ejemplo
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img12.png" alt="">
                <p>
                    <strong>Bases de datos orientada a grafos</strong>
                </p>
                <p>
                    Un grafo es una colección de elementos (“nodos”) que aportan información, relacionados mediante “aristas”, que son la conexión entre los nodos, y que pueden tener una dirección concreta (Macarrón, 2021).
                </p>
                <p>
                    <strong>Figura 4</strong>
                </p>
                <p>
                    Grafos
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img13.png" alt="">
                <p>
                    Este es un tipo de base de datos muy diferente a los anteriores; maneja la información de una manera particular, empleando grafos y teoría de grafos. Cada nodo solo debe contener una sola columna, entonces se deben normalizar completamente las bases de datos. Y solo aplica para grafos de tipo binario; cada nodo sólo se puede relacionar con otros dos nodos como máximo. Las ventajas de este tipo de bases de datos van enfocadas a la integridad de los datos y la optimización de consultas.
                </p>
                <h2 id="Sistemas de Gestión de Bases de Datos (SGBD) NoSQL">Sistemas de Gestión de Bases de Datos (SGBD) NoSQL</h2>
                <p>
                    Como se sabe, la base de datos sólo sirve si existe un sistema que la gestione, un SGBD. En NoSQL, hay varios SGBD y la mayoría son de código libre o libre distribución. A continuación, se muestran algunas de ellas, las más populares, con sus respectivas características. Es necesario tener en cuenta que, no obstante, pueden existir otros SGBD menos populares pero que pueden ser una buena opción en el momento de trabajar para Big Data.
                </p>
                <p>
                    <strong>Tabla 5</strong>
                </p>
                <p>
                    Sistemas de gestión de bases de datos
                </p>
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img14.png" alt="">
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img15.png" alt="">
                <img style="width: 600px" src="/images/introduccion-bases-de-datos-nosql/img16.png" alt="">

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
                border: 2px solid #858585;
                background-color: #1b1b1b;
                padding: 10px; 
                }

                .contenedor {
                    display: flex;
                    align-items: center;
                }

                .imagen {
                    width: 200px; /* Ajusta el ancho de la imagen según tus necesidades */
                    margin-right: 20px; /* Espacio entre la imagen y el texto */
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
            <li><a href="#introduccion">Bases de datos NoSQL</a></li>
            <li><a href="#Definición de NoSQL">Definición de NoSQL</a></li>
            <li><a href="#Cómo diferenciar NoSQL de SQL">Cómo diferenciar NoSQL de SQL</a></li>
            <li><a href="#Tipos de bases de datos NoSQL">Tipos de bases de datos NoSQL</a></li>
            <li><a href="#Sistemas de Gestión de Bases de Datos (SGBD) NoSQL">Sistemas de Gestión de Bases de Datos (SGBD) NoSQL</a></li>
        </ul>

@endsection
