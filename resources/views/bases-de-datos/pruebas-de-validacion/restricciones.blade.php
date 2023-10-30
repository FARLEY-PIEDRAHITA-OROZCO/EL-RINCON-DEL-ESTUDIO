@extends('layouts.articulos')
@section('title', 'Pruebas de validación de bases de datos MySQL')
@section('content')

        <article>
            <h1 id="introduccion">Tipos de restricciones de integridad</h1>
            <p class="metadata">Publicado el 30 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">

                <img style="width: 600px" src="/images/pruebas-de-validacion/img2.svg" alt="">
                <h2 id="Datos requeridos">Datos requeridos</h2>
                <p>
                    Establece que una columna tenga un valor Not Null. Se define efectuando la declaración de una columna es Not null cuando la tabla que contiene las columnas se crea por primera vez, como parte de la sentencia Create table.
                </p>
                <p style="text-align: center">
                    <strong>Configuración propiedad NOT NULL</strong>
                </p>
                <img style="width: 600px" src="/images/pruebas-de-validacion/img3.svg" alt="">
                <h2 id="Chequeo de validez">Chequeo de validez</h2>
                <p>
                    Cuando se crea una tabla, cada columna tiene un tipo de datos y el DBMS asegura que solamente los datos del tipo especificado sean ingresados en la tabla.
                </p>
                <p>
                    El tipo de dato seleccionado en el diseño es de suma importancia ya que este define los datos que serán recibidos y almacenados; esto determina la capacidad, el tamaño y las restricciones al momento de realizar las operaciones de Insert, Update.
                </p>
                <p>
                    Ejemplo: para la tabla producto, se define un atributo llamado stock el cual define un campo de tipo entero, esto significa que, al momento de insertar algún registro, no se permitirá ingresar valores decimales como 25,5 computadores ya que se generaría un error en su validez.
                </p>
                <p style="text-align: center">
                    <strong>Configuración tipos de datos</strong>
                </p>
                <img style="width: 600px" src="/images/pruebas-de-validacion/img4.svg" alt="">
                <h2  dir="Integridad de los datos">Integridad de los datos</h2>
                <p>
                    Aquí se establece que la clave primaria de una tabla debe tener un valor único para cada fila de la tabla; si no, la base de datos perderá su integridad; y se especifica en la sentencia Create table. El DBMS comprueba automáticamente la unicidad del valor de la clave primaria con cada sentencia Insert y Update. Un intento de insertar o actualizar una fila con un valor de la clave primaria ya existente fallará.
                </p>
                <p style="text-align: center">
                    <strong>Configuración de la llave primaria</strong>
                </p>
                <img style="width: 600px" src="/images/pruebas-de-validacion/img5.svg" alt="">
                <p>
                    Este tipo de prueba lo que debe garantizar es que no se repitan varios registros o tuplas con un mismo identificador, de ahí el concepto que la llave primaria debe ser un valor único.
                </p>
                <p>
                    Ejemplo: en la tabla producto se realizó la inserción de un nuevo producto llamado computador portátil el cual quedó registrado con el idProducto= 1 tal como se evidencia en la siguiente imagen.
                </p>
                <p style="text-align: center">
                    <strong>Inserción del primer registro I</strong>
                </p>
                <img style="width: 600px" src="/images/pruebas-de-validacion/img6.svg" alt="">
                <p>
                    Ahora, el tipo de prueba que se debe de hacer es insertar un nuevo registro de otro producto y tratar de utilizar el mismo identificador lo cual genera un error tal como se evidencia en la siguiente figura.
                </p>
                <p style="text-align: center">
                    <strong>Inserción del primer registro II</strong>
                </p>
                <img style="width: 600px" src="/images/pruebas-de-validacion/img7.svg" alt="">
                <h2 id="Integridad referencial">Integridad referencial</h2>
                <p>
                    Esta asegura la integridad entre las llaves foráneas y primarias (relaciones padres/hijo). Existen cuatro actualizaciones de la base de datos que pueden comprometer la integridad referencial:
                </p>
                <ul>
                    <li>La inserción de una fila hijo se produce cuando no coincide la llave foránea con la llave primaria del padre.</li>
                    <li>La actualización en la llave foránea de la fila hijo, donde se produce una actualización en la clave ajena de la fila hijo con una sentencia Update y la misma no coincide con ninguna llave primaria.</li>
                    <li>La supresión de una fila padre, con la que, si una fila padre –que tiene uno o más hijos– se suprime, las filas hijos quedarán huérfanas.</li>
                    <li>La actualización de la llave primaria de una fila padre, donde si en una fila padre, que tiene uno o más hijos se actualiza su llave primaria, las filas hijos quedarán huérfanas.</li>
                </ul>
                <p>
                    El concepto de la integridad referencial y como se puede ver afectada se puede evidenciar en la siguiente figura.
                </p>
                <p style="text-align: center">
                    <strong>Pérdida de la integridad de los datos</strong>
                </p>
                <img style="width: 600px" src="/images/pruebas-de-validacion/img8.svg" alt="">
            </section>
        </article>
@endsection

@section('aside')
        @include('partials-bases-de-datos.pruebas-de-validacion.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#Datos requeridos">Datos requeridos</a></li>
            <li><a href="#Chequeo de validez">Chequeo de validez</a></li>
            <li><a href="#Integridad de los datos">Integridad de los datos</a></li>
            <li><a href="#Integridad referencial">Integridad referencial</a></li>
        </ul>

@endsection
