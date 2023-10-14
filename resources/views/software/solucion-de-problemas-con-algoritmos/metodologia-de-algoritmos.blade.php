@extends('../../layouts.sistemas')
@section('../../title', 'Análisis y solución de problemas aplicando algoritmos')

@section('navbar')
    @include('partials.navbar-solucion-de-problemas-con-algoritmos')
@endsection

@section('content')
    <h1 class="h1-content" id="1. Metodología de algoritmos">1. Metodología de algoritmos</h1>
    <br>
    <p>
        De manera implícita, en las distintas áreas productivas de la sociedad se usan algoritmos y un par de ejemplos pueden ser que, en la construcción de una casa, el ingeniero o el arquitecto analiza el terreno, diseña unos planos, realiza maquetas y así continúan siguiendo una secuencia lógica de procesos, para la resolución del problema; o un abogado que antes de defender a un cliente analiza las pruebas, elabora un plan, practica sus argumentos y sigue un método para lograr la defensa de su cliente. Se puede concluir, entonces, que una solución a la medida de un problema requiere una metodología que lleve a la solución final.
    </p>
    <br>
    <p>
        <strong>En el proceso de desarrollo de programas informáticos, aparte de conocer esta metodología, se necesita conocer las funciones que puede realizar un computador y la representación de las mismas.</strong>
    </p>
    <br>
    <p>
        En general, existen tres (3) fases secuenciales para la elaboración de un algoritmo representadas en la siguiente figura y de las cuales se abordarán las dos primeras:
    </p>
    <br>
    <img class="img-4 img-2" src="/images/solucion-de-problemas-aplicando-algoritmos/Figura 1. Metodología de creación de algoritmos.svg" alt="La definición de dato">
    <p style="text-align: center">
        Figura 1. Metodología de creación de algoritmos
    </p>
    <br>
    <h2 class="h2-content" id="1.1. Análisis">1.1. Análisis</h2>
    <br>
    <p>
        Como se percibió en componentes anteriores, la fase de análisis trata de responder a la pregunta: <strong>¿Qué es lo que se debe hacer?</strong>, y esto es necesario para entender el problema. Por ello, es preciso relacionar los datos de entrada, salida o resultados con los procesos a ejecutar con esta información y los datos auxiliares que se puedan requerir en las tareas.
    </p>
    <br>
    <p>
        Hasta este punto parece que esas son las actividades propias del análisis, sin embargo, el éxito de un algoritmo consiste en reducir a cero la brecha de lo que el cliente necesita y los resultados que el algoritmo entrega. Para lograrlo en su totalidad, <strong>es importante indagar otros aspectos que corresponden a la naturaleza del problema</strong>, las siguientes preguntas modeladoras son de referencia casi obligante a tener en cuenta
    </p>
    <br>
    <ul>
        <li>
            ¿Qué es?
        </li><br>

        <li>
            ¿Quiénes intervienen?
        </li><br>

        <li>
            ¿Cómo interviene o se comporta?
        </li><br>

        <li>
            ¿Cuándo?
        </li><br>

        <li>
            ¿Cómo lo hace?
        </li><br>

        <li>
            ¿Por qué? y
        </li><br>

        <li>
            ¿Para qué?
        </li><br>
    </ul>
    <br>
    <h2 class="h2-content" id="1.2. Diseño">1.2. Diseño</h2>
    <br>
    <p>
        En esta etapa se responde, básicamente, a la pregunta <strong>¿Cómo se va a hacer?</strong>, refiriéndose a la manera en la que el sistema va a realizar la tarea solicitada. Lo importante en este punto, es que debe quedar bien definido el problema, sin dar espacio a más de una interpretación de la acción o acciones que debe hacer el sistema.
    </p>
    <br>
    <p>
        En el proceso de desarrollo del algoritmo, las siguientes actividades son obligatorias, sobre todo si se está empezado en el diseño de soluciones basadas en algoritmos y no se cuenta con mucha experiencia:
    </p>
    <br>
    <img class=" img-1" src="/images/solucion-de-problemas-aplicando-algoritmos/pasos.svg" alt="">
    <br><br>
    <p>
        Para la verificación del algoritmo, se aplica una técnica denominada <strong>pruebas de escritorio o trazas, que trata de la validación y verificación del algoritmo mediante la ejecución de las sentencias u operaciones que lo componen (proceso)</strong>,y así determinar sus resultados de salida a partir de una base determinada de elementos en la entrada del proceso.
    </p>
    <br>
    <p>
        Como el resultado del proceso de diseño es un algoritmo, es obligatorio saber representarlo de alguna manera, y se empleará inicialmente con la notación de pseudocódigo para hacer este tipo de representaciones.
    </p>
    <br>
    <h2 class="h2-content" id="1.2.1. Notación de diseño: pseudocódigo">1.2.1. Notación de diseño: pseudocódigo</h2>
    <br>
    <p>
        Para expresar el contenido de un programa de computadora, se necesita de un lenguaje de programación que las computadoras pueden interpretar. Sin embargo, se puede expresar ese mismo contenido en el lenguaje natural lengua materna (español), empleando expresiones sencillas que lo simplifican y abrevian. Cuando se emplea esta técnica, se dice que está escrito en pseudocódigo.
    </p>
    <br>
    <p>
        <strong>Ejemplo: el cliente pide que se desarrolle un programa de computadora que le solicite al usuario un número, luego el sistema debe mostrar en pantalla el número digitado.</strong>
    </p>
    <br>
    <p>
        A continuación, se aplica la metodología vista:
    </p>
    <br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/analisis.svg" alt="Anánlisis">
    <p style="text-align: center">
        Análisis
    </p>
    <br>
    <p>
        El dato de entrada debe ser un número ingresado por el usuario, pero antes de eso el sistema debe solicitarle al usuario que lo ingrese (digite) al programa, si no, ¿de qué otra manera el usuario sabría que el programa está esperando el ingreso de ese dato? Por lo tanto, una posible operación inicial dentro del algoritmo sería escribir en pantalla que “por favor se ingrese un número”.
    </p>
    <br>
    <p>
        La segunda operación es la de recibir ese número desde el teclado, para ingresarlo al programa, pero esto implica que se debe definir un dato intermedio donde se guardará ese valor y el cual identificará el valor ingresado (a este dato se denomina variable porque puede tener cualquier valor entero según digite el usuario). Ya ocurre el primer problema: para guardar el dato (variable) se debe definir dónde se almacenará o como podría referirse al dato ingresado dentro del programa, por lo tanto, antes de empezar el algoritmo se debe indicar al computador que reserve un espacio para guardar un número entero.
    </p>
    <br>
    <p>
        Una vez definida la variable, es posible referirse a ella, leer desde el teclado el número entero y almacenarlo en dicha variable.
    </p>
    <br>
    <p>
        Por último, el sistema debe imprimir el contenido de la variable (dato de salida), con lo cual se puede dar final al programa.
    </p>
    <br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/diseño.svg" alt="Diseño">
    <p style="text-align: center">
        Diseño
    </p>
    <br>
    <p>
        En anterior análisis se contemplaron los datos de entrada, datos auxiliares (variable) operaciones (impresión en pantalla, lectura de datos e impresión en pantalla de resultados). Pero son muchas las palabras usadas en el análisis por lo tanto lo abreviamos con el siguiente código que, posteriormente, se explicará.
    </p>
    <br>
    <img class="img-2" src="/images/solucion-de-problemas-aplicando-algoritmos/figura 2.png" alt="Figura 2. pseudocódigo imprimir un número">
    <p style="text-align: center">
        Figura 2. pseudocódigo imprimir un número
    </p>
    <br>
    <p>
        En <strong>ALGORITMO</strong> se indica el nombre del algoritmo, y después se declaran las variables que serán usadas en él (con VAR) indicando su tipo de dato (un valor de tipo <strong>ENTERO</strong> , para este ejemplo).
    </p>
    <br>
    <p>
        Entre <strong>INICIO</strong> y <strong>FIN</strong> se escriben las diferentes acciones que realizará el algoritmo y usamos <strong>ESCRIBIR</strong>()para indicar con esta palabra que se mostrará un mensaje por pantalla (el texto que se va a mostrar 'tal cual' debe ir entre paréntesis dobles), y <strong>LEER</strong>() para recibir el dato desde el teclado.
    </p>
    <br>
    <p>
        Se debe tener en cuenta que cada línea termina en punto y coma (excepto <strong>INICIO</strong> y <strong>FIN</strong> ), el punto y coma indica que lo que se ejecuta es una sentencia que hace una única operación, mientras que lo que está entre <strong>INICIO</strong> y <strong>FIN</strong> agrupa varias sentencias que se ejecutan en un orden determinado.
    </p>
    <br>
    <h2 class="h2-content" id="1.2.2. Pruebas de escritorio o trazas">1.2.2. Pruebas de escritorio o trazas</h2>
    <br>
    <p>
        <strong>Pruebas de escritorio o trazas</strong>
    </p>
    <br>
    <p>
        Las pruebas de escritorio son las simulaciones de ejecución de un algoritmo que permite determinar la validez o efectividad del mismo. Se trata de escribir en una tabla con tantas columnas como variables tiene el algoritmo y seguir las instrucciones poniendo los valores correspondientes.
    </p>
    <br>
    <p>
        <a href="https://sena.territorio.la/content/index.php/institucion/Titulada/institution/SENA/Tecnologia/228118/Contenido/OVA/CF13//downloads/Infografia_Prueba_de_Escritorio.pdf">Descargar</a>
    </p>
    <br>
    <p>
        <strong>Ejemplo: escribir un algoritmo que calcule el cuadrado y el cubo de un número introducido por teclado y mostrar los resultados para el cubo y el cuadrado.</strong>
    </p>
    <br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/analisis.svg" alt="Anánlisis">
    <p style="text-align: center">
        Análisis
    </p>
    <br>
    <p>
        Nuevamente el dato de entrada debe ser un número ingresado por el usuario, y al igual que en el ejemplo anterior se debe solicitar al usuario que lo digite.
    </p>
    <br>
    <p>
        Antes de realizar las operaciones de elevar al cuadrado y al cubo, se necesita definir las dos variables que recibirán estos datos (el cuadrado, y el cubo), por lo tanto, el algoritmo debe definirlas antes de realizar las operaciones y asignarles a ellas los resultados.
    </p>
    <br>
    <p>
        Una vez realizadas las operaciones el algoritmo debe mostrar en pantalla el contenido de estas variables, con un mensaje texto que indique si es el resultado del cuadrado o del cubo.
    </p>
    <br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/diseño.svg" alt="Diseño">
    <p style="text-align: center">
        Diseño
    </p>
    <br>
    <p>
        La siguiente figura tiene la representación del resultado al análisis anterior.
    </p>
    <br>
    <img class="img-2" src="/images/solucion-de-problemas-aplicando-algoritmos/figura 3.png" alt="Figura 3. Metodología de creación de algoritmos">
    <br>
    <p>
        Las pruebas de escritorio permiten verificar que el pseudocódigo realice lo que se espera al resolver el problema. Sin embargo, por ahora es importante que a todos los pseudocódigos se les aplique, al menos, una de prueba de escritorio o las que se consideren necesarias.
    </p>
    <br>
    <p>
        <strong>La mayoría de las pruebas de escritorio se representan en una tabla, donde en cada columna se anotan las variables y condiciones si las hay</strong>, en el orden en que aparecen en el algoritmo, <strong>para entenderlo se tiene que recorrer línea a línea el pseudocódigo y así identificar tanto las variables como condiciones</strong> e ir anotándolas en la tabla de la prueba de escritorio.
    </p>
    <br>
    <p>
        Es importante que en la tabla no aparezcan variables o condiciones repetidas y en la última columna se pueden anotar los datos de salida para entonces también anotar <strong>“Salida”</strong>.
    </p>
    <br>
    <p>
        Ejecutando línea a línea el algoritmo de la figura 3 y se va llenando la tabla como muestra la siguiente figura:
    </p>
    <br>
    <img class="img-3" src="/images/solucion-de-problemas-aplicando-algoritmos/figura 4.svg" alt="Figura 4- Tablas de traza del algoritmo">
    <p style="text-align: center">
        Figura 4- Tablas de traza del algoritmo
    </p>
    <br>
    <p>
        También es posible realizar pruebas de escritorio a otras representaciones de algoritmos, como los diagramas de flujo, expuestos a continuación, y que se representan con algoritmos recomendando que a cada ejemplo presentado se le realice la prueba de escritorio correspondiente.
    </p>
@endsection

@section('sidebar')
<h1 class="h1-sidebar">En este articulo</h1>
<a href="#1. Metodología de algoritmos">1. Metodología de algoritmos</a><br><br>
<a href="#1.1. Análisis">1.1. Análisis</a><br><br>
<a href="#1.2. Diseño">1.2. Diseño</a><br><br>
<a href="#1.2.1. Notación de diseño: pseudocódigo">1.2.1. Notación de diseño: pseudocódigo</a><br><br>
<a href="#1.2.2. Pruebas de escritorio o trazas">1.2.2. Pruebas de escritorio o trazas</a><br><br>
@endsection
