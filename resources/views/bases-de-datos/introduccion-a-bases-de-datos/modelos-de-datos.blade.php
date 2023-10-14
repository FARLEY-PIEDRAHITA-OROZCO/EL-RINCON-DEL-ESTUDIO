@extends('../../layouts.sistemas')
@section('../../title', 'Introducción a los sistemas de gestión de bases de datos MySQL')

@section('navbar')
    @include('partials.navbar-introduccion-a-bases-de-datos')
@endsection

@section('content')
    <h1 class="h1-content" id="Introducción">2. Modelos de datos</h1>
    <br>
    <img class="img-4 img-2" src="/images/introduccion-a-bases-de-datos/img3.svg" alt="La definición de dato">
    <br><br>
    <p>
        Un modelo de datos es un conjunto de herramientas conceptuales para la descripción de los datos y las relaciones entre ellos, su semántica y las restricciones de consistencia; está compuesto por un conjunto de conceptos, reglas y convenciones que permiten describir los datos.
    </p>
    <br>
    <p>
        Por la orientación del presente programa de formación, se enfoca el estudio hacia el modelo relacional pero se recomienda la lectura de otros modelos como:
    </p>
    <br>
    <div class="div-1 ">
        <div class="div-2">
            <img  src="/images/introduccion-a-bases-de-datos/img6.svg" alt="La definición de dato">
            <p style="text-align: center">
                <strong>Modelo jerárquico</strong>
            </p>
        </div>
        <div class="div-2">
            <img  src="/images/introduccion-a-bases-de-datos/img7.svg" alt="La definición de dato">
            <p style="text-align: center">
                <strong>Modelo de red</strong>
            </p>
        </div>
        <div class="div-2">
            <img  src="/images/introduccion-a-bases-de-datos/img8.svg" alt="La definición de dato">
            <p style="text-align: center">
                <strong>Modelo orientado a objetos</strong>
            </p>
        </div>
        <div class="div-2">
            <img  src="/images/introduccion-a-bases-de-datos/img9.svg" alt="La definición de dato">
            <p style="text-align: center">
                <strong>Modelo orientado a documentos</strong>
            </p>
        </div>
    </div>
    <br>
    <p>
        Este modelo basado en tablas, gira en torno al concepto de relación, un término bien definido en matemáticas y que aquí se utiliza como sinónimo de tabla. Para formular las relaciones se utiliza álgebra relacional, con cuya ayuda puede obtenerse la información de estas relaciones; este es el principio que fundamenta el lenguaje SQL.
    </p>
    <br>
    <img class="img-4 img-2" src="/images/introduccion-a-bases-de-datos/Captura.png" alt="">
    <br><br>
    <p>
        Este modelo es solamente un método que se aprovecha para diseñar los esquemas que, posteriormente, se deben implementar en la base de datos. Este modelo se representa a través de diagramas y está formado por varios elementos que se analizarán a continuación.
    </p>
    <br>
    <p>
        <strong>Entidad:</strong> Cada entidad representa cosas y objetos ya sean reales o abstractos y que se diferencian entre sí. En un diagrama las entidades se representan con rectángulos.
    </p>
    <br>
    <p>
        <strong>Atributos:</strong> Definen las características de las entidades, son las propiedades de cada una. Cada entidad contiene distintos atributos que dan información sobre esta entidad, estos atributos pueden ser de distintos tipos (numéricos, texto, fecha...) en cada una de las columnas de una tabla. En un diagrama los atributos se representan con círculos que descienden de la entidad.
    </p>
    <br>
    <img class="img-2 img-3" src="/images/introduccion-a-bases-de-datos/img10.svg" alt="">
    <br><br>
    <p>
        <strong>Tupla:</strong> Son elementos formados por una fila de una tabla. Cada fila de la entidad estaría compuesta por los atributos de la entidad correspondiente.
    </p>
    <br>
    <p>
        <strong>Relación:</strong> Con una relación se establece qué tipo de dependencia se debe dar entre entidades, es decir, permite decir que ciertas entidades comparten ciertos atributos de manera necesaria.
    </p>
    <br>
    <img class="img-4 img-2" src="/images/introduccion-a-bases-de-datos/img11.svg" alt="Relación 1 a 1">
    <p style="text-align: center"><strong>Relación</strong></p>
    <br>
    <p>
        <strong>Tipos de relación</strong>
    </p>
    <br>
    <p>
        <strong>Según cardinalidad</strong>. La cardinalidad se representa en un diagrama ER como una etiqueta que se ubica en ambos extremos de la línea de relación de las entidades y que puede contener diversos valores entre los que destacan comúnmente el 1 y el *, obteniendo los siguientes tipos:
    </p>
    <br>
    <img class="img-4 img-2" src="/images/introduccion-a-bases-de-datos/img12.svg" alt="">
    <p style="text-align: center">
        <strong>Relación 1 a 1</strong>
    </p>
    <br>
    <p>
        <strong>Relación 1 a 1</strong>. La relación uno a uno define que un único registro de la tabla puede estar relacionado con un único registro de la tabla relacionada.
    </p>
    <br>
    <p>
        Para el diseño de las bases de datos se pueden usar tres modelos que son los más populares y utilizados los cuales permitirán entender los requerimientos y trasladarlos a un modelo relacional que facilite, posteriormente, el almacenar los datos requeridos.
    </p>
    <br>
    <p>
        Complementar la información visualizando el siguiente video:
    </p>
    <br>
    <p>
        <a href="https://www.youtube.com/watch?v=-tuDXYWn3fQ"><strong>Video</strong> HTML Rules (2019, septiembre 21). Disño de bases de datos relacionales</a>
    </p>
    <br>
    <h2 class="h2-content" id="2.1 Modelos de datos conceptual">2.1 Modelos de datos conceptual</h2>
    <br>
    <p>
        Representa el modelo de datos de forma independiente del DBMS (sistema de gestión de bases de datos) que se utilizará, usa una representación gráfica para representar el diseño donde los rectángulos representan entidades, los rombos relaciones y los óvalos propiedades o atributos.
    </p>
    <br>
    <img class="img-4 img-2" src="/images/introduccion-a-bases-de-datos/img13.svg" alt="">
    <p style="text-align: center">
        <strong>Modelo de datos de forma independiente</strong>
    </p>
    <br>
    <h2 class="h2-content" id="2.2 Modelo de datos lógico">2.2 Modelo de datos lógico</h2>
    <br>
    <p>
        Este modelo no es específico de un motor o base de datos que describe aspectos relacionados con las necesidades de una organización para recopilar datos y las relaciones, entre estos aspectos; un modelo lógico contiene representaciones de entidades, atributos y relaciones.
    </p>
    <br>
    <img class="img-4 img-2" src="/images/introduccion-a-bases-de-datos/img14.svg" alt="">
    <p style="text-align: center">
        <strong>Modelo de datos lógico</strong>
    </p>
    <br>
    <h2 class="h2-content" id="2.3 Modelo de datos físico">2.3 Modelo de datos físico</h2>
    <br>
    <p>
        El paso de un modelo lógico a uno físico requiere de un profundo entendimiento del manejador de bases de datos que se desea emplear, incluyendo características como:
    </p>
    <br>
    <ul class="dentro">
        <li class="lista">Conocimiento a fondo de los tipos de objetos (elementos) soportados.</li><br>
        <li class="lista">Detalles acerca del indexamiento, integridad referencial, restricciones, tipos de datos, etc.</li><br>
        <li class="lista">Detalles y variaciones de las versiones.</li><br>
        <li class="lista">Parámetros de configuración.</li><br>
        <li class="lista">Data Definition Language (DDL).</li><br>
    </ul>
    <br>
    <img class="img-4 img-2" src="/images/introduccion-a-bases-de-datos/img15.svg" alt="">
    <p style="text-align: center">
        <strong>Modelos de datos físico</strong>
    </p>
    <br>

    <style>

        ul.dentro {list-style-position:inside;}

        ul.fuera {list-style-position:outside;}

        .lista{
            text-align: start
        }

        img{
            width: 100px;
            height: 100px;
        }

        .div-1{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .div-2{
            width: 160px;
            height: 160px;
            margin: 10px;
        }
        </style>

@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#2. Modelos de datos">2. Modelos de datos</a><br><br>
    <a href="#2.1 Modelos de datos conceptual">2.1 Modelos de datos conceptual</a><br><br>
    <a href="#2.2 Modelo de datos lógico">2.2 Modelo de datos lógico</a><br><br>
    <a href="#2.3 Modelo de datos físico">2.3 Modelo de datos físico</a><br><br>
@endsection
