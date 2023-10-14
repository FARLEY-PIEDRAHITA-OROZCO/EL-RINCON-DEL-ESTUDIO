@extends('../../layouts.sistemas')
@section('../../title', 'Introducción a los sistemas de gestión de bases de datos MySQL')

@section('navbar')
    @include('partials.navbar-introduccion-a-bases-de-datos')
@endsection

@section('content')
    <h1 class="h1-content" id="3. Sistemas de gestión de bases de datos">3. Sistemas de gestión de bases de datos</h1>
    <br>
    <img class="img-4 img-2" src="/images/introduccion-a-bases-de-datos/img16.svg" alt="">
    <br>
    <h2 class="h2-content" id="3.1 Introducción">3.1 Introducción</h2>
    <br>
    <p>
        Un gestor de base de datos o SGBD es una colección de programas, cuyo objetivo es servir de interfaz entre la base de datos, el usuario y las aplicaciones. Se compone de un lenguaje de definición de datos, de un lenguaje de manipulación de datos y de un lenguaje de consulta.
    </p>
    <br>
    <h2 class="h2-content" id="3.2 Características">3.2 Características</h2>
    <br>
    <p>
        Proveer a los administradores las herramientas que les permitan ejecutar tareas de mantenimiento y administración de los datos; algunas de sus características son:
    </p>
    <br>

    <div class="div-1">
        <img class="imagen" src="/images/introduccion-a-bases-de-datos/img17.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Control de la redundancia de datos</strong> Consiste en lograr una mínima cantidad de espacio de almacenamiento para almacenar los datos evitando la duplicación de la información. De esta manera, se logran ahorros en el tiempo de procesamiento de la información, se tendrán menos inconsistencias, menores costos operativos y hará el mantenimiento más fácil.
        </p>
    </div>
    <br><br>
    <div class="div-1">
        <img class="imagen" src="/images/introduccion-a-bases-de-datos/img18.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Compartimiento de datos</strong> Una de las principales características de las bases de datos, es que los datos pueden ser compartidos entre muchos usuarios simultáneamente, proveyendo, de esta manera, máxima eficiencia.
        </p>
    </div>
    <br><br>
    <div class="div-1">
        <img class="imagen" src="/images/introduccion-a-bases-de-datos/img19.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Mantenimiento de la integridad</strong> La integridad de los datos es la que garantiza la precisión o exactitud de la información contenida en una base de datos. Los datos interrelacionados deben siempre representar información correcta a los usuarios.
        </p>
    </div>
    <br><br>
    <div class="div-1">
        <img class="imagen" src="/images/introduccion-a-bases-de-datos/img20.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Soporte para control de transacciones y recuperación de fallas</strong> Se conoce como transacción toda operación que se haga sobre la base de datos; las transacciones deben ser controladas de manera que no alteren la integridad de la base de datos. La recuperación de fallas tiene que ver con la capacidad de un sistema DBMS de recuperar la información que se haya perdido durante una falla en el software o en el hardware.
        </p>
    </div>
    <br><br>
    <div class="div-1">
        <img class="imagen" src="/images/introduccion-a-bases-de-datos/img21.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Independencia de los datos</strong> En las aplicaciones basadas en archivos, el programa de aplicación debe conocer tanto la organización de los datos como las técnicas que le permiten acceder a los datos. En los sistemas DBMS los programas de aplicación no necesitan conocer la organización de los datos en el disco duro, este es totalmente independiente de ello.
        </p>
    </div>
    <br><br>
    <div class="div-1">
        <img class="imagen" src="/images/introduccion-a-bases-de-datos/img22.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Seguridad</strong> La disponibilidad de los datos puede ser restringida a ciertos usuarios. Según los privilegios que posea cada usuario de la base de datos, podrá acceder a mayor información que otros.
        </p>
    </div>
    <br><br><br>
    <div class="div-1">
        <img class="imagen" src="/images/introduccion-a-bases-de-datos/img23.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Velocidad</strong> Los sistemas DBMS modernos poseen altas velocidades de respuesta y proceso.
        </p>
    </div>
    <br><br><br><br>
    <div class="div-1">
        <img class="imagen" src="/images/introduccion-a-bases-de-datos/img24.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Independencia del hardware</strong> La mayoría de los sistemas DBMS están disponibles para ser instalados en múltiples plataformas de hardware.
        </p>
    </div>
    <br><br><br>
    <h2 class="h2-content" id="3.3 MySQL">3.3 MySQL</h2>
    <br>
    <p>
        En cuanto a la definición general, MySQL es un sistema de gestión de bases de datos relacionales de código abierto (RDBMS, por sus siglas en inglés) con un modelo cliente-servidor, cuya sigla en inglés se traslada a My Structured Query Language o lenguaje de consulta estructurado.
    </p>
    <br>
    <p>
        Código abierto significa que se puede usar y modificar con libertad, es decir, cualquiera puede instalar el software. También se puede aprender y personalizar el código fuente para que se adapte mejor a las necesidades; sin embargo, la GPL (licencia pública de GNU) determina lo que se puede hacer según las condiciones. La versión con licencia comercial está disponible si se requiere de una propiedad más flexible y un soporte avanzado.
    </p>
    <br>
    <h2 class="h2-content" id="3.3.1. Características">3.3.1. Características</h2>
    <br>
    <p>
        MySQL es un sistema de base de datos relacional, lo cual quiere decir que archiva datos en tablas separadas en lugar de guardar todos los datos en un gran archivo, esto permite tener mayor velocidad y flexibilidad. Como estas tablas están relacionadas de formas definidas, se hace posible combinar distintos datos en varias tablas y conectarlos.
    </p>
    <br>
    <p>
        Cualquier persona puede utilizar MySQL y crear modificaciones descargando el código fuente con el fin de ajustarlo a su medida y para su uso, pues es un software de código abierto y se establece el GPL (General Public License) en donde se define lo que un usuario puede realizar o no con el software. Si un usuario no se ajusta a las medidas del GPL o requiere el uso del software para aplicaciones comerciales, puede comprar una versión comercial licenciada.
    </p>
    <br>
    <ul class="dentro">
        <li class="lista">Permite escoger múltiples motores de almacenamiento para cada tabla.</li><br>
        <li class="lista">Agrupación de transacciones, pudiendo reunirlas de forma múltiple desde varias conexiones con el fin de incrementar el número de transacciones por segundo.</li><br>
        <li class="lista">Conectividad segura.</li><br>
        <li class="lista">Ejecución de transacciones y uso de claves foráneas.</li><br>
        <li class="lista">Presenta un amplio subconjunto del lenguaje SQL.</li><br>
        <li class="lista">Replicación.</li><br>
        <li class="lista">Disponible en casi todas las plataformas o sistemas.</li><br>
        <li class="lista">Búsqueda e indexación de campos de texto.</li><br>
        <li class="lista">Utiliza varias herramientas para portabilidad.</li><br>
        <li class="lista">Tablas hash en memorias temporales.</li><br>
        <li class="lista">Uso de tablas en disco b-tree para búsquedas rápidas con compresión de índice.</li><br>
        <li class="lista">Ofrece un sistema de contraseñas y privilegios seguros de verificación basado en el host y tráfico de contraseñas encriptado al conectarse a un servidor.</li><br>
        <li class="lista">Uso de multihilos mediante hilos de Kernel.</li><br>
        <li class="lista">Soporta gran cantidad de datos, incluso con más de 50 millones de registros.</li><br>
        <li class="lista">En las últimas versiones, se permiten hasta 64 índices por tablas. Cada índice puede consistir desde 1 a 16 columnas o partes de columnas. El máximo ancho de límite es de 1.000 bytes.</li><br>
    </ul>
    <br>
    <h2 class="h2-content" id="3.3.2. Ventajas">3.3.2. Ventajas</h2>
    <br>
    <p>
        A continuación, se presentan algunas de las ventajas de utilizar MySQL:
    </p>
    <br>
    <ul class="dentro">
        <li class="lista">MySQL es de uso libre y gratuito.</li><br>
        <li class="lista">Software con licencia GPL.</li><br>
        <li class="lista">Bajo costo en requerimientos para la elaboración y ejecución del programa.</li><br>
        <li class="lista">No se necesita disponer de hardware o software de alto rendimiento para la ejecución del programa.</li><br>
        <li class="lista">Velocidad al realizar las operaciones y buen rendimiento.</li><br>
        <li class="lista">Facilidad de instalación y configuración.</li><br>
        <li class="lista">Soporte en casi el 100% de los sistemas operativos actuales.</li><br>
        <li class="lista">Entorno con seguridad y encriptación.</li><br>
        <li class="lista">Baja probabilidad de corrupción de datos.</li><br>
    </ul>
    <br>
    <h2 class="h2-content" id="3.3.3. Modelo cliente servidor">3.3.3. Modelo cliente servidor</h2>
    <br>
    <p>
        La arquitectura cliente servidor tiene dos partes claramente diferenciadas, por un lado, la parte del servidor y por otro de cliente o grupo de clientes donde lo habitual es que un servidor sea una máquina bastante potente con un hardware y software específicos que actúan como depósito de datos y funcione a manera de un sistema gestor de base de datos o aplicaciones.
    </p>
    <br>
    <p>
        En esta arquitectura los clientes suelen ser estaciones de trabajo que solicitan varios servicios al servidor, mientras que un servidor es una máquina que actúa como depósito de datos y funciona como un sistema gestor de base de datos, este se encarga de dar la respuesta demandada por el cliente.
    </p>
    <br>
    <p>
        Para entender este modelo se nombrarán y definirán algunos conceptos básicos que lo conforman.
    </p>
    <br>
    <div class="div-1">
        <img class="imagen" src="/images/introduccion-a-bases-de-datos/img26.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Red</strong> Conjunto de clientes, servidores y base de datos unidos de una manera física o no física en el que existen protocolos de transmisión de información establecidos.
        </p>
    </div>
    <br><br><br>
    <div class="div-1">
        <img class="imagen" src="/images/introduccion-a-bases-de-datos/img27.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Cliente</strong> Este concepto hace referencia a un demandante de servicios, puede ser un ordenador como también una aplicación informática, la cual requiere información proveniente de la red para funcionar.
        </p>
    </div>
    <br><br><br>
    <div class="div-1">
        <img class="imagen" src="/images/introduccion-a-bases-de-datos/img28.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Servidor</strong> Es un proveedor de servicios y este a su vez puede ser un ordenador o una aplicación informática la cual envía información a los demás agentes de la red.
        </p>
    </div>
    <br><br><br><br>
    <div class="div-1">
        <img class="imagen" src="/images/introduccion-a-bases-de-datos/img29.svg" alt="">
        <p style="text-align: start" class="parrafo">
            <strong>Protocolo</strong> Conjunto de normas o reglas y pasos establecidos de manera clara y concreta sobre el flujo de información en una red estructurada.
        </p>
    </div>
    <br><br><br>
    <img class="img-4 img-2" src="/images/introduccion-a-bases-de-datos/img30.png" alt="">
    <p style="text-align: center">
        <strong>Modelo cliente servidor</strong>
    </p>


    <style>
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

        ul.dentro {
            list-style-position:inside;
            height: auto;
            width: auto;
        }

        ul.fuera {list-style-position:outside;}

        .lista{
            text-align: start
        }

    </style>

@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#3. Sistemas de gestión de bases de datos">3. Sistemas de gestión de bases de datos</a><br><br>
    <a href="#3.1 Introducción">3.1 Introducción</a><br><br>
    <a href="#3.2 Características">3.2 Características</a><br><br>
    <a href="#3.3 MySQL">3.3 MySQL</a><br><br>
    <a href="#3.3.1. Características">3.3.1. Características</a><br><br>
    <a href="#3.3.3. Modelo cliente servidor">3.3.3. Modelo cliente servidor</a><br><br>
@endsection
