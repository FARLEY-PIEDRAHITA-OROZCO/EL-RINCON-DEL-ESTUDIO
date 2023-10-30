@extends('layouts.articulos')
@section('title', 'Pruebas de validación de bases de datos MySQL')
@section('content')

        <article>
            <h1 id="introduccion">Pruebas de ejecución de scripts</h1>
            <p class="metadata">Publicado el 30 de Octubre de 2023 por Farley Piedrahita Orozco</p>
            <section class="contenido">
                <p>
                    Una vez terminado el diseño de la base de datos en la herramienta visual Workbench, se realiza la exportación del modelo y se genera un script el cual debe de probarse para validar si la ejecución es correcta.
                </p>
                <p>
                    Acá es importante mencionar que en las nuevas versiones de MySQL y al utilizar el Workbench como herramienta de diseño visual, al momento de finalizar el diseño de la base de datos se procede a exportar dicho modelo en un script de tipo SQL que permita la creación de la base de datos, este script debe ser probado en el servidor o en cualquier otro servidor para validar si se ejecuta de manera correcta.
                </p>
                <p style="text-align: center">
                    <strong>Exportar el modelo a un script SQL</strong>
                </p>
                <img style="width: 600px" src="/images/pruebas-de-validacion/img9.svg" alt="">
                <p>
                    Al exportar el script se debe cargar una consola de SQL y probarlo ejecutándose para validar si el diseño quedó de manera correcta, si se cumplieron con todas las reglas, restricciones y propiedades a tener en consideración al momento de construir las bases de datos.
                </p>
                <p style="text-align: center">
                    <strong>Prueba de ejecución del script</strong>
                </p>
                <img style="width: 600px" src="/images/pruebas-de-validacion/img10.jpg" alt="">
            </section>
        </article>
@endsection

@section('aside')
        @include('partials-bases-de-datos.pruebas-de-validacion.aside')
@endsection

@section('aside-2')

    <h2>En este modulo</h2>
        <ul>
            <li><a href="#introduccion">Pruebas de ejecución de scripts</a></li>
        </ul>

@endsection
