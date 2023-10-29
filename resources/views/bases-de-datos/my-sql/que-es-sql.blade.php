@extends('layouts.articulos')
@section('title', 'El lenguaje SQL')
@section('content')

        <article>
            <h1 id="introduccion">¿Qué es SQL?</h1>
            <p class="metadata">Publicado el 29 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <p>
                    SQL (por sus siglas en inglés Structured Query Language; en español lenguaje de consulta estructurada) es un lenguaje que da acceso a un sistema de gestión de bases de datos relacionales que permite especificar diversos tipos de operaciones en ellos.
                </p>
                <p>
                    Es un lenguaje estándar consolidado por el Instituto Americano de Normas (ANSI) y por la Organización de Estándares Internacional (ISO). Está compuesto por comandos, cláusulas, operadores y funciones de agregado.
                </p>
                <div class="info-box">
                    <p>Para adentrarse a complementar la información, observar el siguiente video:</p>
                    <a href="https://youtu.be/4w_OD5OEgps" target="_blank">Curso My SQL - Structured Query Languaje</a>
                </div>
                <h2 id="Conexión a la base de datos">Conexión a la base de datos</h2>
                <p>
                    La conexión al servidor de base de datos de MySQL se puede realizar de dos maneras distintas: utilizando una interfaz de línea de comandos o haciendo uso de la interfaz gráfica de administración, en este caso Workbench que es la herramienta con que se ha venido trabajando en los módulos anteriores; a continuación, rápidamente se mostrará cómo establecer la conexión al servidor e iniciar el trabajo con el lenguaje SQL.
                </p>
                <h2 id="Conexión desde línea de comandos">Conexión desde línea de comandos</h2>
                <p>
                    Para establecer la conexión a través de consola se debe utilizar uno de los comandos de Windows, para ello basta con cargar la consola desde el botón de búsqueda de Windows.
                </p>
                <p>
                    <strong>Consola de comandos Windows</strong>
                </p>
                <img style="width: 600px" src="/images/my-sql/img1.svg" alt="">
                <p>
                    Después de cargar la consola debe ubicarse en la ruta de instalación de MySQL, que por defecto debe estar en la siguiente ruta:
                </p>
                <img style="width: 600px" src="/images/my-sql/img2.svg" alt="">
                <p>
                    Lo normal es que se deba indicar algún otro dato para conectar con la base de datos, como el usuario, la clave o la dirección del servidor con el que se quiere conectar. La sintaxis sería la siguiente:
                </p>
                <div class="recuadro">
                    <p style="text-align: center">mysql -h nombre_servidor -u nombre_usuario -p</p>
                </div>
                <p>
                    Si se desea conectar a la base de datos en local y con nombre de usuario root, se tendría que escribir:
                </p>
                <div class="recuadro">
                    <p style="text-align: center">mysql -h localhost -u root –p</p>
                </div>
                <p>
                    Lo primero que preguntará será el password para el usuario root. Una vez introducida la clave, se estará dentro de la línea de comandos de MySQL.
                </p>
                <p>
                    <strong>Estableciendo la conexión a la base de datos</strong>
                </p>
                <img style="width: 600px" src="/images/my-sql/img3.svg" alt="">
                <p>
                    De esta manera ya se tiene acceso al servidor de base de datos sobre el cual se puede iniciar el trabajo con las sentencias y el lenguaje SQL.
                </p>
                <p>
                    <strong>Dentro de la consola de MySQL</strong>
                </p>
                <p>
                    Una vez dentro, se tendrán a disposición todas las sentencias de MySQL para el trabajo con la base de datos y el lenguaje SQL.
                </p>
                <p>
                    Lo usual es que primero se tenga que conectar con una base de datos en concreto, de entre todas las que se pueden tener creadas en el servidor MySQL. Eso se hace con el comando use, seguido del nombre de la base de datos con la que se desea conectar.
                </p>
                <div class="recuadro">
                    <p style="text-align: center">mysql> use mibasedatos;</p>
                </div>
                <p>
                    Esto conectaría con la base de datos llamada "mibasedatos".
                </p>
                <p>
                    <strong>Nota:</strong> hay que fijarse que todas las sentencias dentro de la línea de comandos de MySQL acaban en ";". Si no se escribe el punto y coma, lo más seguro es que no se ejecute el comando y vuelva a salir el prompt para seguir introduciendo el comando. Si se quería ejecutar la sentencia escrita antes, con simplemente entrar el ";" será suficiente, es decir, no se debe escribir de nuevo la sentencia entera, solo el ";" y volver a presionar la tecla "enter".
                </p>
                <p>
                    Si se quiere ver una lista de las bases de datos alojadas en el servidor, se puede escribir el comando show databases. Así:
                </p>
                <p>
                    <strong>Primeros comandos SQL</strong>
                </p>
                <img style="width: 600px" src="/images/my-sql/img4.svg" alt="">
                <hr>
                <h2 id="Conexión desde interfaz gráfica">Conexión desde interfaz gráfica</h2>
                <p>
                    Para realizar una conexión desde la interfaz gráfica al servidor de base de datos se utilizará la herramienta MySQL Workbench y se configura la conexión desde ella de la siguiente manera.
                </p>
                <p>
                    <strong>Conexión al servidor desde Workbench</strong>
                </p>
                <img style="width: 600px" src="/images/my-sql/img5.svg" alt="">
                <p>
                    Como se muestra en la figura anterior, se debe agregar una conexión hacia el servidor ya sea local o cualquier otro equipo en la red, para ello se requiere contar con las credenciales de acceso como usuario, contraseña, puerto de comunicaciones y dirección del servidor.
                </p>
                <p>
                    <strong>Creación de una nueva conexión</strong>
                </p>
                <img style="width: 600px" src="/images/my-sql/img6.svg" alt="">
                <p>
                    Una vez se cuente con la conexión, solo se debe dar clic en ella e ingresar, posteriormente se da clic en la opción nuevo Query para tener acceso a una consola de MySQL.
                </p>
                <p>
                    <strong>Acceso a una consola de MySQL</strong>
                </p>
                <img style="width: 600px" src="/images/my-sql/img7.svg" alt="">
                <hr>
                <h2 id="Sentencias y comandos DDL">Sentencias y comandos DDL</h2>
                <p>
                    DDL: Data Definition Language es la denominación en inglés que determina su sigla, en español se traduce como lenguaje de definición de datos; muchas veces se pueden llegar a encontrar con el título de operaciones básicas. Estos comandos permiten crear bases de datos, tablas, vistas, eliminar cualquier objeto, modificar el diseño de los mismos. Se utilizan para la construcción de la base de datos y el mantenimiento de la misma.
                </p>
                <p>
                    <strong>Dentro de los comandos DDL se pueden encontrar:</strong>
                </p>
                <img style="width: 600px" src="/images/my-sql/img8.png" alt="">
                <br><br>

                <div class="titulo" onclick="toggleParrafo(1)">
                    <span>Create | Crear</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Este comando permite crear objetos de datos, como nuevas bases de datos, tablas, vistas y procedimientos almacenados.
                <br><br>
                <strong>Ejemplo (crear una tabla)</strong><br>
                create table 'customers';
                </p>

                <div class="titulo" onclick="toggleParrafo(2)">
                    <span>Alter | Modificar</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Este comando permite modificar la estructura de una tabla u objeto. Se pueden agregar/quitar campos a una tabla, modificar el tipo de un campo, agregar/quitar índices a una tabla, modificar un trigger, etc.
                <br><br>
                <strong>Ejemplo (agregar columna a una tabla)</strong><br>
                Alter table 'alumnos' add edad int unsigned;
                </p>

                <div class="titulo" onclick="toggleParrafo(3)">
                    <span>Drop | Eliminar</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Este comando elimina un objeto de la base de datos. Puede ser una tabla, vista, índice, trigger, función, procedimiento o cualquier objeto que el motor de la base de datos soporte. Se puede combinar con la sentencia Alter.
                <br><br>
                <strong>Ejemplo</strong><br>
                Drop table 'alumnos';
                </p>

                <div class="titulo" onclick="toggleParrafo(4)">
                    <span>Truncate | Borrar tabla</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Este comando trunca todo el contenido de una tabla. La ventaja sobre el comando Drop, es que, si se quiere borrar todo el contenido de la tabla, es mucho más rápido, especialmente si la tabla es muy grande. La desventaja es que Truncate solo sirve cuando se quieren eliminar absolutamente todos los registros, ya que no se permite la cláusula Where. Si bien en un principio, esta sentencia parecería ser DML (lenguaje de manipulación de datos), es en realidad una DDL, ya que internamente, el comando Truncate borra la tabla y la vuelve a crear y no ejecuta ninguna transacción.
                <br><br>
                <strong>Ejemplo</strong><br>
                Truncate table 'nombre_tabla';
                </p>
                <h2 id="Sentencias y comandos DML">Sentencias y comandos DML</h2>
                <p>
                    <strong>DML:</strong> un lenguaje de manipulación de datos (Data Manipulation Language, o DML en inglés) es un lenguaje proporcionado por el sistema de gestión de base de datos que permite a los usuarios llevar a cabo las tareas de consulta o manipulación de los datos, organizados por el modelo de datos adecuado.
                </p>
                <p>
                    <strong>Dentro de los comandos DML se pueden encontrar:</strong>
                </p>
                <img style="width: 600px" src="/images/my-sql/img9.png" alt="">
                <br><br>

                <div class="titulo" onclick="toggleParrafo(5)">
                    <span>Select | Seleccionar</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">Una instrucción Select sirve para extraer información de una o más tablas de una base de datos.
                <br><br>
                <strong>Sintaxis:</strong><br>
                [Select - campos_seleccionados]
                <br>
                [From - tablas_de_datos]
                <br>
                [Where - condición]
                <br>
                [Order by - ordenar_por_lista_campos]
                <br>
                [Limit - limite_de_renglones]
                <br><br>

                <strong>Ejemplo</strong><br>
                Select id, nombre, teléfono
                <br>
                From personas
                <br><br>

                <strong>Select *</strong><br>
                From personas
                <br>
                Where id >0
                <br>
                Order by nombre
                <br>
                Limit 10
                <br><br>

                En esta instrucción se puede hacer uso de operadores lógicos y de comparación para personalizar la búsqueda.
                <br><br>

                <img style="width: 600px" src="/images/my-sql/img10.png" alt="">
                <br><br>

                <strong>Ejemplo</strong>
                <br>
                Select *
                <br>
                From persona
                <br>
                Where id >=0
                <br>
                Order by nombre
                <br>
                Limit 10

                <br><br>
                <img style="width: 600px" src="/images/my-sql/img11.png" alt="">
                <br><br>

                <strong>Ejemplo</strong><br>

                Select *
                <br>
                From persona
                <br>
                Where id >=0 and id<= 30
                <br>
                Order by nombre
                <br>
                Limit 10

                <br><br>

                Además de la sintaxis, se puede encontrar consultas que utilicen las siguientes funciones de agregado: Count, Sum, Avg, Max, Min.

                <br><br>

                Y otros operadores de comparación: Between para intervalo de valores, Like para comparación entre cadenas de caracteres con los Pattern ‘%’ y ‘_’, al igual que la sentencia IN para especificar registros de una base de datos.
                </p>

                <div class="titulo" onclick="toggleParrafo(6)">
                    <span>Insert | Insertar (adicionar)</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">La instrucción Insert sirve para agregar uno o más registros en una tabla de la base de datos, en la cláusula Insert hay que especificar el nombre de la tabla con una lista de campos (opcional).
                <br><br>
                Incluye también la lista de valores en la cual, si se especificaron los nombres de los campos, esta debería llevar el mismo orden de los campos tal como se declararon.
                <br><br>
                <strong>Sintaxis:</strong><br>
                Insert [Into] nombre tabla [(lista columnas)]
                <br>
                Values ([expresion1, expresion2, ...])
                <br><br>
                <strong>Ejemplo</strong><br>
                Insert into persona (id, nombre, apellido, dirección, teléfono) Values (1, ‘Juan’, ‘Perez’, ‘Carrera 40 35 - 20’, 317 876543).
                </p>

                <div class="titulo" onclick="toggleParrafo(7)">
                    <span>Update | Actualizar</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">La instrucción Update modifica uno o más registros en una tabla, en la cláusula SET, se puede llamar el nombre de una o más columnas y asignarle su nuevo valor.
                <br><br>
                En la cláusula Where se puede especificar una condición bajo la cual serán modificados los renglones.
                <br><br>
                <strong>Sintaxis:</strong><br>
                Update nombre tabla.
                <br>
                Set nombre_columna= expresion1,[nombre_columna2=expresion2]...
                <br>
                [Where condición]
                <br><br>
                <strong>Ejemplo</strong><br>
                Update persona Set apellido=’Pérez Flores’ Where id=1;
                </p>

                <div class="titulo" onclick="toggleParrafo(8)">
                    <span>Delete | Eliminar</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">La cláusula Delete se emplea para borrar uno o más registros de una tabla, se utiliza con la cláusula Where para escribir una condición bajo la cual será o serán eliminados los registros que cumplan con dicha condición.
                <br><br>
                Se puede utilizar una subconsulta dentro de la cláusula Where, es importante mencionar que si existen constraint de foreign-key estos previenen de no eliminar un registro que tenga relación con otro de otra tabla.
                <br><br>
                <strong>Sintaxis:</strong><br>
                Delete from nombre tabla
                <br>
                [Where condición]
                <br><br>
                <strong>Ejemplo</strong><br>
                Delete from persona Where id=5;
                </p>

                <h2 id="Sentencias y comandos DCL">Sentencias y comandos DCL</h2>
                <p>
                    DCL (Data Control Language): permite crear roles, permisos e integridad referencial, así como el control al acceso a la base de datos.
                </p>
                <p>
                    Este tipo de sentencias son utilizadas para la realizar la administración y control de acceso a las bases de datos.
                </p>
                <p>
                    <strong>Dentro de los comandos DML se pueden encontrar:</strong>
                </p>
                <img style="width: 600px" src="/images/my-sql/img12.png" alt="">
                <br><br>

                <div class="titulo" onclick="toggleParrafo(9)">
                    <span>Grant | Garantizar</span>
                    <span class="icono">+</span>
                </div>
                <p class="parrafo">La cláusula Grant permite a los administradores del sistema otorgar privilegios y roles que se pueden otorgar a cuentas y roles de usuario. Se aplican estas restricciones de sintaxis:
                <br><br>
                Grant no puede combinar la concesión de privilegios y roles en la misma declaración. Una cláusula Grant dada debe otorgar privilegios o roles.
                <br><br>
                ✔ La cláusula On distingue si la declaración otorga privilegios o roles. <br><br>
                ✔ Con On, la declaración otorga privilegios. <br><br>
                ✔ Sin On, la declaración otorga roles. <br><br>

                <br>

                Está permitido asignar tanto privilegios como roles a una cuenta, pero debe usar Grant declaraciones separadas, cada una con la sintaxis apropiada para lo que se va a otorgar.

                <br><br>

                La cláusula Grant puede aplicarse en tres niveles distintos como se muestra en la siguiente tabla.

                <br><br>

                <img style="width: 600px" src="/images/my-sql/img13.png" alt="">

                <br><br>

                <strong>Ejemplos:</strong>
                <br>
                Global: Grant all on *.*
                <br>
                Base de datos: Grant all on db_name.*
                <br>
                Tabla: Grant all on db_name.tbl_name

                <br><br>

                Para la cláusula Revoke se utiliza exactamente igual a la sentencia Grant la diferencia radica en que el comando Revoke, quita los permisos o privilegios que se hayan aplicado utilizando para ello los mismos niveles.

                <br><br>

                A continuación, se muestra un listado de las opciones o valores que pueden ser usados con la sentencia Grant o Revoke.

                </p>

                <h2 id="Sentencia Grant o Remoke">Sentencia Grant o Remoke</h2>

                <table border="1">
                    <tr>
                      <th>Privilegio</th>
                      <th>Significado</th>
                    </tr>
                    <tr>
                      <td>All [privileges]</td>
                      <td>Activa todos los privilegios excepto Grant Option.</td>
                    </tr>
                    <tr>
                      <td>Alter</td>
                      <td>Permite el uso de.</td>
                    </tr>
                    <tr>
                      <td>Create</td>
                      <td>Permite el uso de.</td>
                    </tr>
                    <tr>
                      <td>Create routine</td>
                      <td>Crear rutinas almacenadas.</td>
                    </tr>
                    <tr>
                      <td>Create temporarytables</td>
                      <td>Permite el uso de.</td>
                    </tr>
                    <tr>
                      <td>Create view</td>
                      <td>Permite el uso de.</td>
                    </tr>
                    <tr>
                      <td>Delete</td>
                      <td>Permite el uso de.</td>
                    </tr>
                    <tr>
                      <td>Drop</td>
                      <td>Permite el uso de.</td>
                    </tr>
                    <tr>
                      <td>Execute</td>
                      <td>Permite al usuario ejecutar procedimientos almacenados.</td>
                    </tr>
                    <tr>
                      <td>File</td>
                      <td>Permite el uso de y.</td>
                    </tr>
                    <tr>
                      <td>Index</td>
                      <td>Permite el uso de y.</td>
                    </tr>
                    <tr>
                      <td>Insert</td>
                      <td>Permite el uso de.</td>
                    </tr>
                    <tr>
                      <td>Lock tables</td>
                      <td>Permite el uso de en tablas sobre las que ya se posea el privilegio Select.</td>
                    </tr>
                    <tr>
                      <td>Process</td>
                      <td>Permite el uso de.</td>
                    </tr>
                    <tr>
                      <td>References</td>
                      <td>No implementado.</td>
                    </tr>
                    <tr>
                      <td>Reload</td>
                      <td>Permite el uso de.</td>
                    </tr>
                    <tr>
                      <td>Replication client</td>
                      <td>Permite al usuario preguntar dónde están los servidores esclavo o maestro.</td>
                    </tr>
                    <tr>
                      <td>Replication slave</td>
                      <td>Necesario para la replicación esclava (para leer eventos del diario binario desde el maestro).</td>
                    </tr>
                    <tr>
                      <td>Select</td>
                      <td>Permite el uso de.</td>
                    </tr>
                    <tr>
                      <td>Show databases</td>
                      <td>La sentencia muestra todas las bases de datos.</td>
                    </tr>
                    <tr>
                      <td>Show view</td>
                      <td>Permite el uso de.</td>
                    </tr>
                    <tr>
                      <td>Shutdown</td>
                      <td>Permite el uso del apagado de mysqladmin shutdown.</td>
                    </tr>
                    <tr>
                      <td>Update</td>
                      <td>Permite el uso de.</td>
                    </tr>
                    <tr>
                      <td>Usage</td>
                      <td>Sinónimo de "sin privilegios".</td>
                    </tr>
                    <tr>
                      <td>Grant option</td>
                      <td>Permite conceder privilegios.</td>
                    </tr>
                  </table>

                  <p>
                    Es importante aclarar que para poder aplicar o retirar permisos, estos se aplican a usuarios que deben ser creados dentro del servidor de base de datos, para desarrollar estas tareas hay que utilizar los siguientes comandos:
                  </p>
                  <p>
                    <strong>Sintaxis:</strong>
                    <br>
                    Create user: 'nombre_usuario'@'localhost' Identified by 'tu_contrasena';
                  </p>

                  <p>
                    <strong>Ejemplo</strong>:
                    <br>
                    Create user 'sena'@'local host' Identified BY 'Passw0rd';
                  </p>
                  <p>
                    Mediante el comando anterior se crea el usuario llamado SENA y se le asigna la contraseña ‘Password’, sin embargo, este usuario no puede acceder a la consola de MySQL por que se tendrían que asignar los permisos necesarios para conectarse y trabajar sobre el servidor de base de datos.
                  </p>
                  <p>
                    <strong>Ejemplo:</strong>
                    <br>
                    Grant all privileges on * . * To 'sena'@'localhost';
                  </p>
                  <p>
                    Para este caso se estarían aplicando permisos de nivel global al usuario SENA y se les asignaría permisos a todas las bases de datos y todos los objetos que hacen parte de dichas bases de datos, la cláusula All privileges hace que tenga todos los permisos sin ninguna restricción.
                  </p>
            </section>
        </article>

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
        @include('partials-bases-de-datos.my-sql.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">¿Qué es SQL?</a></li>
            <li><a href="#Conexión a la base de datos">Conexión a la base de datos</a></li>
            <li><a href="#Conexión desde línea de comandos">Conexión desde línea de comandos</a></li>
            <li><a href="#Conexión desde interfaz gráfica">Conexión desde interfaz gráfica</a></li>
            <li><a href="#Sentencias y comandos DDL">Sentencias y comandos DDL</a></li>
            <li><a href="#Sentencias y comandos DML">Sentencias y comandos DML</a></li>
            <li><a href="#Sentencias y comandos DCL">Sentencias y comandos DCL</a></li>
        </ul>

@endsection
