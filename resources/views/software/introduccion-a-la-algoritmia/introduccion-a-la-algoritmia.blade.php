@extends('../../layouts.sistemas')
@section('../../title', 'Introducción a la algoritmia')

@section('navbar')
    @include('partials.navbar-introduccion-a-la-algoritmia')
@endsection

@section('content')
    <h1 class="h1-content" id="introduccion">1. Introducción a la algoritmia</h1>
    <br>
    <p>
        <strong>La aplicación apropiada de una serie de pasos detallados puede garantizar una solución correcta de un problema; es así como la programación de computadores o construcción de software se basa en esta práctica.</strong>
    </p>
    <br>
    <img src="/images/introduccion-a-la-algoritmia/Pasos en la algoritmia básica.png" alt="Pasos en la algoritmia básica.">
    <p style="text-align: center">Figura 1. Pasos en la algoritmia básica.</p>
    <br><br>
    <h2 class="h2-content" id="1.1. Definición de algoritmo">1.1. Definición de algoritmo</h2>
    <br>
    <p>
        Según la Real Academia Española (2020) un algoritmo está definido como un <strong>“conjunto ordenado y finito de operaciones que permite hallar la solución de un problema”</strong>.
    </p>
    <br>
    <p>
        Es importante comprender que computacionalmente las máquinas están en capacidad de hacer unas pocas operaciones matemáticas muy básicas y sencillas, pero también se considera que computan enormes cantidades de estas operaciones en unidades de tiempo muy corto.
    </p>
    <br>
    <p>
        Entonces, la solución de un problema utilizando computadoras, fácilmente se puede convertir en una enorme cantidad de pequeñas operaciones matemáticas, tal vez abrumadoras desde el punto de vista humano. Es por eso que se requiere la especialización de conjuntos de operaciones, los cuales se agrupan en pequeños procesos que componen la solución de un problema.
    </p>
    <br>
    <p>
        Para ampliar la definición puede visualizar el siguiente <a href="https://www.youtube.com/watch?v=U3CGMyjzlvM">video</a>
    </p>
    <br>
    <h2 class="h2-content" id="1.2. Pensamiento algorítmico">1.2. Pensamiento algorítmico</h2>
    <br>
    <p>
        Es así como un problema puede ser abordado de varias maneras y aportar la misma solución, pero lo que siempre tendrán en común es que para resolverlo usaron una secuencia de pasos ordenados, por ejemplo, si se pasa una hoja de papel cuadriculado a los aprendices de una clase y se les pide que dibujen un cuadrado sin levantar el lápiz, habrá quienes lo hagan de diferente manera y obtengan el mismo resultado como lo muestra la siguiente figura:
    </p>
    <br>
    <img class="img-2" src="/images/introduccion-a-la-algoritmia/Pensamiento algorítmico.png" alt="Pensamiento lógico y procedimental.">
    <br>
    <p style="text-align: center">
        Figura 2. Pensamiento lógico y procedimental.
    </p>
    <br>
    <p>
        <strong>
            Como se observa en la figura el aprendiz A inició realizando una línea vertical hacia arriba, mientras que el aprendiz B una vertical hacia abajo, o el aprendiz D una horizontal hacia la derecha, y todos los siguientes llevaron a cabo un proceso que les permitió cumplir con la solución al problema planteado, de forma global prácticamente existe una gran cantidad de soluciones al mismo problema.
        </strong>
    </p>
    <br>
    <p>
        Al imaginar que el problema es mucho más complejo que el descrito en el ejemplo anterior se concluye que existen tantas soluciones como el enfoque o lógica empleada por cada aprendiz o persona. Pero lo que sí es común en todos los casos es que se realizaron unas fases mentales secuencialmente ordenadas, las cuales son:
    </p>
    <br>
    <ul>
        <li>
            1. Entender el problema enunciado por el instructor (entender el problema).
        </li><br>

        <li>
            2. Escoger una ruta a seguir del rectángulo (hacer un plan).
        </li><br>

        <li>
            3. Plasmar en el papel cuadriculado ese plan (ejecutar el plan).
        </li><br>

        <li>
            4. Revisar el resultado y ver que se alcanzó el objetivo (revisar).
        </li><br>
    </ul>
    <p>
        Cuando el problema es muy complejo de resolver, muchas veces toca volver y analizar el problema, o trazar un nuevo plan o plasmar ese nuevo plan una y otra vez, revisando los resultados y volviendo a analizar hasta encontrar la solución del problema.
    </p>
    <br>
    <h2 class="h2-content" id="1.3. Solución de problemas y programación">1.3. Solución de problemas y programación</h2>
    <br>
    <p>
        <strong>
            “Los algoritmos son una herramienta que permite describir claramente un conjunto finito de instrucciones"
        </strong>
    </p>
    <br>
    <p>
        “En el ámbito de la computación los algoritmos son una herramienta que permite describir claramente un conjunto finito de instrucciones ordenadas secuencialmente y libres de ambigüedad, que debe llevar a cabo un computador para lograr un resultado previsible. Vale la pena recordar que un programa de computador consiste de una serie de instrucciones muy precisas y escritas en un lenguaje de programación que el computador entiende (Logo, Java, Pascal, etc.)” (López, 2019, p. 7).
    </p>
    <br>
    <img class="img-2" src="/images/introduccion-a-la-algoritmia/ejemplo1.png" alt="Ejemplo 1.">
    <br>
    <p style="text-align: center">
        <strong>Ejemplo 1:</strong> se propone diseñar un algoritmo para apagar una computadora.
    </p>
    <br>
    <img class="img-2" src="/images/introduccion-a-la-algoritmia/ejemplo2.png" alt="Ejemplo 2.">
    <br>
    <p style="text-align: center">
        <strong>Ejemplo 2:</strong> se propone diseñar un algoritmo para cargar un celular.
    </p>
    <br>
    <p>
        Con base en los ejemplos anteriormente planteados se puede concluir que un algoritmo debe ser:
    </p>
    <br>
    <p>
        <strong>Realizable:</strong> El proceso algorítmico debe terminar después de una cantidad finita de pasos. Se dice que un algoritmo es inaplicable cuando se ejecuta con un conjunto de datos iniciales y el proceso resulta infinito o durante la ejecución se encuentra con un obstáculo insuperable sin arrojar un resultado.
    </p>
    <br>
    <p>
        <strong>Comprensible:</strong> Debe ser claro lo que hace, de forma que quien ejecute los pasos (ser humano o máquina) sepa qué, cómo y cuándo hacerlo. Debe existir un procedimiento que determine el proceso de ejecución.
    </p>
    <br>
    <p>
        <strong>Preciso:</strong> El orden de ejecución de las instrucciones debe estar perfectamente indicado. Cuando se ejecuta varias veces, con los mismos datos iniciales, el resultado debe ser el mismo siempre. La precisión implica determinismo. (López, 2009, p. 22)
    </p>
    <br>
    <img class="img-2" src="/images/introduccion-a-la-algoritmia/figura3.png" alt="Pensamiento lógico y procedimental.">
    <br>
    <p style="text-align: center">
        Figura 3. Fases para elaborar un programa de computador. Figura recuperada de Educación básica algoritmos y programación. Guía para docentes, de J. C. López García, 2007-2009, Fundación Gabriel Piedrahita Uribe www.eduteka.org p. 11.
    </p>
    <br>
    <p>
        La figura 3 muestra las fases y sus relaciones en el proceso de diseño de algoritmos de programas informáticos, que están basados en un algoritmo que posteriormente es escrito en un lenguaje de programación.
    </p>
    <br>
    <h2 class="h2-content" id="1.4. Análisis del problema (entenderlo)">1.4. Análisis del problema (entenderlo)</h2>
    <br>
    <p>
        Como los programas de computador tienen por objetivo resolver problemas muy puntuales, lo primero que se debe realizar para resolverlos es lograr una mejor comprensión posible de estos.
    </p>
    <br>
    <p>
        Para realizar esta actividad se debe:
    </p>
    <br>
    <ul>
        <li>
            1. Formular claramente el problema.
        </li><br>

        <li>
            2. Especificar los resultados que se desean obtener con la solución.
        </li><br>

        <li>
            3. Identificar la información disponible en los datos.
        </li><br>
    </ul>
    <br>
    <h2 class="h2-content" id="1.4.1. Formular el problema.">1.4.1. Formular el problema.</h2>
    <br>
    <p>
        A continuación, algunas preguntas previas a la formulación del problema:
    </p>
    <br>
    <ul>
        <li>
            ¿Es posible definir de forma más clara el problema
        </li><br>

        <li>
            ¿Qué palabras no son conocidas o se desconoce su significado?
        </li><br>

        <li>
            ¿Se ha resuelto antes algún problema similar?
        </li><br>

        <li>
            ¿Qué información es importante para resolver el problema?
        </li><br>

        <li>
            ¿Qué información no es importante y se puede omitir?
        </li><br>
    </ul>
    <br>
    <h2 class="h2-content">
        Ejemplo
    </h2>
    <br>
    <p>
        Don Juan necesita decidir cómo comprar un teléfono celular que cuesta $870.000 de contado o $980.000 a crédito; él tiene $630.000 pesos en efectivo.
    </p>
    <br>
    <p>
        Luego de revisar las preguntas previas se puede concluir:
    </p>
    <br>
    <p>
        Como el efectivo que tiene don Juan no le alcanza para comprar el teléfono celular de contado, entonces él tiene dos opciones: comprarlo completamente a crédito o también pagar una parte de contado (como cuota inicial) y el resto diferirlo a crédito.
    </p>
    <br>
    <p>
        Para poder resolver este problema se debe conocer el número de cuotas en el que difiere si desea pagarlo totalmente a crédito o conocer el número de cuotas y el valor total del celular si se da una cuota inicial de $630.000 pesos.
    </p>
    <br>
    <h2 class="h2-content" id="1.4.2. Precisar elementos de entrada.">1.4.2. Precisar elementos de entrada.</h2>
    <br>
    <p>
        Otro punto importante en la fase de análisis del problema es determinar cuál es la información disponible, por lo tanto:
    </p>
    <br>
    <ul>
        <li>
            ¿Qué información es importante y necesaria para resolver el problema?
        </li><br>

        <li>
            ¿Qué información no es importante y se puede prescindir?
        </li><br>

        <li>
            ¿Cuáles son los datos de entrada conocidos
        <li><br>

        <li>
            ¿Cuál es la incógnita o qué se debe calcular?
        </li><br>

        <li>
            ¿Los datos se pueden agrupar en categorías?
        </li><br>

        <li>
            ¿Qué información adicional hace falta para resolver el problema?
        </li><br>
    </ul>
    <p>
        Otro elemento a resaltar es el nivel de conocimiento y las limitaciones que se tienen en el ámbito o el contexto del problema que está tratando de resolver. Por ejemplo, si el problema requiere conceptos financieros para entender la naturaleza de los datos, o si es necesario adquirir nueva información y/o poder consultarla, para estar seguros de que es posible tratarla conforme el contexto lo requiera.
    </p>
    <br>
    <h2 class="h2-content" id="1.4.3. Precisar resultados esperados.">1.4.3. Precisar resultados esperados.</h2>
    <br>
    <p>
        Para determinar con claridad cuál es el resultado final esperado (o producto) que se quiere obtener es necesario determinar o definir qué resultados se solicitan y, en qué tipo o formato deben estar (mostrados en pantalla, diagramación, orden, etc.). Para ello, es importante tener en cuenta:
    </p>
    <br>
    <ul>
        <li>
            ¿Qué información están solicitando?
        </li><br>

        <li>
            ¿En qué formato se debe entregar esta información?
        </li><br>
    </ul>
    <h2 class="h2-content" id="1.5. Desarrollo de la creatividad: elementos, modelos, fases y sus objetivos">1.5. Desarrollo de la creatividad: elementos, modelos, fases y sus objetivos</h2>
    <br>
    <p>
        Resolver algoritmos es una actividad que requiere en la mayoría de los casos creatividad por parte del programador, esta es una habilidad que se va fortaleciendo en la medida que se desempeña más y más en procesos de desarrollo de software.
    </p>
    <br>
    <p>
        Resolver algoritmos es una actividad que requiere en la mayoría de los casos creatividad por parte del programador, esta es una habilidad que se va fortaleciendo en la medida que se desempeña más y más en procesos de desarrollo de software.
    </p>
    <br>
    <img class="img-2" src="/images/introduccion-a-la-algoritmia/figura4.png" alt=" Espiral del Pensamiento Creativo.">
    <br>
    <p style="text-align: center">
        Figura 4. Espiral del Pensamiento Creativo diseñada por el Dr. Mitchel Resnick. Figura recuperada de Educación básica algoritmos y programación. Guía para docentes, de J. C. López García, 2007-2009, Fundación Gabriel Piedrahita Uribe, www.eduteka.org p. 19.
    </p>
    <br>
    <p>
        En conclusión, se puede decir que un algoritmo es la definición de una secuencia lógica de pasos que permiten solucionar un problema. Formular algoritmos es la base de los grandes adelantos en las ciencias matemáticas y la tecnología, porque se pueden aplicar a cualquier área del conocimiento.
    </p>
@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#introduccion">1. Introducción a la algoritmia</a><br><br>
    <a href="#1.1. Definición de algoritmo">1.1. Definición de algoritmo</a><br><br>
    <a href="#1.2. Pensamiento algorítmico">1.2. Pensamiento algorítmico</a><br><br>
    <a href="#1.3. Solución de problemas y programación">1.3. Solución de problemas y programación</a><br><br>
    <a href="#1.4. Análisis del problema (entenderlo)">1.4. Análisis del problema (entenderlo)</a><br><br>
    <a href="#1.4.1. Formular el problema.">1.4.1. Formular el problema.</a><br><br>
    <a href="#1.4.2. Precisar elementos de entrada.">1.4.2. Precisar elementos de entrada.</a><br><br>
    <a href="#1.4.3. Precisar resultados esperados.">1.4.3. Precisar resultados esperados.</a><br><br>
    <a href="#1.5. Desarrollo de la creatividad: elementos, modelos, fases y sus objetivos">1.5. Desarrollo de la creatividad: elementos, modelos, fases y sus objetivos</a><br><br>
@endsection
