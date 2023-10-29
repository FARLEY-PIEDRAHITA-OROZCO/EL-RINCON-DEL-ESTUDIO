@extends('layouts.articulos')
@section('title', 'Estudio de caso Import Tech S.A.S.')
@section('content')

        <article>
            <h1 id="introduccion">Caso de estudio</h1>
            <p class="metadata">Publicado el 28 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <iframe width="600" height="315" src="https://www.youtube.com/embed/Ih7CYH73mrM?si=bPCpEIMrSHnRE8ES" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <h2 id="Diseño modelo entidad relación">Diseño modelo entidad relación</h2>
                <p>
                    Para el desarrollo del modelo se utilizará la herramienta Draw.io, a la cual pueden acceder en línea o descargar a sus computadoras sin ningún problema toda vez que es de licencia GPL, a través del link.
                </p>
                <div class="info-box">
                    <p>Descargar Draw.io</p>
                    <a href="https://app.diagrams.net/" target="_blank">Draw.io</a>
                </div>
                <p>
                    El modelo entidad relación, introducido por Peter Chen en 1976, es el más utilizado para el diseño conceptual de bases de datos; este modelo está formado por un conjunto de conceptos que permiten describir la realidad mediante un conjunto de representaciones gráficas y lingüísticas.
                </p>
                <p>
                    <strong>Los siguientes son los elementos a utilizar para representar el modelo:</strong>
                </p>
                <p style="text-align: center">
                    <strong>Elementos para la representación gráfica del modelo entidad relación</strong>
                </p>
                <img style="width: 600px" src="/images/caso-de-estudio/img2.svg" alt="">
                <p>
                    A continuación, se ilustra cómo se puede construir el modelo entidad relación con la herramienta propuesta.
                </p>
                <p style="text-align: center">
                    <strong>Construcción del modelo entidad - relación</strong>
                </p>
                <img style="width: 600px" src="/images/caso-de-estudio/img3.jpg" alt="">
                <p>
                    Como se evidencia en la figura Construcción del modelo entidad - relación, se deben seleccionar los componentes a utilizar y se llevan al área de trabajo donde se crean las entidades con sus respectivos atributos y sus relaciones.
                </p>
                <p style="text-align: center">
                    <strong>Diseño modelo entidad - relación</strong>
                </p>
                <img style="width: 600px" src="/images/caso-de-estudio/img4.svg" alt="">
                <h2 id="Modelo físico">Modelo físico</h2>
                <p>
                    Para la construcción del modelo de datos físico se utilizará la herramienta MySQL Workbench previamente instalada.
                </p>
                <p style="text-align: center">
                    <strong>Creación de un nuevo modelo</strong>
                </p>
                <img style="width: 600px" src="/images/caso-de-estudio/img5.jpg" alt="">
                <p>
                    Para crear el modelo físico se hace en el menú principal Archivo (File) y en las opciones del menú se elige la opción New Model. Es importante tener claro cuáles son los tipos de datos disponibles para la creación de la base de datos en MySQL.
                </p>
                <p>
                    <strong>¿Qué es un tipo de dato?</strong>
                </p>
                <p>
                    En ciencias de la computación un tipo de dato informático, o simplemente tipo, es un atributo de los datos que indica al ordenador (y/o al programador/programadora) sobre la clase de datos que se va a manejar. Esto incluye imponer restricciones en los datos, como qué valores pueden tomar y qué operaciones se pueden realizar.
                </p>
                <p>
                    <strong>Los tipos de datos más comunes son:</strong>
                </p>
                <ul>
                    <li>Números enteros</li>
                    <li>Números con signo (negativos)</li>
                    <li>Números de coma flotante (decimales)</li>
                    <li>Cadenas alfanuméricas (y unicodes)</li>
                    <li>Estados, etc.</li>
                </ul>
                <p>
                    Un tipo de dato es un espacio en memoria con restricciones. Por ejemplo, el tipo "int" representa, generalmente, un conjunto de enteros de 32 bits, cuyo rango va desde el -2.147.483.648 al 2.147.483.647, así como las operaciones que se pueden realizar con los enteros, como son la suma, la resta, y la multiplicación. Los colores, por su parte, se representan como tres bytes denotando la cantidad de rojo, verde y azul, y una cadena de caracteres representando el nombre del color (en este caso, las operaciones permitidas incluyen la adición y la sustracción, pero no la multiplicación).
                </p>
                <div class="recuadro">
                    <p>Este es un concepto propio de la informática y, más específicamente, de los lenguajes de programación, aunque también se encuentra relacionado con nociones similares de la matemática y la lógica.

                    </p>
                </div>
                  <p>
                    En un sentido amplio, un tipo de datos define un conjunto de valores y las operaciones sobre esos valores. Casi todos los lenguajes de programación explícitamente incluyen la notación del tipo de datos, aunque lenguajes diferentes pueden usar terminologías diferentes. La mayor parte de los lenguajes de programación permiten al programador definir tipos de datos adicionales, normalmente combinando múltiples elementos de otros tipos y definiendo las operaciones del nuevo tipo de dato. Por ejemplo, un programador puede crear un nuevo tipo de dato llamado "Persona", contemplando que el dato interpretado como Persona incluya un nombre y una fecha de nacimiento.
                  </p>
                  <p>
                    Un tipo de dato puede ser también visto como una limitación impuesta en la interpretación de los datos en un sistema de tipificación, describiendo la representación, la interpretación y la estructura de los valores u objetos almacenados en la memoria del ordenador. El sistema de tipificación usa información de los tipos de datos para comprobar la verificación de los programas que acceden o manipulan los datos.
                  </p>
                  <p>
                    <strong>Los tipos de datos que puede haber en un campo, se pueden agrupar en tres grandes grupos:</strong>
                  </p>

                  <ol>
                    <li>Tipos numéricos</li>
                    <li>Tipos de fecha</li>
                    <li>Tipos de cadena</li>
                  </ol>
                  <p>
                    <strong>Tipos numéricos</strong>
                  </p>

                  <div class="titulo" onclick="toggleParrafo(1)">
                    <span>TinyInt</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Es un número entero con o sin signo. Con signo el rango de valores válidos va desde -128 a 127. Sin signo, el rango de valores es de 0 a 255.</p>

                <div class="titulo" onclick="toggleParrafo(2)">
                    <span>BigInt</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Número entero con o sin signo. Con signo el rango de valores va desde -9.223.372.036.854.775.808 a 9.223.372.036.854.775.807. Sin signo el rango va desde 0 a 18.446.744.073.709.551.615.</p>

                <div class="titulo" onclick="toggleParrafo(3)">
                    <span>Bit o Bool</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Un número entero que puede ser 0 o 1.</p>

                <div class="titulo" onclick="toggleParrafo(4)">
                    <span>Float</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Número pequeño en coma flotante de precisión simple. Los valores válidos van desde -3.402823466E+38 a -1.175494351E-38, 0 y desde 1.175494351E-38 a 3.402823466E+38.</p>

                <div class="titulo" onclick="toggleParrafo(5)">
                    <span>SmallInt</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Número entero con o sin signo. Con signo el rango de valores va desde -32.768 a 32.767. Sin signo, el rango de valores es de 0 a 65.535.</p>

                <div class="titulo" onclick="toggleParrafo(6)">
                    <span>MediumIn</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">número entero con o sin signo. Con signo el rango de valores va desde -8.388.608 a 8.388.607. Sin signo el rango va desde 0 a 16.777.215.</p>

                <div class="titulo" onclick="toggleParrafo(7)">
                    <span>xReal, Double</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Número en coma flotante de precisión doble. Los valores permitidos van desde -1.7976931348623157E+308 a -2.2250738585072014E-308, 0 y desde 2.2250738585072014E-308 a 1.7976931348623157E+308.</p>

                <div class="titulo" onclick="toggleParrafo(8)">
                    <span>Integer, Int</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Número entero con o sin signo. Con signo el rango de valores va desde -2.147.483.648 a 2.147.483.647. Sin signo el rango va desde 0 a 429.4967.295.</p>

                <div class="titulo" onclick="toggleParrafo(9)">
                    <span>Decimal, Dec, Numeric</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Número en coma flotante desempaquetado. El número se almacena como una cadena.</p>

                <p>
                    <strong>Tipo de datos numéricos</strong>
                </p>
                <img style="width: 600px" src="/images/caso-de-estudio/img6.png" alt="">
                <p>
                    <strong>Tipos fecha</strong>
                </p>
                <p>
                    A la hora de almacenar fechas, hay que tener en cuenta que MySQL no comprueba de una manera estricta si una fecha es válida o no. Simplemente comprueba que el mes está comprendido entre 0 y 12 y que el día está comprendido entre 0 y 31.
                </p>

                <div class="titulo" onclick="toggleParrafo(10)">
                    <span>Date</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Tipo fecha, almacena una fecha. El rango de valores va desde el 1 de enero del 1001 al 31 de diciembre de 9999. El formato de almacenamiento es de año-mes-día</p>

                <div class="titulo" onclick="toggleParrafo(11)">
                    <span>Time</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Almacena una hora. El rango de horas va desde - 838 horas, 59 minutos y 59 segundos a 838 horas, 59 minutos y 59 segundos. El formato de almacenamiento es de 'HH:MM: SS'.</p>

                <div class="titulo" onclick="toggleParrafo(12)">
                    <span>DateTime</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Combinación de fecha y hora. El rango de valores va desde el 1 de enero del 1001 a las 0 horas, 0 minutos y 0 segundos al 31 de diciembre del 9999 a las 23 horas, 59 minutos y 59 segundos. El formato de almacenamiento es de año-mes-dia horas-minutos-segundos.</p>

                <div class="titulo" onclick="toggleParrafo(13)">
                    <span>Year</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Almacena un año. El rango de valores permitidos van desde el año 1901 al año 2155. El campo puede tener tamaño dos o tamaño 4 dependiendo de si se quiere almacenar el año con dos o cuatro dígitos.</p>

                <div class="titulo" onclick="toggleParrafo(14)">
                    <span>TimeStamp</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Combinación de fecha y hora. El rango va desde el 1 de enero de 1970 al año 2037. El formato de almacenamiento depende del tamaño del campo.</p>

                <p>
                    <strong>Tipo de datos fecha</strong>
                </p>
                <img style="width: 600px" src="/images/caso-de-estudio/img7.png" alt="">
                <p>
                    <strong>Tipos de cadena</strong>
                </p>

                <div class="titulo" onclick="toggleParrafo(15)">
                    <span>Char(n)</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Almacena una cadena de longitud fija y podrá contener desde 0 a 255 caracteres.</p>

                <div class="titulo" onclick="toggleParrafo(16)">
                    <span>VarChar(n)</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">almacena una cadena de longitud variable, podrá contener desde 0 a 255 caracteres.</p>

                <p>
                    Dentro de los tipos de cadena se pueden distinguir otros dos subtipos, los <strong>tipos Test</strong> y los tipos <strong>BLOB (Binary Large Object)</strong>.
                </p>
                <p>
                    La diferencia entre un tipo y otro es el tratamiento que reciben a la hora de realizar ordenamientos y comparaciones. Mientras que el tipo test se ordena sin tener en cuenta las mayúsculas y las minúsculas, el tipo BLOB se ordena teniéndolas en cuenta.
                </p>
                <p>
                    Los tipos <strong>BLOB</strong> se utilizan para almacenar datos binarios como pueden ser ficheros.
                </p>

                <div class="titulo" onclick="toggleParrafo(17)">
                    <span>TinyText y TinyBlob</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Columna con una longitud máxima de 255 caracteres.</p>

                <div class="titulo" onclick="toggleParrafo(18)">
                    <span>Blob y Text</span>
                    <span class="icono">+</span>
                </div>

                <p class="parrafo">Un texto con un máximo de 65.535 caracteres.</p>
                <div class="titulo" onclick="toggleParrafo(19)">
                    <span>MediumBlob y MediumText</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">un texto con un máximo de 16.777.215 caracteres.</p>

                <div class="titulo" onclick="toggleParrafo(20)">
                    <span>LongBlob y LongText</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Un texto con un máximo de caracteres 4.294.967.295. Hay que tener en cuenta que debido a los protocolos de comunicación los paquetes pueden tener un máximo de 16 Mb.</p>

                <div class="titulo" onclick="toggleParrafo(21)">
                    <span>Enum</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Campo que puede tener un único valor de una lista que se especifica. El tipo Enum acepta hasta 65.535 valores distintos.</p>

                <div class="titulo" onclick="toggleParrafo(22)">
                    <span>Set</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Un campo que puede contener ninguno, uno o varios valores de una lista. Esta puede tener un máximo de 64 valores.</p>

                <p>
                    <strong>Tipos de datos cadena</strong>
                </p>
                <img style="width: 600px" src="/images/caso-de-estudio/img8.png" alt="">
                <p>
                    <strong>Restricciones y propiedades de los campos</strong>
                </p>
                <p>
                    <strong>Primary key.</strong> Definiciones y reglas generales
                </p>
                <ul>
                    <li>La clave primaria o Primary key, identifica de manera unívoca (única) a cada registro de una tabla.</li>
                    <li>El valor que contiene la columna definida como Primary key, debe ser único</li>
                    <li>El valor debe ser Not Null (no permitirá valores nulos).</li>
                    <li>Una tabla puede tener más de un campo PK, a la que se le llamará clave compuesta.</li>
                    <li>Sea simple o compuesta, cada tabla solo podrá tener una clave primaria (Primary key).</li>
                    <li>Es decir que solo habrá una única clave primaria de ese tipo. No se podrá crear otra combinación.</li>
                </ul>
                <p>
                    <strong>Ejemplo llave primaria</strong>
                </p>
                <img style="width: 600px" src="/images/caso-de-estudio/img9.png" alt="">
                <p>
                    <strong>Foreing key.</strong> Definiciones y reglas generales
                </p>
                <ul>
                    <li>La clave foránea o Foreign key, debe ser del mismo tipo de dato que su campo relacionado.</li>
                    <li>El valor del campo definido como FK puede ser Null.</li>
                    <li>Una tabla puede tener más de un campo FK.</li>
                </ul>
                <p>
                    <strong>Ejemplo Foreign key</strong>
                </p>
                <img style="width: 600px" src="/images/caso-de-estudio/img10.png" alt="">
                <p>
                    <strong>Conceptos del modelo entidad relación</strong>
                </p>

                <div class="titulo" onclick="toggleParrafo(23)">
                    <span>Registros</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Guardan una serie de características similares o que pueden ser agrupados o clasificados dadas sus características comunes en grupos bien delimitados, en términos de abstracción como la extensión de la base de datos. Por ejemplo, es la lista de usuarios de una biblioteca, la lista de productos con sus características, la lista de tipos de documentos y su definición.</p>

                <div class="titulo" onclick="toggleParrafo(24)">
                    <span>Entidad (tabla)</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">La entidad es cualquier clase de objeto o conjunto de elementos presentes o no, en un contexto determinado dado por el sistema de información o las funciones y procesos que se definen en un plan de automatización. Dicho de otra forma, las entidades que constituyen las tablas de la base de datos permiten el almacenamiento de los ejemplares o registros del sistema, quedando recogidos bajo la denominación o título de la tabla o entidad. Por ejemplo, la entidad usuarios guarda los datos personales de los usuarios de la biblioteca, la entidad catálogo registra todos los libros catalogados, la entidad circulación todos los libros prestados y devueltos y así, sucesivamente, con todos los casos.</p>

                <div class="titulo" onclick="toggleParrafo(25)">
                    <span>Atributos - intención</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Son las características, rasgos y propiedades de una entidad, que toman como valor una instancia particular. Es decir, los atributos de una tabla son en realidad sus campos descriptivos, es el predicado que permite definir lo que se dice de un determinado sujeto. Por ejemplo, de una entidad o tabla catálogo, se pueden determinar los atributos título, subtítulo, título paralelo, otras formas del título, autor principal, otras menciones de responsabilidad, edición, mención de edición, editorial, lugar de publicación, fecha de publicación.</p>

                <div class="titulo" onclick="toggleParrafo(26)">
                    <span>Relación</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Vínculo que permite definir una dependencia entre los conjuntos de dos o más entidades. Esta es la relación entre la información contenida en los registros de varias tablas. Por ejemplo, los usuarios suelen clasificarse según una lista de tipos de usuarios, ya sean profesores, alumnos o investigadores. De esta forma, es posible emitir la relación entre el usuario Jorge Martínez, como alumno, y Enrique Valtierra, como profesor. Las relaciones son definidas de forma natural en un diagrama relacional para expresar un modelo cognitivo que dará lugar posteriormente a las interrelaciones de las entidades.</p>

                <div class="titulo" onclick="toggleParrafo(27)">
                    <span>Interrelación</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Las interrelaciones las constituyen los vínculos entre entidades, de forma tal que representan las relaciones definidas en el esquema relacional de forma efectiva. Esto no es solo la relación de los registros, sino de sus tablas y de las características de la interrelación entre las entidades, a través de un campo clave que actúa como código de identificación y referencia para relacionar (es decir, como nexo de unión y articulación de la relación). Los tipos de interrelaciones entre entidades o tablas se realizan aplicando las reglas de cardinalidad y modalidad.</p>

                <div class="titulo" onclick="toggleParrafo(28)">
                    <span>Entidades fuertes</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Las constituyen las tablas principales de la base de datos que contienen los registros principales del sistema de información y que requieren de entidades o tablas auxiliares para completar su descripción o información. Por ejemplo, la tabla usuario es una entidad fuerte en relación a la tabla tipos de usuarios, que es una entidad débil dada su condición auxiliar para clasificar a los usuarios registrados en la biblioteca.</p>

                <div class="titulo" onclick="toggleParrafo(29)">
                    <span>Entidades débiles</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Son entidades débiles las tablas auxiliares de una tabla principal a la que completan o complementan con la información de sus registros relacionados. Por ejemplo, también son consideradas entidades débiles las tablas intermedias que sirven para compartir información de varias tablas principales.</p>

                <div class="titulo" onclick="toggleParrafo(30)">
                    <span>Restricciones del MERs</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">
                    - Un único constructor (la relación). <br>
                    - La relación es un conjunto (en el sentido matemático) y, por lo tanto: <br><br>
                    - No pueden existir tuplas duplicadas. <br>
                    - Toda relación debe tener una llave primaria 1. <br>
                    - No hay noción de orden entre las tuplas o entre los atributos. <br>
                    - Los tributos de la llave primaria no pueden ser nulos.
                </p>

                <div class="titulo" onclick="toggleParrafo(31)">
                    <span>Llaves primarias</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">
                    <strong>Llave:</strong> atributo o conjunto de atributos cuyo valor es único y diferente para cada tupla, una tabla puede poseer más de una llave.
                    <br><br>
                    <strong>Llave candidata:</strong> es una llave tal que:
                    Es única (i.e., es una llave).
                    <br><br>
                   <strong> Es irreducible: </strong> no se pueden eliminar componentes de la llave sin destruir la unicidad.
                    <br><br>
                    Las llaves no se identifican dependiendo del estado o la instancia de la base de datos.
                    <br><br>
                    <strong>Llave compuesta:</strong> es una llave conformada por más de un atributo.
                    <br><br>
                    <strong>Llave primaria:</strong> llave candidata que se escoge en el modelo para identificar cada tupla.
                    <br><br>
                    <strong>Llaves alternas: </strong> las llaves candidatas que no fueron escogidas como llave primaria.
                    <br><br>
                    <strong>Llave foránea:</strong> atributo(s) de una relación r1 que hacen referencia a otra relación r2. Las FK permiten representar relaciones entre las entidades. r1 y r2 pueden ser la misma relación. Por ejemplo: personas (cc, nombre, apellido, teléfono, dirección, ciu_id) ciudades (id, nombre).
                    <br><br>
                    El atributo ciu_id en personas es una llave foránea que referencia al atributo id en la tabla ciudades.
                </p>

                <div class="titulo" onclick="toggleParrafo(32)">
                    <span>Integridad referencial</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Se denomina integridad referencial al tipo de interrelación que se produce entre tablas mediante un campo clave que deberá contener la cadena alfanumérica exacta al identificador de la tabla auxiliar para poder realizar la relación entre los registros. En caso contrario no se produce la relación. Además, se trata de un mecanismo que evita duplicidades e incorrecciones, pues la propiedad de integridad referencial conmina a que los datos de un usuario, además de su identificador ID, sean distintos al de los demás. Dicho de otra forma, no pueden existir dos registros iguales con los mismos datos.</p>

                <h2 id="Creando el modelo entidad relación">Creando el modelo entidad relación</h2>
                <p>
                    Desde Workbench una vez creado el nuevo modelo se puede empezar a agregar los objetos que se necesiten.
                </p>
                <p>
                    <strong>Agregando un nuevo diagrama</strong>
                </p>
                <img style="width: 600px" src="/images/caso-de-estudio/img11.jpg" alt="">
                <p>
                    <strong>Creación entidad o tabla</strong>
                </p>
                <img style="width: 600px" src="/images/caso-de-estudio/img12.jpg" alt="">
                <p>
                    El siguiente paso es crear las relaciones tal como se muestra en la figura siguiente:
                </p>
                <p>
                    <strong>Creación de relaciones entre tablas</strong>
                </p>
                <img style="width: 600px" src="/images/caso-de-estudio/img13.jpg" alt="">
            </section>
        </article>

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

            .recuadro {
                border: 2px solid #858585; /* Cambia el color del borde al que desees, #007bff es azul en este ejemplo */
                background-color: #1b1b1b; /* Cambia el color de fondo al que desees, #f0f0f0 es gris claro en este ejemplo */
                padding: 10px; /* Espacio interno alrededor del contenido del recuadro */
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
@endsection

@section('aside')
        @include('partials-bases-de-datos.estudio-de-caso.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">Caso de estudio</a></li>
            <li><a href="#Diseño modelo entidad relación">Diseño modelo entidad relación</a></li>
            <li><a href="#Modelo físico">Modelo físico</a></li>
            <li><a href="#Creando el modelo entidad relación">Creando el modelo entidad relación</a></li>
        </ul>

@endsection
