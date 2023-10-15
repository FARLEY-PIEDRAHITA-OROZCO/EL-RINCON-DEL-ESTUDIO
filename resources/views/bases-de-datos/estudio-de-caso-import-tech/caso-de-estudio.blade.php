@extends('../../layouts.sistemas')
@section('../../title', 'Estudio de caso import tech s.a.s')

@section('navbar')
    @include('partials.navbar-introduccion-estudio-de-caso-import-tech')
@endsection

@section('content')
    <h1 class="h1-content" id="1. Caso de estudio">1. Caso de estudio</h1>
    <br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Ih7CYH73mrM?si=Etij7__fH8SKZFgc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <br><br>
    <h2 class="h2-content" id="1.1 Diseño modelo entidad relación">1.1 Diseño modelo entidad relación</h2>
    <br>
    <p>
        Para el desarrollo del modelo se utilizará la herramienta Draw.io, a la cual pueden acceder en línea o descargar a sus computadoras sin ningún problema toda vez que es de licencia GPL, a través del link.
    </p>
    <br>
    <p>
        <a href="https://app.diagrams.net/">Descargar Draw.io</a>
    </p>
    <br>
    <p>
        El modelo entidad relación, introducido por Peter Chen en 1976, es el más utilizado para el diseño conceptual de bases de datos; este modelo está formado por un conjunto de conceptos que permiten describir la realidad mediante un conjunto de representaciones gráficas y lingüísticas.
    </p>
    <br>
    <p>
        <strong>Los siguientes son los elementos a utilizar para representar el modelo:</strong>
    </p>
    <br>
    <h2 class="h2-content">Elementos para la representación gráfica del modelo entidad relación</h2>
    <br>
    <img class="img-4 img-2" src="/images/estudio-de-caso/img2.svg" alt="">
    <br><br>
    <p>
        A continuación, se ilustra cómo se puede construir el modelo entidad relación con la herramienta propuesta.
    </p>
    <br>
    <h2 class="h2-content">Construcción del modelo entidad - relación</h2>
    <br>
    <img class="img-4  img-2" src="/images/estudio-de-caso/img3.jpg" alt="">
    <br><br>
    <p>
        Como se evidencia en la figura Construcción del modelo entidad - relación, se deben seleccionar los componentes a utilizar y se llevan al área de trabajo donde se crean las entidades con sus respectivos atributos y sus relaciones.
    </p>
    <br>
    <h2 class="h2-content">Diseño modelo entidad - relación</h2>
    <br>
    <img class="img-2" src="/images/estudio-de-caso/img4.svg" alt="">
    <br><br>
    <h2 class="h2-content" id="1.2 Modelo físico">1.2 Modelo físico</h2>
    <br>
    <p>
        Para la construcción del modelo de datos físico se utilizará la herramienta MySQL Workbench previamente instalada.
    </p>
    <br>
    <h2 class="h2-content">Creación de un nuevo modelo</h2>
    <br>
    <img class="img-2" src="/images/estudio-de-caso/img5.jpg" alt="">
    <br>
    <p>
        Para crear el modelo físico se hace en el menú principal Archivo (File) y en las opciones del menú se elige la opción New Model. Es importante tener claro cuáles son los tipos de datos disponibles para la creación de la base de datos en MySQL.
    </p>
    <br>
    <h2 class="h2-content">¿Qué es un tipo de dato?</h2>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/estudio-de-caso/img6.svg" alt="">
        <p style="text-align: start" class="parrafo">
            En ciencias de la computación un tipo de dato informático, o simplemente tipo, es un atributo de los datos que indica al ordenador (y/o al programador/programadora) sobre la clase de datos que se va a manejar. Esto incluye imponer restricciones en los datos, como qué valores pueden tomar y qué operaciones se pueden realizar.
        </p>
    </div>
    <br>
    <p>
        Los tipos de datos más comunes son:
    </p>
    <br>
    <ul class="dentro">
        <li class="lista">Números enteros.</li><br>
        <li class="lista">Números con signo (negativos).</li><br>
        <li class="lista">Números de coma flotante (decimales).</li><br>
        <li class="lista">Cadenas alfanuméricas (y unicodes).</li><br>
        <li class="lista">Estados, etc.</li><br>
    </ul>
    <p>
        Un tipo de dato es un espacio en memoria con restricciones. Por ejemplo, el tipo "int" representa, generalmente, un conjunto de enteros de 32 bits, cuyo rango va desde el -2.147.483.648 al 2.147.483.647, así como las operaciones que se pueden realizar con los enteros, como son la suma, la resta, y la multiplicación. Los colores, por su parte, se representan como tres bytes denotando la cantidad de rojo, verde y azul, y una cadena de caracteres representando el nombre del color (en este caso, las operaciones permitidas incluyen la adición y la sustracción, pero no la multiplicación).
    </p>
    <br>
    <p>
        Este es un concepto propio de la informática y, más específicamente, de los lenguajes de programación, aunque también se encuentra relacionado con nociones similares de la matemática y la lógica.
    </p>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/estudio-de-caso/img7.svg" alt="">
        <p style="text-align: start" class="parrafo">
            En un sentido amplio, un tipo de datos define un conjunto de valores y las operaciones sobre esos valores. Casi todos los lenguajes de programación explícitamente incluyen la notación del tipo de datos, aunque lenguajes diferentes pueden usar terminologías diferentes.
        </p>
    </div>
    <br>
    <p>
        La mayor parte de los lenguajes de programación permiten al programador definir tipos de datos adicionales, normalmente combinando múltiples elementos de otros tipos y definiendo las operaciones del nuevo tipo de dato. <strong>Por ejemplo</strong>, un programador puede crear un nuevo tipo de dato llamado "Persona", contemplando que el dato interpretado como Persona incluya un nombre y una fecha de nacimiento.
    </p>
    <br>
    <p>
        Un tipo de dato puede ser también visto como una limitación impuesta en la interpretación de los datos en un sistema de tipificación, describiendo la representación, la interpretación y la estructura de los valores u objetos almacenados en la memoria del ordenador. El sistema de tipificación usa información de los tipos de datos para comprobar la verificación de los programas que acceden o manipulan los datos.
    </p>
    <br>
    <p>
        <strong>Los tipos de datos que puede haber en un campo, se pueden agrupar en tres grandes grupos:</strong>
    </p>
    <br>
    <div class="div-2 ">
        <div class="div-3">
            <img  src="/images/estudio-de-caso/img8.svg" alt="">
            <p style="text-align: center">
                <strong>Tipos numéricos</strong>
            </p>
        </div>
        <div class="div-3">
            <img  src="/images/estudio-de-caso/img9.svg" alt="">
            <p style="text-align: center">
                <strong>Tipos de fecha</strong>
            </p>
        </div>
        <div class="div-3">
            <img  src="/images/estudio-de-caso/img10.svg" alt="">
            <p style="text-align: center">
                <strong>Tipos de cadena</strong>
            </p>
        </div>
    </div>
    <h2 class="h2-content">Tipos numéricos</h2>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/estudio-de-caso/img11.svg" alt="">
        <p style="text-align: start" class="parrafo">
            Existen tipos de datos numéricos, que se pueden dividir en dos grandes grupos, los que están en coma flotante (con decimales) y los que no.
        </p>
    </div>
    <br><br><br>
    <p>
        <strong>TinyInt:</strong> es un número entero con o sin signo. Con signo el rango de valores válidos va desde -128 a 127. Sin signo, el rango de valores es de 0 a 255.
    </p>
    <br>
    <p>
        <strong>BigInt:</strong> número entero con o sin signo. Con signo el rango de valores va desde -9.223.372.036.854.775.808 a 9.223.372.036.854.775.807. Sin signo el rango va desde 0 a 18.446.744.073.709.551.615.
    </p>
    <br>
    <p>
        <strong>Bit o Bool:</strong> un número entero que puede ser 0 o 1.
    </p>
    <br>
    <p>
        <strong>Float:</strong> número pequeño en coma flotante de precisión simple. Los valores válidos van desde -3.402823466E+38 a -1.175494351E-38, 0 y desde 1.175494351E-38 a 3.402823466E+38.
    </p>
    <br>
    <p>
       <strong>SmallInt:</strong> número entero con o sin signo. Con signo el rango de valores va desde -32.768 a 32.767. Sin signo, el rango de valores es de 0 a 65.535.
    </p>
    <br>
    <p>
        <strong>xReal, Double:</strong> número en coma flotante de precisión doble. Los valores permitidos van desde -1.7976931348623157E+308 a -2.2250738585072014E-308, 0 y desde 2.2250738585072014E-308 a 1.7976931348623157E+308.
    </p>
    <br>
    <p>
        <strong>MediumInt:</strong> número entero con o sin signo. Con signo el rango de valores va desde -8.388.608 a 8.388.607. Sin signo el rango va desde 0 a 16.777.215.
    </p>
    <br>
    <p>
        <strong>Decimal, Dec, Numeric:</strong> número en coma flotante desempaquetado. El número se almacena como una cadena.
    </p>
    <br>
    <p>
        <strong>Integer, Int:</strong> número entero con o sin signo. Con signo el rango de valores va desde -2.147.483.648 a 2.147.483.647. Sin signo el rango va desde 0 a 429.4967.295.
    </p>
    <br>
    <h2 class="h2-content">Tipo de datos numéricos</h2>
    <br>
    <img class="img-2" src="/images/estudio-de-caso/captura1.png" alt="">
    <br><br>
    <h2 class="h2-content">Tipos fecha</h2>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/estudio-de-caso/img12.svg" alt="">
        <p style="text-align: start" class="parrafo">
            A la hora de almacenar fechas, hay que tener en cuenta que MySQL no comprueba de una manera estricta si una fecha es válida o no. Simplemente comprueba que el mes está comprendido entre 0 y 12 y que el día está comprendido entre 0 y 31.
        </p>
    </div>
    <br><br>
    <p>
        <strong>Date:</strong> tipo fecha, almacena una fecha. El rango de valores va desde el 1 de enero del 1001 al 31 de diciembre de 9999. El formato de almacenamiento es de año-mes-día
    </p>
    <br>
    <p>
        <strong>Time:</strong> almacena una hora. El rango de horas va desde - 838 horas, 59 minutos y 59 segundos a 838 horas, 59 minutos y 59 segundos. El formato de almacenamiento es de 'HH:MM: SS'.
    </p>
    <br>
    <p>
        <strong>DateTime:</strong> combinación de fecha y hora. El rango de valores va desde el 1 de enero del 1001 a las 0 horas, 0 minutos y 0 segundos al 31 de diciembre del 9999 a las 23 horas, 59 minutos y 59 segundos. El formato de almacenamiento es de año-mes-dia horas-minutos-segundos.
    </p>
    <br>
    <p>
        <strong>Year:</strong> almacena un año. El rango de valores permitidos van desde el año 1901 al año 2155. El campo puede tener tamaño dos o tamaño 4 dependiendo de si se quiere almacenar el año con dos o cuatro dígitos.
    </p>
    <br>
    <p>
        <strong>TimeStamp:</strong> combinación de fecha y hora. El rango va desde el 1 de enero de 1970 al año 2037. El formato de almacenamiento depende del tamaño del campo.
    </p>
    <br>
    <h2 class="h2-content">Tipo de datos fecha</h2>
    <br>
    <img class="img-2" src="/images/estudio-de-caso/captura2.png" alt="">
    <br><br>
    <h2 class="h2-content">Tipos de cadena</h2>
    <br>
    <p>
        <strong>Char(n):</strong> almacena una cadena de longitud fija y podrá contener desde 0 a 255 caracteres.
    </p>
    <br>
    <p>
        <strong>TinyText y TinyBlob:</strong> columna con una longitud máxima de 255 caracteres.
    </p>
    <br>
    <p>
        <strong>VarChar(n):</strong> almacena una cadena de longitud variable, podrá contener desde 0 a 255 caracteres.
    </p>
    <br>
    <p>
        <strong>Blob y Text:</strong> un texto con un máximo de 65.535 caracteres.
    </p>
    <br>
    <p>
        Dentro de los tipos de cadena se pueden distinguir otros dos subtipos, los <strong>tipos Test</strong> y los tipos <strong>BLOB (Binary Large Object)</strong>.
    </p>
    <br>
    <p>
        <strong>MediumBlob y MediumText:</strong> un texto con un máximo de 16.777.215 caracteres.
    </p>
    <br>
    <p>
        La diferencia entre un tipo y otro es el tratamiento que reciben a la hora de realizar ordenamientos y comparaciones. Mientras que el tipo test se ordena sin tener en cuenta las mayúsculas y las minúsculas, el tipo BLOB se ordena teniéndolas en cuenta.
    </p>
    <br>
    <p>
        <strong>LongBlob y LongText:</strong> un texto con un máximo de caracteres 4.294.967.295. Hay que tener en cuenta que debido a los protocolos de comunicación los paquetes pueden tener un máximo de 16 Mb.
    </p>
    <br>
    <p>
        Los tipos BLOB se utilizan para almacenar datos binarios como pueden ser ficheros.
    </p>
    <br>
    <p>
        <strong>Enum:</strong> campo que puede tener un único valor de una lista que se especifica. El tipo Enum acepta hasta 65.535 valores distintos.
    </p>
    <br>
    <p>
        <strong>Set:</strong> un campo que puede contener ninguno, uno o varios valores de una lista. Esta puede tener un máximo de 64 valores.
    </p>
    <br>
    <h2 class="h2-content">Tipos de datos cadena</h2>
    <br>
    <img class="img-2" src="/images/estudio-de-caso/captura3.png" alt="">
    <br><br>
    <h2 class="h2-content">Restricciones y propiedades de los campos</h2>
    <br>
    <p>
        <strong>Primary key.</strong> Definiciones y reglas generales
    </p>
    <br>
    <ul class="dentro">
        <li class="lista">La clave primaria o Primary key, identifica de manera unívoca (única) a cada registro de una tabla.</li><br>
        <li class="lista">El valor que contiene la columna definida como Primary key, debe ser único.</li><br>
        <li class="lista">El valor debe ser Not Null (no permitirá valores nulos).</li><br>
        <li class="lista">Una tabla puede tener más de un campo PK, a la que se le llamará clave compuesta.</li><br>
        <li class="lista">Sea simple o compuesta, cada tabla solo podrá tener una clave primaria (Primary key).</li><br>
        <li class="lista">Es decir que solo habrá una única clave primaria de ese tipo. No se podrá crear otra combinación.</li><br>
    </ul>
    <h2 class="h2-content">Ejemplo llave primaria</h2>
    <br>
    <img class="img-2" src="/images/estudio-de-caso/captura4.png" alt="">
    <br><br>
    <p>
        <strong>Foreing key.</strong> Definiciones y reglas generales
    </p>
    <br>
    <ul class="dentro">
        <li class="lista">La clave foránea o Foreign key, debe ser del mismo tipo de dato que su campo relacionado.</li><br>
        <li class="lista">El valor del campo definido como FK puede ser Null.</li><br>
        <li class="lista">Una tabla puede tener más de un campo FK.</li><br>
    </ul>
    <h2 class="h2-content">Ejemplo Foreign key</h2>
    <br>
    <img class="img-2" src="/images/estudio-de-caso/captura5.png" alt="">
    <br><br>
    <h2 class="h2-content">Conceptos del modelo entidad relación</h2>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/estudio-de-caso/img20.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Registros:</strong> Guardan una serie de características similares o que pueden ser agrupados o clasificados dadas sus características comunes en grupos bien delimitados, en términos de abstracción como la extensión de la base de datos. Por ejemplo, es la lista de usuarios de una biblioteca, la lista de productos con sus características, la lista de tipos de documentos y su definición.
        </p>
    </div>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/estudio-de-caso/img21.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Entidad (tabla):</strong> La entidad es cualquier clase de objeto o conjunto de elementos presentes o no, en un contexto determinado dado por el sistema de información o las funciones y procesos que se definen en un plan de automatización. Dicho de otra forma, las entidades que constituyen las tablas de la base de datos permiten el almacenamiento de los ejemplares o registros del sistema, quedando recogidos bajo la denominación o título de la tabla o entidad. Por ejemplo, la entidad usuarios guarda los datos personales de los usuarios de la biblioteca, la entidad catálogo registra todos los libros catalogados, la entidad circulación todos los libros prestados y devueltos y así, sucesivamente, con todos los casos.
        </p>
    </div>
    <br>

    <div class="div-1">
        <img class="imagen" src="/images/estudio-de-caso/img22.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Atributos - intención:</strong> Son las características, rasgos y propiedades de una entidad, que toman como valor una instancia particular. Es decir, los atributos de una tabla son en realidad sus campos descriptivos, es el predicado que permite definir lo que se dice de un determinado sujeto. Por ejemplo, de una entidad o tabla catálogo, se pueden determinar los atributos título, subtítulo, título paralelo, otras formas del título, autor principal, otras menciones de responsabilidad, edición, mención de edición, editorial, lugar de publicación, fecha de publicación.
        </p>
    </div>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/estudio-de-caso/img23.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Relación:</strong> Vínculo que permite definir una dependencia entre los conjuntos de dos o más entidades. Esta es la relación entre la información contenida en los registros de varias tablas. Por ejemplo, los usuarios suelen clasificarse según una lista de tipos de usuarios, ya sean profesores, alumnos o investigadores. De esta forma, es posible emitir la relación entre el usuario Jorge Martínez, como alumno, y Enrique Valtierra, como profesor. Las relaciones son definidas de forma natural en un diagrama relacional para expresar un modelo cognitivo que dará lugar posteriormente a las interrelaciones de las entidades.
        </p>
    </div>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/estudio-de-caso/img24.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Interrelación:</strong> Las interrelaciones las constituyen los vínculos entre entidades, de forma tal que representan las relaciones definidas en el esquema relacional de forma efectiva. Esto no es solo la relación de los registros, sino de sus tablas y de las características de la interrelación entre las entidades, a través de un campo clave que actúa como código de identificación y referencia para relacionar (es decir, como nexo de unión y articulación de la relación). Los tipos de interrelaciones entre entidades o tablas se realizan aplicando las reglas de cardinalidad y modalidad.
        </p>
    </div>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/estudio-de-caso/img25.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Entidades fuertes:</strong> Las constituyen las tablas principales de la base de datos que contienen los registros principales del sistema de información y que requieren de entidades o tablas auxiliares para completar su descripción o información. Por ejemplo, la tabla usuario es una entidad fuerte en relación a la tabla tipos de usuarios, que es una entidad débil dada su condición auxiliar para clasificar a los usuarios registrados en la biblioteca.
        </p>
    </div>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/estudio-de-caso/img26.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Entidades débiles:</strong> Son entidades débiles las tablas auxiliares de una tabla principal a la que completan o complementan con la información de sus registros relacionados. Por ejemplo, también son consideradas entidades débiles las tablas intermedias que sirven para compartir información de varias tablas principales.
        </p>
    </div>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/estudio-de-caso/img27.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Restricciones del MER:</strong> Un único constructor (la relación).
            La relación es un conjunto (en el sentido matemático) y, por lo tanto:

            ● No pueden existir tuplas duplicadas.
            ● Toda relación debe tener una llave primaria 1.
            ● No hay noción de orden entre las tuplas o entre los atributos.
            ● Los tributos de la llave primaria no pueden ser nulos.
        </p>
    </div>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/estudio-de-caso/img28.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Llaves primarias:</strong>
            ● Llave: atributo o conjunto de atributos cuyo valor es único y diferente para cada tupla, una tabla puede poseer más de una llave.

            ● Llave candidata: es una llave tal que:
            Es única (i.e., es una llave).

            ● Es irreducible: no se pueden eliminar componentes de la llave sin destruir la unicidad.

            ● Las llaves no se identifican dependiendo del estado o la instancia de la base de datos.

            ● Llave compuesta: es una llave conformada por más de un atributo.

            ● Llave primaria: llave candidata que se escoge en el modelo para identificar cada tupla.

            ● Llaves alternas: las llaves candidatas que no fueron escogidas como llave primaria.

            ● Llave foránea: atributo(s) de una relación r1 que hacen referencia a otra relación r2. Las FK permiten representar relaciones entre las entidades. r1 y r2 pueden ser la misma relación. Por ejemplo: personas (cc, nombre, apellido, teléfono, dirección, ciu_id) ciudades (id, nombre).

            ● El atributo ciu_id en personas es una llave foránea que referencia al atributo id en la tabla ciudades.
        </p>
    </div>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/estudio-de-caso/img29.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Integridad referencial:</strong> Se denomina integridad referencial al tipo de interrelación que se produce entre tablas mediante un campo clave que deberá contener la cadena alfanumérica exacta al identificador de la tabla auxiliar para poder realizar la relación entre los registros. En caso contrario no se produce la relación. Además, se trata de un mecanismo que evita duplicidades e incorrecciones, pues la propiedad de integridad referencial conmina a que los datos de un usuario, además de su identificador ID, sean distintos al de los demás. Dicho de otra forma, no pueden existir dos registros iguales con los mismos datos.
        </p>
    </div>
    <br>
    <h2 class="h2-content" id="1.3 Creando el modelo entidad relación">1.3 Creando el modelo entidad relación</h2>
    <br>
    <p>
        Desde Workbench una vez creado el nuevo modelo se puede empezar a agregar los objetos que se necesiten.
    </p>
    <br>
    <h2 class="h2-content">Agregando un nuevo diagrama</h2>
    <br>
    <img class="img-2" src="/images/estudio-de-caso/img30.jpg" alt="">
    <br>
    <h2 class="h2-content">Creación entidad o tabla</h2>
    <br>
    <img class="img-2" src="/images/estudio-de-caso/img31.jpg" alt="">
    <br>
    <p>
        El siguiente paso es crear las relaciones tal como se muestra en la figura siguiente:
    </p>
    <br>
    <h2 class="h2-content">Creación de relaciones entre tablas</h2>
    <br>    <img class="img-2" src="/images/estudio-de-caso/img32.jpg" alt="">



    <style>

        ul.dentro {list-style-position:inside;}

        ul.fuera {list-style-position:outside;}

        .lista{
            text-align: start
        }

        .imagen{
            width: 100px;
            height: auto;
            margin-right: 10px;
            float: left;

        }

        .div-1{
            width: 100%;
            height: auto;
            flex-wrap: wrap;
        }

        img{
            width: 100px;
            height: 100px;
        }

        .div-2{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .div-3{
            width: 160px;
            height: 160px;
            margin: 10px;
        }

    </style>

@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#1. Caso de estudio">1. Caso de estudio</a><br><br>
    <a href="#1.1 Diseño modelo entidad relación">1.1 Diseño modelo entidad relación</a><br><br>
    <a href="#1.2 Modelo físico">1.2 Modelo físico</a><br><br>
    <a href="#1.3 Creando el modelo entidad relación">1.3 Creando el modelo entidad relación</a><br><br>
@endsection
