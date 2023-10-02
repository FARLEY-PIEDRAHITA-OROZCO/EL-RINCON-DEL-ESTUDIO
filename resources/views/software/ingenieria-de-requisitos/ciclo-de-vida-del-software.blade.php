@extends('../../layouts.sistemas')
@section('../../title', 'Ingeniería de requisitos')

@section('navbar')
    @include('partials.navbar-ingenieria-de-requisitos')
@endsection

@section('content')
    <h1 class="h1-content" id="1. Ciclo de vida del software">1. Ciclo de vida del software</h1>
    <br>
    <p>
        También conocido como (SDLC o Systems Development Life Cycle), es el proceso que se sigue para construir y hacer evolucionar un determinado software. El ciclo de vida permite iniciar una serie de fases mediante las cuales se procede a la validación y al desarrollo del software garantizando que se cumplan los requisitos para la aplicación y verificación de los procedimientos de desarrollo; para ello, se utilizan métodos del ciclo del software, que indican distintos pasos a seguir para el desarrollo de un producto.
    </p>
    <br>
    <p>
        <strong>Si bien existen diferentes ciclos de desarrollo de software, la normativa ISO/IEC/IEEE 12207:2017 establece:</strong>
    </p>
    <br>
    <p>
        "Un marco común para los procesos del ciclo de vida de los programas informáticos, con una terminología bien definida, a la que pueda remitirse la industria del software. <strong>Contiene procesos, actividades y tareas aplicables durante la adquisición, el suministro, el desarrollo, el funcionamiento, el mantenimiento o la eliminación de sistemas, productos y servicios informáticos</strong>. Estos procesos del ciclo de vida se llevan a cabo mediante la participación de los interesados, con el objetivo final de lograr la satisfacción del cliente (s.p.)".
    </p>
    <br>
    <p>
        A continuación, se indican cuáles son los elementos que integran un ciclo de vida:
    </p>
    <br>
    <p>
        <strong>Fases:</strong> Una fase es un conjunto de actividades relacionadas con un objetivo en el desarrollo del proyecto. Se construye agrupando tareas (actividades elementales) que pueden compartir un tramo determinado del tiempo de vida de un proyecto. La agrupación temporal de tareas impone requisitos temporales correspondientes a la asignación de recursos (humanos, financieros o materiales).
    </p>
    <br>
    <p>
        <strong>Entregables:</strong> Son los productos intermedios que generan las fases. Pueden ser materiales o inmateriales (documentos, software). Los entregables permiten evaluar la marcha del proyecto mediante comprobaciones de su adecuación o no a los requisitos funcionales y de condiciones de realización previamente establecido.
    </p>
    <br>
    <h2 class="h2-content">1.1 Fases</h2>
    <br>
    <p>
        Las fases del modelo de ciclo del software son: planificación, análisis, diseño, implementación, pruebas y mantenimiento, las cuales se describen acontinuación.
    </p>
    <br>
    <p>
        <strong>FASE PLANIFICACIÓN:</strong> En esta primera fase se realiza el planteamiento del problema, se definen alcances y objetivos del software.
        <br><br>
        <strong>Objetivos:</strong> estudio de viabilidad, realizar planificación detallada.
    </p>
    <br>
    <img class="img-2" src="/images/ingenieria-de-requisitos/planificacion.png" alt="Fase de planificación">
    <br><br>
    <p>
        <strong>FASE ANÁLISIS (definición de requisitos):</strong> Esta fase busca definir los requisitos que son los que dirigirán el desarrollo del proyecto de software.
        <br><br>
        <strong>Objetivos:</strong> conocer los requisitos, asegurar que los requisitos son alcanzables, formalizar acuerdo con el cliente.
    </p>
    <br>
    <img class="img-2" src="/images/ingenieria-de-requisitos/analisis.png" alt="Fase de análisis">
    <br><br>
    <p>
        <strong>FASE DE DISEÑO:</strong> En esta fase se estudian posibles opciones de implementación para el software que hay que construir, estructura general del mismo.
        <br><br>
        <strong>Objetivos:</strong> Identificar soluciones tecnológicas, asignar recursos materiales, proponer identificar y seleccionar, establecer métodos de validación, ajustar especificaciones.
    </p>
    <br>
    <img class="img-2" src="/images/ingenieria-de-requisitos/diseño.png" alt="Fase de diseño">
    <br><br>
    <p>
        <strong>FASE DE PRUEBAS:</strong> Esta fase busca detectar fallos cometidos en las etapas anteriores para corregirlos.
        <br><br>
        <strong>Objetivos:</strong> Realizar los ajustes necesarios para corregir posibles errores o inconsistencias.
    </p>
    <br>
    <p>
        <strong>FASE DE MANTENIMIENTO:</strong> En esta fase se realizan tres puntos referenciados: mantenimiento correctivo, mantenimiento adaptativo y mantenimiento perfectivo.
        <br><br>
        <strong>Objetivos:</strong> Operación asegurar que el uso del proyecto es el que se pretendía, mantenimiento.
    </p>
    <br>
    <img class="img-2" src="/images/ingenieria-de-requisitos/pruebas.png" alt="Fase de pruebas">
    <br><br>
    <h2 class="h2-content" id="1.2. Paradigmas de los modelos de ciclo de vida del software">1.2. Paradigmas de los modelos de ciclo de vida del software</h2>
    <br>
    <p>
        Con la finalidad de proporcionar una metodología común entre el cliente y la empresa de software, se utilizan los modelos de ciclos de vida o paradigmas de desarrollo de software para plasmar las etapas y la documentación necesaria, de manera que cada fase se valide antes de continuar con la siguiente.
    </p>
    <br>
    <p>
        Un modelo de ciclo de vida de software es una vista de las actividades que ocurren durante el desarrollo de software e intenta determinar el orden de las etapas involucradas y los criterios de transición asociados entre estas.
    </p>
    <br>
    <p>
        Según la norma 1074 IEEE se define al ciclo de vida del software como:
    </p>
    <br>
    <p>
        <i>"Una aproximación lógica a la adquisición, el suministro, el desarrollo, la explotación y el mantenimiento del software"</i>
    </p>
    <br>
    <p>
        La ISO/IEC 12207 Information Technology / Software Life Cycle Processes señala que es:
    </p>
    <br>
    <p>
        Un marco de referencia que contiene los procesos, las actividades y las tareas involucradas en el desarrollo, la explotación y el mantenimiento de un producto de software, abarcando la vida del sistema desde la definición de los requisitos hasta la finalización de su uso (2008).
    </p>
    <br>
    <p>
        Existen modelos preestablecidos con los cuales se pude elaborar un proyecto; a continuación, se mencionan los diferentes paradigmas de modelos de ciclo de vida para desarrollar software.
    </p>
    <br>
    <p>
        <strong>Paradigma tradicional</strong>
    </p>
    <br>
    <p>
        Los paradigmas tradicionales se identifican, fundamentalmente, por ser lineales, es decir se trata de completar cada proceso de principio a fin hasta que quede listo para avanzar a la segunda fase del ciclo del software.
    </p>
    <br>
    <p>
        Si bien es verdad que las metodologías actuales están basadas en lo que fueron los paradigmas tradicionales, hoy en día se ha evolucionado, sin embargo, los paradigmas tradicionales se mantienen.
    </p>
    <br>
    <p>
        <strong>Desventaja:</strong>
    </p>
    <br>
    <p>
        Pérdida de tiempo si se encuentran errores en una fase avanzada porque al devolverse se debe pasar nuevamente por todas las fases y reestructurar de acuerdo con las modificaciones.
    </p>
    <br>
    <p>
        <strong>Paradigma orientado a objetos:</strong>
    </p>
    <br>
    <p>
        Las etapas de desarrollo de software en el paradigma orientado a objetos, se conforma principalmente por la creación de clases, análisis de requisitos y el diseño. Con este paradigma se pretende que el código fuente sea reutilizable para otros proyectos.
    </p>
    <br>
    <p>
        <strong>Paradigma de desarrollo ágil</strong>
    </p>
    <br>
    <p>
        El objetivo de este paradigma es el desarrollo de proyectos en poco tiempo, se simplifican procesos tediosos, se agilizan las fases del desarrollo y las interacciones se hacen en corto tiempo.
    </p>
    <br>
    <p>
        Una de las principales diferencias con los paradigmas anteriores es que el cliente se ve involucrado en el proyecto durante el desarrollo de este, así, el cliente sugiere mejoras, propone ideas y se mantiene al tanto del desarrollo del producto, a diferencia del paradigma tradicional y el orientado objeto donde el cliente únicamente está al principio.
    </p>
    <br>
    <p>
        A continuación, se revisan los modelos del paradigma tradicional más utilizados.
    </p>
    <br>
    <h2 class="h2-content" id="Modelo en cascada">Modelo en cascada</h2>
    <br>
    <p>
        Uno de los primeros modelos de ciclo de vida del desarrollo fue establecido por W. Royce en 1970 y es conocido como el “modelo de cascada” (waterfall model).
    </p>
    <br>
    <p>
        En su concepción básica, cada una de las actividades genera, como salidas, productos y modelos que son utilizados como entradas para el proceso subsiguiente; esto supone que una actividad debe terminarse (por lo menos, en algún grado) para empezar la siguiente.
    </p>
    <br>
    <img class="img-2" src="/images/ingenieria-de-requisitos/Modelo en cascada.png" alt="Modelo en cascada">
    <br><br>
    <h2 class="h2-content" id="Modelo espiral">Modelo espiral</h2>
    <br>
    <p>
        Fue diseñado por Boehm en el año 1988 y se basa en una serie de ciclos repetitivos para ir ganando madurez en el producto final. El espiral se repite las veces que sea necesario hasta que el cliente o el usuario obtenga la satisfacción de sus necesidades.
    </p>
    <br>
    <p>
        En este modelo hay 4 actividades que envuelven a las etapas: planificación, análisis de riesgo, implementación y evaluación. Una de sus principales ventajas es que los riesgos van disminuyendo conforme avanzan los ciclos o interacciones.
    </p>
    <br>
    <img class="img-2" src="/images/ingenieria-de-requisitos/Modelo espiral.png" alt="Modelo espiral">
    <br><br>
    <h2 class="h2-content" id="Modelo iterativo o por prototipos">Modelo iterativo o por prototipos</h2>
    <br>
    <p>
        Este modelo consiste en un procedimiento que permite al equipo de desarrollo diseñar y analizar una aplicación que represente el sistema que será implementado (McCracken y Jackson, 1982).
    </p>
    <br>
    <p>
        <strong>Objetivos</strong>
    </p>
    <br>
    <p>
        <strong>A.</strong> Son un medio eficaz para aclarar los requisitos de los usuarios e identificar las características de un sistema que deben cambiarse o añadirse.
    </p>
    <br>
    <p>
        <strong>B.</strong> Mediante el prototipo se puede verificar la viabilidad del diseño de un sistema.
    </p>
    <br>
    <p>
        Las etapas del modelo son:
    </p>
    <br>
    <ul>

        <li>
            <strong>1.</strong> Colecta y refinamiento de los requerimientos y proyecto rápido.
            <br><br>
            <ul>
                <li>Análisis.</li><br>
                <li>Especificación del prototipo.</li><br>
            </ul>
        </li>

        <li><strong>2.</strong> Diseño rápido.</li><br>

        <li><strong>3.</strong> Construcción del prototipo.</li><br>

        <li><strong>4.</strong> Evaluación del prototipo por el cliente.</li><br>

        <li><strong>5.</strong> Refinamiento del prototipo.
            <br><br>
            <ul>
                <li>Diseño técnico.</li><br>
                 <li>Programación y test.</li><br>
                 <li>Operación y mantenimiento.</li><br>
            </ul>
        </li>

        <li><strong>6.</strong> Producto de ingeniería.</li>

    </ul>
    <br>
    <br>
    <img class="img-2" src="/images/ingenieria-de-requisitos/Modelo iterativo o por prototipos.png" alt="Modelo iterativo o por prototipos">
    <br><br>
    <p>
        Con respecto a los modelos del ciclo de vida del paradigma ágil, estos se caracterizan por estar basados en etapas del ciclo de vida del software tradicional, pero combinándolas con algunas técnicas, al respecto se pueden revisar los siguientes:
    </p>
    <br>
    <h2 class="h2-content" id="Modelo Scrum">Modelo Scrum</h2>
    <br>
    <p>
        Este modelo se basa en el desarrollo incremental, es decir conforme pasen las fases y la iteración mayor será el tamaño del proyecto que se está desarrollando.
    </p>
    <br>
    <p>
        Los procesos que utiliza son:
    </p>
    <br>
    <ul>
        <li><strong>1.</strong> Product Backlog.</li><br>
        <li><strong>2.</strong> Sprint Backlog.</li><br>
        <li><strong>3.</strong> Sprint Planning Meeting.</li><br>
        <li><strong>4.</strong> Daily Scrum.</li><br>
        <li><strong>5.</strong> Sprint Review.</li><br>
        <li><strong>6.</strong> Sprint Retrospective.</li><br>
    </ul>
    <p>
        El Scrum consiste en realizar un análisis de los requerimientos del sistema (Product Backlog), señalar cuáles serán los objetivos a corto o mediano plazo dentro de un sprint, o sea, la fase de desarrollo. Posteriormente, los desarrolladores harán lo suyo, se realizarán algunas pruebas y se retroalimentará de acuerdo con lo conseguido al terminar la última fase.
    </p>
    <br>
    <p>
        <strong>Ventajas</strong>
    </p>
    <br>
    <p>
        <strong>Gestión regular de las expectativas del usuario:</strong> los usuarios participan y proponen soluciones.
    </p>
    <br>
    <p>
        <strong>Resultados anticipados:</strong> no es necesario esperar hasta el final para ver resultados.
    </p>
    <br>
    <p>
        <strong>Flexibilidad y adaptación:</strong> se adapta a cualquier contexto, área o sector.
    </p>
    <br>
    <p>
        <strong>Gestión sistemática de riesgos:</strong> los problemas son gestionados en el mismo momento de su aparición.
    </p>
    <br>
    <img class="img-2" src="/images/ingenieria-de-requisitos/Modelo ágil Scrum.png" alt="Modelo ágil Scrum">
    <br>
    <h2 class="h2-content" id="Modelo Kanban">Modelo Kanban</h2>
    <br>
    <p>
        David J. Anderson (reconocido como el líder de pensamiento de la adopción del Lean/Kanban para el trabajo de conocimiento), formuló el método Kanban como una aproximación al proceso evolutivo e incremental y al cambio de sistemas para las organizaciones de trabajo. El método está enfocado en llevar a cabo las tareas pendientes y los principios más importantes pueden ser divididos en cuatro principios básicos y seis prácticas.
    </p>
    <br>
    <p>
        El modelo Kanban es uno de los modelos más visuales de las metodologías ágiles; este consiste en la creación de un tablero con etiquetas, donde se seccionan cada una de las fases de su desarrollo, además se clasifican de acuerdo con los equipos de trabajo y se les asignan objetivos a corto, mediano y largo plazo.
    </p>
    <br>
    <p>
        Mediante la metodología japonesa Kanban se:
    </p>
    <br>
    <ul>
        <li><strong>1.</strong> Define el flujo de trabajo.</li><br>
        <li><strong>2.</strong> Establecen las fases del ciclo de producción.</li><br>
        <li><strong>3.</strong> Stop Starting, start finishing.</li><br>
        <li><strong>4.</strong> Tiene un control.</li><br>
    </ul>
    <img class="img-2" src="/images/ingenieria-de-requisitos/Modelo ágil Kanban.png" alt="Modelo ágil Kanban">
    <br><br>
    <h2 class="h2-content" id="Modelo XP o programación extrema">Modelo XP o programación extrema</h2>
    <br>
    <p>
        La programación extrema o eXtreme Programming (XP) es un enfoque de la ingeniería de software formulado por Kent Beck, autor del primer libro sobre este tema: Extreme Programming Explained: Embrace Change (1999). Esta metodología es adaptable según las necesidades y requerimientos a implementar, además, el cliente se encuentra involucrado en el proceso de desarrollo lo que hace que el producto pueda ser terminado en un menor tiempo.
    </p>
    <br>
    <p>
        Características principales de la programación extrema:
    </p>
    <br>
    <ul>
        <li><strong>1.</strong> Tipo de desarrollo iterativo e incremental.</li><br>
        <li><strong>2.</strong> Pruebas unitarias.</li><br>
        <li><strong>3.</strong> Trabajo en Equipo.</li><br>
        <li><strong>4.</strong> Trabajo junto al cliente.</li><br>
        <li><strong>5.</strong> Corrección de errores.</li><br>
        <li><strong>6.</strong> Reestructuración del código.</li><br>
        <li><strong>7.</strong> El código es de todos.</li><br>
        <li><strong>8.</strong> El código simple es la clave.</li><br>
    </ul>
    <br>
    <img class="img-2" src="/images/ingenieria-de-requisitos/Modelo XP.png" alt="Modelo XP">
    @endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#1. Ciclo de vida del software">1. Ciclo de vida del software</a><br><br>
    <a href="#1.1 Fases">1.1 Fases</a><br><br>
    <a href="#1.2. Paradigmas de los modelos de ciclo de vida del software">1.2. Paradigmas de los modelos de ciclo de vida del software</a><br><br>
    <a href="#Modelo en cascada">Modelo en cascada</a><br><br>
    <a href="#Modelo espiral">Modelo espiral</a><br><br>
    <a href="#Modelo iterativo o por prototipos">Modelo iterativo o por prototipos</a><br><br>
    <a href="#Modelo Scrum">Modelo Scrum</a><br><br>
    <a href="#Modelo Kanban">Modelo Kanban</a><br><br>
    <a href="#Modelo XP o programación extrema">Modelo XP o programación extrema</a><br><br>
@endsection
