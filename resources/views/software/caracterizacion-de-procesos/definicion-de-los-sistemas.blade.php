@extends('../../layouts.sistemas')
@section('../../title', 'Caracterización de procesos')

@section('navbar')
    @include('partials.navbar-caracterizacion-de-procesos')
@endsection

@section('content')
    <h1 class="h1-content" id="definicion de los sistemas">3. Definición de los sistemas</h1>
    <br>
    <p>
        <strong>Para Ludwig Von Bertalanffy:</strong>
    </p>
    <p>
        "<em>Sistema es un conjunto organizado de elementos que interactúan entre sí con estructura lógica o que son interdependientes, formando un todo complejo, identificable y distinto. Por los elementos de un sistema se entiende no solo su conformación física sino las funciones que estos desempeñan. Algún conjunto de elementos de un sistema puede ser considerado un subsistema si mantienen una relación entre sí que los hace también un conjunto identificable y distinto</em> (1968)."
    </p>
    <br>
    <p>
        <strong>Teoría General de Sistemas “Ludwig Von Bertalanffy”</strong><br>Para conocer un poco más sobre el padre de la Teoría general de sistemas, consulte el siguiente <a href="https://www.youtube.com/watch?v=lCm24yPH4Eo&ab_channel=MontserratChm" target="_blank">video</a>
    </p>
    <br>
    <p>
        Tales sistemas se caracterizan por su capacidad de recepción de elementos los cuales son denominados como entradas, a su vez se pueden tipificar como tipos de energía, información a manera de mensajes, datos y señales también recursos físicos. Estas entradas se someten a un conjunto de actividades que alimentan una serie de acciones que las transforman y como consecuencia se generan unos resultados o salidas; una situación muy interesante se presenta cuando una salida o parte de ella se convierte nuevamente en entrada cuando esto sucede se dice que existe retroalimentación. La retroalimentación ayuda a elevar el grado de perfeccionamiento en las respuestas y en el propio comportamiento del sistema logrando de manera inmediata altos niveles de control, principio básico de la automatización de estos.
    </p>
    <img class="img-2" src="/images/caracterizacion-de-procesos/La retroalimentación.svg" alt="La retroalimentación">
    <p>
        Así mismo, cuando de un subsistema se conocen solo las entradas y las salidas pero no las actividades internas se dice que es una caja negra en ese caso se aconseja utilizar la observación y guiarse por el sentido común para proponer las actividades desde cero que resuelven el mismo problema.
    </p>
    <img class="img-2" src="/images/caracterizacion-de-procesos/Ejemplo de los elementos del sistema.svg" alt="Ejemplo de los elementos del sistema">
    <h2 class="h2-content" id="3.1 Clasificación de sistemas">3.1 Clasificación de sistemas</h2>
    <br>
    <p>
        Bertalanffy y otros autores posteriores han definido distintas formas de clasificar a los sistemas en función de su conformación estructural y sus funcionalidades. Estas son las clasificaciones más importantes:
    </p>
    <img class="img-2 img-3" src="/images/caracterizacion-de-procesos/Definiciones de sistemas.svg" alt="Ejemplo de los elementos del sistema">
    <p>
        A continuación, se presentan algunos tipos de sistemas:
    </p>
    <br>
    <h2 class="h2-content" id="Sistema, supersistema y subsistemas">Sistema, supersistema y subsistemas</h2>
    <br>
    <p>
        Los sistemas se pueden agrupar teniendo en cuenta su grado de complejidad, se componen a su vez de distintos niveles de jerarquía en que pueden dividirse y que interactúan entre ellos intercambiando algún tipo de información, de modo que estos al final no son autónomos unos de otros.
    </p>
    <br>
    <p>
        Si se entiende por sistema un conjunto de partes, podemos hablar de subsistemas para referirse a tales elementos; un ejemplo de ello es: la conformación de una familia como un sistema y cada miembro en ella es un subsistema. El supersistema es el contexto externo que rodea al sistema y en el que éste se encuentra inmerso; en los grupos o comunidades de humanos es identificable con la sociedad.
    </p>
    <br>
    <img class="img-2 img-3" src="/images/caracterizacion-de-procesos/Sistema, supersistema y subsistemas.svg" alt="Sistema, supersistema y subsistemas">
    <br><br>
    <h2 class="h2-content" id="Reales físicos, ideales y abstracciones">Reales físicos, ideales y abstracciones</h2>
    <br>
    <p>
        De acuerdo a su esencia los sistemas se pueden clasificar en reales físicos, como producto del pensamiento ideales y modelos. Los sistemas reales son aquellos que existen físicamente y que pueden ser objeto de observación y por tanto objetos de medición, mientras que los sistemas ideales son las representaciones simbólicas extraídas de la abstracción que produce el pensamiento y el lenguaje que se traducen en diseños y modelos. Las abstracciones y sus correlaciones pretenden representar características reales e ideales aquí es importante tener en cuenta el conjunto de requerimientos, solicitudes, la definición de límites con las cuales se pretende llegar a los objetivos finales.
    </p>
    <br>
    <img class="img-2 img-3" src="/images/caracterizacion-de-procesos/Reales físicos, ideales y abstracciones.svg" alt="Reales físicos, ideales y abstracciones">
    <br><br>
    <h2 class="h2-content" id="De la naturaleza, artificiales y mixtos">De la naturaleza, artificiales y mixtos</h2>
    <br>
    <p>
        Cuando un sistema está inmerso o corresponde únicamente al funcionamiento de la naturaleza, como lo es un lago, un río, la selva, el cuerpo humano, los planetas o las galaxias, entonces hay que referirse a ellos como sistemas naturales. Por el contrario, los sistemas artificiales son aquellos que emergen de la creación del hombre es decir como productos de la acción humana; dentro de este tipo de sistema podemos encontrar los construidos por el hombre aviones, trenes, maquinarias de transformación de las energías incluso de transformación de la información tangibles e intangibles.
    </p>
    <br>
    <p>
        Los sistemas mixtos se dan por la combinación de elementos naturales y artificiales. Cualquier entorno de orden físico que sufre alteraciones dadas por el ser humano, como lo son los pueblos, las ciudades, los ríos en donde se construyen represas, es considerado un sistema mixto; el grado de participación de elementos naturales y artificiales varía en cada caso concreto en proporciones diferentes.
    </p>
    <br>
    <img class="img-2 img-3" src="/images/caracterizacion-de-procesos/De la naturaleza, artificiales y mixtos.svg" alt="De la naturaleza, artificiales y mixtos">
    <br><br>
    <h2 class="h2-content" id="Cerrados y abiertos">Cerrados y abiertos</h2>
    <br>
    <p>
        Torres (2021) argumenta: “El criterio principal que define a un sistema es el grado de interacción con el supersistema y otros sistemas. Los sistemas abiertos intercambian materia, energía y/o información con el entorno que los rodea, adaptándose a éstos e influyendo en él. En cambio, los sistemas cerrados se encuentran teóricamente alejados de las influencias ambientales; en la práctica se habla de sistemas cerrados cuando están altamente estructurados y la retroalimentación es mínima, puesto que ningún sistema es completamente independiente de su suprasistema”.
    </p>
    <br>
    <img class="img-2 img-3" src="/images/caracterizacion-de-procesos/Cerrados y abiertos.svg" alt="Cerrados y abiertos">
    <br><br>
    <h2 class="h2-content" id="3.2 Sistemas de Información">3.2 Sistemas de Información</h2>
    <br>
    <p>A continuación, se presenta un breve significado de sistemas de información:</p>
    <br>
    <iframe src="https://www.youtube.com/embed/n9kqKg1tDV0?si=BDAbNAS-CsZGmObj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <br><br>
    <p>
        <strong>Datos e Información</strong>
    </p>
    <p>
        Estos términos datos e información tienden a confundirse, pero a la luz de los sistemas que estamos tratando en este apartado vale la pena definirlos:
    </p>
    <br>
    <p>
        <strong>La definición de dato:</strong> Un dato no es otra cosa que una representación simbólica de alguna situación o suceso, sin ningún sentido semántico, describiendo un hecho concreto. O lo que es lo mismo, sin transmitir mensaje ninguno, un ejemplo de dato podría ser una letra o un hecho.
    </p>
    <br>
    <p>
        Según Deusto (2019)
    </p>
    <img class="img-2 img-3" src="/images/caracterizacion-de-procesos/La definición de dato.svg" alt="La definición de dato">
    <p>
        <strong>La definición de Información:</strong> La información se define como un conjunto de datos los cuales son adecuadamente procesados, para que de esta manera, puedan proveer un mensaje que contribuya a la toma de decisiones a la hora de resolver un problema o afrontar una situación cualquiera en la que se requiera de la toma de decisiones de cualquier tipo.
    </p>
    <br>
    <p>
        Según Deusto (2019)
    </p>
    <img class="img-2 img-3" src="/images/caracterizacion-de-procesos/La definición de Información.svg" alt="La definición de Información">
@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#definicion de los sistemas">3. Definición de los sistemas</a><br><br>
    <a href="#3.1 Clasificación de sistemas">3.1 Clasificación de sistemas</a><br><br>
    <a href="#Sistema, supersistema y subsistemas">Sistema, supersistema y subsistemas</a><br><br>
    <a href="#Reales físicos, ideales y abstracciones">Reales físicos, ideales y abstracciones</a><br><br>
    <a href="#De la naturaleza, artificiales y mixtos">De la naturaleza, artificiales y mixtos</a><br><br>
    <a href="#Cerrados y abiertos">Cerrados y abiertos</a><br><br>
    <a href="#3.2 Sistemas de Información">3.2 Sistemas de Información</a><br><br>

@endsection
