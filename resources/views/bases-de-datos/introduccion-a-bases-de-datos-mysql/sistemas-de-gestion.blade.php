@extends('layouts.articulos')
@section('title', 'Introducción a bases de datos MySQL')
@section('content')

        <article>
            <h1 id="introduccion">Sistemas de gestión de bases de datos</h1>
            <p class="metadata">Publicado el 26 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <br>
                <img style="width: 600px" src="/images/introduccion-a-bases-de-datos/img16.svg" alt="">
                <h2 id=" Introducción"> Introducción</h2>
                <p>
                    Un gestor de base de datos o SGBD es una colección de programas, cuyo objetivo es servir de interfaz entre la base de datos, el usuario y las aplicaciones. Se compone de un lenguaje de definición de datos, de un lenguaje de manipulación de datos y de un lenguaje de consulta.
                </p>
                <h2 id="Características">Características</h2>
                <p>
                    Proveer a los administradores las herramientas que les permitan ejecutar tareas de mantenimiento y administración de los datos; algunas de sus características son:
                </p>

                <div class="titulo" onclick="toggleParrafo(1)">
                    <span>Control de la redundancia de datos</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Consiste en lograr una mínima cantidad de espacio de almacenamiento para almacenar los datos evitando la duplicación de la información. De esta manera, se logran ahorros en el tiempo de procesamiento de la información, se tendrán menos inconsistencias, menores costos operativos y hará el mantenimiento más fácil.</p>

                <div class="titulo" onclick="toggleParrafo(2)">
                    <span>Compartimiento de datos</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Una de las principales características de las bases de datos, es que los datos pueden ser compartidos entre muchos usuarios simultáneamente, proveyendo, de esta manera, máxima eficiencia.</p>

                <div class="titulo" onclick="toggleParrafo(3)">
                    <span>Mantenimiento de la integridad</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">La integridad de los datos es la que garantiza la precisión o exactitud de la información contenida en una base de datos. Los datos interrelacionados deben siempre representar información correcta a los usuarios.</p>

                <div class="titulo" onclick="toggleParrafo(4)">
                    <span>Soporte para control de transacciones y recuperación de fallas</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Se conoce como transacción toda operación que se haga sobre la base de datos; las transacciones deben ser controladas de manera que no alteren la integridad de la base de datos. La recuperación de fallas tiene que ver con la capacidad de un sistema DBMS de recuperar la información que se haya perdido durante una falla en el software o en el hardware.</p>

                <div class="titulo" onclick="toggleParrafo(5)">
                    <span>Independencia de los datos</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">En las aplicaciones basadas en archivos, el programa de aplicación debe conocer tanto la organización de los datos como las técnicas que le permiten acceder a los datos. En los sistemas DBMS los programas de aplicación no necesitan conocer la organización de los datos en el disco duro, este es totalmente independiente de ello.</p>

                <div class="titulo" onclick="toggleParrafo(6)">
                    <span>Seguridad</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">La disponibilidad de los datos puede ser restringida a ciertos usuarios. Según los privilegios que posea cada usuario de la base de datos, podrá acceder a mayor información que otros.</p>

                <div class="titulo" onclick="toggleParrafo(7)">
                    <span>Velocidad</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Los sistemas DBMS modernos poseen altas velocidades de respuesta y proceso.</p>

                <div class="titulo" onclick="toggleParrafo(8)">
                    <span>Independencia del hardware</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Independencia del hardware</p>

                <h2 id="MySQL">MySQL</h2>
                <p>
                    En cuanto a la definición general, MySQL es un sistema de gestión de bases de datos relacionales de código abierto (RDBMS, por sus siglas en inglés) con un modelo cliente-servidor, cuya sigla en inglés se traslada a My Structured Query Language o lenguaje de consulta estructurado.
                </p>
                <p>
                    Código abierto significa que se puede usar y modificar con libertad, es decir, cualquiera puede instalar el software. También se puede aprender y personalizar el código fuente para que se adapte mejor a las necesidades; sin embargo, la GPL (licencia pública de GNU) determina lo que se puede hacer según las condiciones. La versión con licencia comercial está disponible si se requiere de una propiedad más flexible y un soporte avanzado.
                </p>
                <h2 id="Características MySQL">Características MySQL</h2>
                <p>
                    MySQL es un sistema de base de datos relacional, lo cual quiere decir que archiva datos en tablas separadas en lugar de guardar todos los datos en un gran archivo, esto permite tener mayor velocidad y flexibilidad. Como estas tablas están relacionadas de formas definidas, se hace posible combinar distintos datos en varias tablas y conectarlos.
                </p>
                <p>
                    Cualquier persona puede utilizar MySQL y crear modificaciones descargando el código fuente con el fin de ajustarlo a su medida y para su uso, pues es un software de código abierto y se establece el GPL (General Public License) en donde se define lo que un usuario puede realizar o no con el software. Si un usuario no se ajusta a las medidas del GPL o requiere el uso del software para aplicaciones comerciales, puede comprar una versión comercial licenciada.
                </p>
                <p>
                    Algunas de sus características más importantes son:
                </p>
                <ol>
                    <li>Permite escoger múltiples motores de almacenamiento para cada tabla.</li>
                    <li>Agrupación de transacciones, pudiendo reunirlas de forma múltiple desde varias conexiones con el fin de incrementar el número de transacciones por segundo.</li>
                    <li>Conectividad segura.</li>
                    <li>Ejecución de transacciones y uso de claves foráneas.</li>
                    <li>Presenta un amplio subconjunto del lenguaje SQL.</li>
                    <li>Replicación.</li>
                    <li>Disponible en casi todas las plataformas o sistemas.</li>
                    <li>Búsqueda e indexación de campos de texto.</li>
                    <li>Utiliza varias herramientas para portabilidad.</li>
                    <li>Tablas hash en memorias temporales.</li>
                    <li>Uso de tablas en disco b-tree para búsquedas rápidas con compresión de índice.</li>
                    <li>Ofrece un sistema de contraseñas y privilegios seguros de verificación basado en el host y tráfico de contraseñas encriptado al conectarse a un servidor.</li>
                    <li>Uso de multihilos mediante hilos de Kernel.</li>
                    <li>Soporta gran cantidad de datos, incluso con más de 50 millones de registros.</li>
                    <li>En las últimas versiones, se permiten hasta 64 índices por tablas. Cada índice puede consistir desde 1 a 16 columnas o partes de columnas. El máximo ancho de límite es de 1.000 bytes.</li>
                </ol>
                <h2 id="Ventajas">Ventajas</h2>
                <p>
                    A continuación, se presentan algunas de las ventajas de utilizar MySQL:
                </p>
                <ul>
                    <li>MySQL es de uso libre y gratuito.</li>
                    <li>Software con licencia GPL.</li>
                    <li>Bajo costo en requerimientos para la elaboración y ejecución del programa.</li>
                    <li>No se necesita disponer de hardware o software de alto rendimiento para la ejecución del programa.</li>
                    <li>Velocidad al realizar las operaciones y buen rendimiento.</li>
                    <li>Facilidad de instalación y configuración.</li>
                    <li>Soporte en casi el 100% de los sistemas operativos actuales.</li>
                    <li>Entorno con seguridad y encriptación.</li>
                    <li>Baja probabilidad de corrupción de datos.</li>
                </ul>
                <h2 id="Modelo cliente servidor">Modelo cliente servidor</h2>
                <p>
                    La arquitectura cliente servidor tiene dos partes claramente diferenciadas, por un lado, la parte del servidor y por otro de cliente o grupo de clientes donde lo habitual es que un servidor sea una máquina bastante potente con un hardware y software específicos que actúan como depósito de datos y funcione a manera de un sistema gestor de base de datos o aplicaciones.
                </p>
                <p>
                    En esta arquitectura los clientes suelen ser estaciones de trabajo que solicitan varios servicios al servidor, mientras que un servidor es una máquina que actúa como depósito de datos y funciona como un sistema gestor de base de datos, este se encarga de dar la respuesta demandada por el cliente.
                </p>
                <p>
                    Para entender este modelo se nombrarán y definirán algunos conceptos básicos que lo conforman.
                </p>

                <div class="contenedor">
                    <img class="imagen" src="/images/introduccion-a-bases-de-datos/img26.svg" alt="Descripción de la imagen">
                    <p>
                        <strong>Red</strong><br>
                        Conjunto de clientes, servidores y base de datos unidos de una manera física o no física en el que existen protocolos de transmisión de información establecidos.
                    </p>
                </div>

                <div class="contenedor">
                    <img class="imagen" src="/images/introduccion-a-bases-de-datos/img27.svg" alt="Descripción de la imagen">
                    <p>
                       <strong> Cliente</strong>
                        Este concepto hace referencia a un demandante de servicios, puede ser un ordenador como también una aplicación informática, la cual requiere información proveniente de la red para funcionar.
                    </p>
                </div>

                <div class="contenedor">
                    <img class="imagen" src="/images/introduccion-a-bases-de-datos/img28.svg" alt="Descripción de la imagen">
                    <p>
                        <strong>Servidor</strong>
                        Es un proveedor de servicios y este a su vez puede ser un ordenador o una aplicación informática la cual envía información a los demás agentes de la red.
                    </p>
                </div>

                <div class="contenedor">
                    <img class="imagen" src="/images/introduccion-a-bases-de-datos/img29.svg" alt="Descripción de la imagen">
                    <p>
                        <strong>Protocolo</strong>
                        Conjunto de normas o reglas y pasos establecidos de manera clara y concreta sobre el flujo de información en una red estructurada.
                    </p>
                </div>
                <img style="width: 600px" src="/images/introduccion-a-bases-de-datos/img30.png" alt="">
                <p style="text-align: center">
                    Modelo cliente servidor
                </p>

            </section>
        </article>

        <style>

        .contenedor {
                    display: flex;
                    align-items: center;
                }

        .imagen {
            width: 200px; /* Ajusta el ancho de la imagen según tus necesidades */
            margin-right: 20px; /* Espacio entre la imagen y el texto */
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
@endsection

@section('aside')
        @include('partials-bases-de-datos.introduccion-a-bases-de-datos-mysql.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#Introducción">Introducción</a></li>
            <li><a href="#Características">Características</a></li>
            <li><a href="#MySQL">MySQL</a></li>
            <li><a href="#Características MySQL">Características MySQL</a></li>
            <li><a href="#Ventajas">Ventajas</a></li>
            <li><a href="#Modelo cliente servidor">Modelo cliente servidor</a></li>
        </ul>

@endsection
