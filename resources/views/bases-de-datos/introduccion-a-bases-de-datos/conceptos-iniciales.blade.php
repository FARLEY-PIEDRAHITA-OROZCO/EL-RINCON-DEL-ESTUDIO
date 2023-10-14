@extends('../../layouts.sistemas')
@section('../../title', 'Introducción a los sistemas de gestión de bases de datos MySQL')

@section('navbar')
    @include('partials.navbar-introduccion-a-bases-de-datos')
@endsection

@section('content')
    <h1 class="h1-content" id="Introducción">1. Conceptos iniciales</h1>
    <br>
    <img class="img-2 img-3" src="/images/introduccion-a-bases-de-datos/img2.svg" alt="La definición de dato">
    <br><br>
    <h2 class="h2-content" id="1.1 Datos e información">1.1 Datos e información</h2>
    <br>
    <p>
        En el desarrollo de los sistemas de información es común encontrar constantemente estos dos términos y se tiende a comparar o entender como si fueran lo mismo, pero son dos términos que, aunque están relacionados, son diferentes.
    </p>
    <br>
    <p>
        <strong>Dato:</strong> los datos son la mínima unidad semántica y se corresponden con elementos primarios de información que por sí solos son irrelevantes como apoyo a la toma de decisiones. También se pueden ver como un conjunto discreto de valores que no dicen nada sobre el porqué de las cosas y no son orientativos para la acción.
    </p>
    <br>
    <p>
        Un número telefónico o un nombre de una persona, por ejemplo, son datos que, sin un propósito, una utilidad o un contexto no sirven como base para apoyar la toma de una decisión. Los datos pueden ser una colección de hechos almacenados en algún lugar físico como un papel, un dispositivo electrónico (CD, DVD, disco duro...), o la mente de una persona. En este sentido, las tecnologías de la información han aportado mucho a recopilación de datos.
    </p>
    <br>
    <p>
        <strong>Información:</strong> la información se puede definir como un conjunto de datos procesados que tienen un significado (relevancia, propósito y contexto) y que, por lo tanto, son de utilidad para quién debe tomar decisiones al disminuir su incertidumbre. Los datos se pueden transforman en información añadiéndoles valor.
    </p>
    <br>
    <h2 class="h2-content" id="1.2 El almacenamiento de los datos">1.2 El almacenamiento de los datos</h2>
    <br>
    <p>
        A lo largo de la historia, los seres humanos siempre han desarrollado estrategias, técnicas o herramientas que les permitan conservar y almacenar sus datos, es así como se ha utilizado la mente y la escritura en piedra, pieles, papel y en otros medios de comunicación disponibles.
    </p>
    <br>
    <p>
        Con el desarrollo de la computación se empezó un camino hacia la búsqueda de cada vez más y mejores mecanismos que permitieran almacenar los datos, es así como las primeras computadoras contaban con espacios muy limitados de almacenamiento que van desde la cinta perforada y, debido al continuo crecimiento de datos e información, se evolucionó a lo que se conoce como los archivos; es decir, un conjunto estructurado de datos almacenados con un nombre y en un formato particular.
    </p>
    <br>
    <p>
        Inicialmente, cada área de las organizaciones tenía sus propios archivos de datos, pero como no existían las redes de comunicaciones estos archivos eran independientes y no se comunicaban entre ellos, esta situación generó muchos inconvenientes ya que el acceso a los datos era solo para la propia área y si se requería información de otras áreas debía recurrirse a las personas y solicitarla, esto, además, generaba que la información se duplicara y no se tuviera una información única y centralizada.
    </p>
    <br>
    <p>
        Por lo tanto, fue necesario desarrollar una estrategia que permitiera integrar la información de la organización en un solo lugar donde se pudiera controlar el acceso a la misma, lo que facilitó el desarrollo desde el punto de vista tecnológico de lo que hoy se conoce como bases de datos.
    </p>
    <br>
    <p>
        Desde el punto de vista del almacenamiento de los datos, el avance de la tecnología ha permitido desarrollar y utilizar diferentes estrategias y tecnologías de almacenamiento que van desde los discos duros en todas sus tecnologías como SATA, SAS, ISCI, IP, almacenamiento de estado sólido, Fiber Channel, entre otros, e inclusive migrar de almacenamiento local a almacenamiento en la nube.
    </p>
    <br>
    <h2 class="h2-content" id="1.3 Sistemas de bases de datos">1.3 Sistemas de bases de datos</h2>
    <br>
    <p>
        Se entienden como bases de datos una colección de datos estructurados, organizados, sin duplicidad y dispuestos con el objetivo de proporcionar información a los usuarios de manera centralizada para desarrollar sobre ellas transacciones.
    </p>
    <br>
    <p>
        Otro concepto importante es el de bases de datos relacionales lo cual significa que el conjunto de datos es almacenado de manera estructurada y organizada en tablas y estas se relacionan de alguna manera.
    </p>
    <br>
    <p>
        Las bases de datos relacionales se basan en el modelo relacional, una forma intuitiva y directa de representar datos en tablas. En una base de datos relacional, cada fila de la tabla es un registro con un ID único llamado clave. Las columnas de la tabla contienen atributos de los datos, y cada registro, generalmente, tiene un valor para cada atributo, lo que facilita el establecimiento de las relaciones entre los puntos de datos.
    </p>
    <br>
    <img class="img-2 img-4" src="/images/introduccion-a-bases-de-datos/img5.svg" alt="">

@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#1. Conceptos iniciales">1. Conceptos iniciales</a><br><br>
    <a href="#1.1 Datos e información">1.1 Datos e información</a><br><br>
    <a href="#1.2 El almacenamiento de los datos">1.2 El almacenamiento de los datos</a><br><br>
    <a href="#1.3 Sistemas de bases de datos">1.3 Sistemas de bases de datos</a><br><br>
@endsection
