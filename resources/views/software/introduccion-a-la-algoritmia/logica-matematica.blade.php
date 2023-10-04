@extends('../../layouts.sistemas')
@section('../../title', 'Introducción a la algoritmia')

@section('navbar')
    @include('partials.navbar-introduccion-a-la-algoritmia')
@endsection

@section('content')
    <h1 class="h1-content" id="2. Lógica matemática">2. Lógica matemática</h1>
    <br>
    <p>
        La lógica matemática es la disciplina que trata de métodos de razonamiento. En un nivel elemental, la lógica proporciona reglas y técnicas para determinar si es o no válido un argumento dado. El razonamiento lógico se emplea en matemáticas para demostrar teoremas; en ciencias de la computación para verificar si son o no correctos los programas; en las ciencias física y naturales, para sacar conclusiones de experimentos; y en las ciencias sociales y en la vida cotidiana, para resolver una multitud de problemas. Ciertamente se usa en forma constante el razonamiento lógico para realizar cualquier actividad. (EcuRed, s.f.)
    </p>
    <br>
    <p>
        Para ampliar la definición puede visualizar el siguiente <a href="https://www.youtube.com/watch?v=9zYDaZhS7Ac">video</a>
    </p>
    <br>
    <h2 class="h2-content" id="2.1. Componentes de la lógica matemática">2.1. Componentes de la lógica matemática</h2>
    <br>
    <p>
        Todo razonamiento lógico está compuesto por una serie de elementos que se interrelacionan entre sí, y la correcta interpretación de estos componentes y de sus relaciones corresponde al análisis deductivo. Estos componentes son las preposiciones y conectores lógicos que se describen a continuación:
    </p>
    <br>
    <p>
        <strong>a. Proposiciones</strong>
    </p>
    <br>
    <p>
        Una proposición o enunciado es una oración que puede ser falsa o verdadera, pero no ambas a la vez. La proposición es un elemento fundamental de la lógica matemática.
    </p>
    <br>
    <p>
        Las proposiciones pueden ser simples o compuestas. Las primeras están formadas por una sola proposición, por el contrario, las proposiciones compuestas están conformadas por dos o más proposiciones unidas por un conector.
    </p>
    <br>
    <p>
        A continuación, se muestra una serie de ejemplos de proposiciones válidas y no válidas, con estos se explicará por qué algunos enunciados no son proposiciones.
    </p>
    <br>
    <p>
        Para los enunciados anteriores se determina lo siguiente:
    </p>
    <br>
    <p>
        p y q son proposiciones simples válidas porque pueden tomar un valor verdadero o falso; sin embargo, los enunciados r y s son proposiciones no válidas, porque no pueden tomar un valor de falso o verdadero, uno de ellos es un saludo y el otro es una orden.
    </p>
    <br>
    <p style="text-align: center">
        <strong>p:</strong> la tierra es plana.
        <br>
        <strong>q:</strong> -17 + 38 = 21
        <br>
        <strong>r:</strong> hola ¿cómo estás?
        <br>
        <strong>S:</strong> lava el carro por favor.
    </p>
    <br>
    <p>
        <strong>b. Conectores lógicos y proposiciones compuestas</strong>
    </p>
    <br>
    <p>
        Existen las proposiciones compuestas que son las que se componen de varias proposiciones, las cuales utilizan para su conexión operadores o conectores lógicos que son:
    </p>
    <br>
    <h2 class="h2-content" id="Operador AND (y) conjunción">Operador AND (y) conjunción</h2>
    <br>
    <p>
        Conecta dos proposiciones que se deben unir para que se pueda obtener un resultado verdadero, esta se representa por el siguiente símbolo ∧.
    </p>
    <br>
    <p>
        <strong>Ejemplo:</strong>
    </p>
    <br>
    <ul>
        <li>
            Nuestra bandera es de color amarillo, azul y rojo.
        </li><br>

        <li>
            El número 9 es mayor que 7 y menor que 12.
        </li><br>

        <li>
           El carro enciende cuando tiene corriente eléctrica y gasolina en el tanque.
        </li><br>
    </ul>
    <h2 class="h2-content" id="Operador OR (o) disyunción">Operador OR (o) disyunción</h2>
    <br>
    <p>
        Conecta dos proposiciones y se obtiene una proposición compuesta verdadera cuando por lo menos unas de las proposiciones son verdaderas.
    </p>
    <br>
    <p>
        <strong>Ejemplo:</strong>
    </p>
    <br>
    <ul>
        <li>
            Puedo ir a Bogotá en avión o en bus.
        </li><br>

        <li>
            Puedo entrar al estadio si compro mi boleta o si tengo un pase de cortesía.
        </li><br>

        <li>
            Voy a desayunar con huevos revueltos o huevos pericos.
        </li><br>
    </ul>
    <h2 class="h2-content" id="Operador NOT (no) negación">Operador NOT (no) negación</h2>
    <br>
    <p>
        Su propósito es negar una proposición, es decir, que si tenemos una proposición verdadera al aplicarle este tipo de operador se obtiene la negación, es decir, es falso.
    </p>
    <br>
    <p>
        <strong>Ejemplo:</strong>
    </p>
    <br>
    <ul>
        <li>
            No es cierto que Gabriel García Márquez escribió la Ilíada.
        </li><br>

        <li>
            No es cierto que el América de Cali es de la ciudad de Bogotá.
        </li><br>

        <li>
            Es falso que el agua es un hidrocarburo.
        </li><br>
    </ul>
    <br>
    <h2 class="h2-content" id="2.2. Tablas de verdad">2.2. Tablas de verdad</h2>
    <br>
    <p>
        Una estrategia de la lógica que tiene como objetivo determinar la validez de varias propuestas en alguna situación, es decir, determina las condiciones necesarias en las que un enunciado es verdadero, estas condiciones se representan con una tabla de verdad que determina el valor de verdad de todas las proposiciones que componen la situación. Así como lo explica el principio de bivalencia: <strong>una proposición puede ser verdadera o falsa únicamente, nunca ambas</strong>.
    </p>
    <br>
    <p>
        <strong>"una proposición puede ser verdadera o falsa únicamente, nunca ambas."</strong>
    </p>
    <br>
    <p>
        Algunas consideraciones:
    </p>
    <br>
    <ul>
        <li>
            a. El valor de una proposición verdadera se representa por “V” o un “1”.
        </li><br>

        <li>
            b. El valor de una proposición falsa se representa por “F” o un “0”.
        </li><br>

        <li>
            c. Existe una tabla de verdad para cada uno de los conectores lógicos, lo que se tiene que evaluar para responder si una proposición compuesta es verdadera o falsa es el estatus actual de las proposiciones simples. A continuación, se muestran las tablas de verdad.
        </li><br>
    </ul>
    <br>
    <img src="/images/introduccion-a-la-algoritmia/tabla1.png" alt="Tabla 1: Tabla de verdad conjunción (Y)">
    <br>
    <p style="text-align: center">
        Tabla 1: Tabla de verdad conjunción (Y)
    </p>
    <br>
    <img src="/images/introduccion-a-la-algoritmia/tabla2.png" alt="Tabla 2: Tabla de verdad disyunción (O)">
    <br>
    <p style="text-align: center">
        Tabla 2: Tabla de verdad disyunción (O)
    </p>
    <br>
    <img src="/images/introduccion-a-la-algoritmia/tabla3.png" alt="Tabla 3: Tabla de verdad negación (no)">
    <br>
    <p style="text-align: center">
        Tabla 3: Tabla de verdad negación (no)
    </p>
    <br>
    <p>
        Existe otro tipo de conectores que se llaman proposiciones condicionales, aquellas que están formadas por dos proposiciones simples o compuesta por p y q, la cual se representa y se lee de la siguiente manera:
    </p>
    <br>
    <p>
        p → q se lee “Si p entonces q”
    </p>
    <br>
    <img src="/images/introduccion-a-la-algoritmia/nuve.svg" alt="Tabla 3: Tabla de verdad negación (no)">
    <p style="text-align: center">
        <strong>Ejemplo 1:</strong>
    </p>
    <br>
    <p>
        <strong>Si no llueve se arruina la cosecha.</strong>
    </p>
    <br>
    <p>
        Este tipo de proposición se conoce como la condición “para que”, de manera que para que no se arruine la cosecha se requiere que llueva.
    </p>
    <br>
    <p style="text-align: center">
        p: si no llueve
        <br><br>
        q: se arruina la cosecha
        <br><br>
        Al aplicar el operador p → q su tabla de verdad quedaría de la siguiente manera:
    </p>
    <br>
    <img src="/images/introduccion-a-la-algoritmia/tabla4.png" alt="Tabla 3: Tabla de verdad negación (no)">
    <br>
    <p style="text-align: center">
        Tabla 4: Tabla de verdad condicional (si... entonces)
    </p>
    <br>
    <p>
        De igual manera existe una proposición bicondicional que indica que una proposición es verdadera si y solo si las proposiciones simples o compuestas que forman la proposición son verdaderas o son falsas si y solo si ambas proposiciones son falsas, esta se representa y se lee de la siguiente manera:
    </p>
    <br>
    <p>
        p ↔ q se lee "p si solo si q"
    </p>
    <br>
    <img src="/images/introduccion-a-la-algoritmia/gorro.svg" alt="gorro">
    <p style="text-align: center">
        <strong>Ejemplo 2:</strong>
    </p>
    <br>
    <p>
        <strong>Es buen estudiante.</strong>
    </p>
    <br>
    <p>
        Es buen estudiante, si y solo si tiene promedio de cinco, donde se puede concluir lo siguiente:
    </p>
    <br>
    <p style="text-align: center">
        p: es un buen estudiante
        <br><br>
        q: tiene promedio de 5
        <br><br>
        al aplicar el operador p ↔ q su tabla de verdad quedaría de la siguiente manera:
    </p>
    <br>
    <img src="/images/introduccion-a-la-algoritmia/tabla.png" alt="Tabla">
    <br><br>
    <p>
        Cuando se aplican tablas de verdad se puede llegar a tres tipos de resultado que son:
    </p>
    <br>
    <p>
        <strong>Tautología:</strong> es una expresión lógica que es verdadera para todos los posibles valores de verdad de sus componentes atómicos. Las proposiciones dan el resultado positivo.
    </p>
    <br>
    <p>
    <strong>Contradicción:</strong> son aquellas fórmulas que son falsas para cualquier valoración de los símbolos proposicionales que contiene. Las proposiciones dan el resultado negativo.
    </p>
    <br>
    <p>
        <strong>contingencia:</strong>  son aquellas fórmulas cuyo valor de verdad o falsedad depende de la valoración de los símbolos proposicionales que contiene. Las proposiciones dan un resultado negativo y positivo. (TOMi.digital, 2021).
    </p>
    <br>
    <p>
        A continuación, se muestra cómo aplicando la lógica matemática se comprueba el valor de verdad de un enunciado, este tipo de práctica es muy útil en las computadoras porque permite tener inferencias y deducir acciones o actividades a seguir.
    </p>
    <br>
    <img src="/images/introduccion-a-la-algoritmia/paloma.svg" alt="paloma">
    <p style="text-align: center">
        <strong>Ejemplo 3:</strong>
    </p>
    <br>
    <p>
        <strong>Las palomas vuelan.</strong>
    </p>
    <br>
    <p>
        p: todas las palomas vuelan
        <br><br>
        q: todas las aves tienen plumas
        <br><br>
        r: luego todas las palomas son aves
        <br><br>
        Estas proposiciones se pueden escribir utilizando los operadores lógicos de la siguiente manera:
        <br><br>
        (p ∧ q) → r
    </p>
    <br>
    <p>
        Para el anterior ejercicio se construye la tabla de verdad:
    </p>
    <br>
    <img src="/images/introduccion-a-la-algoritmia/tablaverdad.png" alt="Tabla de verdad">
    <br>
    <h2 class="h2-content" id="2.3. Ejercicios de lógica proposicional">2.3. Ejercicios de lógica proposicional</h2>
    <br>
    <p>
        A continuación, se plantean a manera de ejemplo algunos ejercicios con su respectiva solución que permiten identificar un problema, reconocer los datos de entrada y los procesos a ser aplicados como estrategia a seguir con la utilización de la lógica proposicional en la identificación y solución de problemas.
    </p>
    <br>
    <h2 class="h2-content" id="2.3.1. Ejercicio 1.">2.3.1. Ejercicio 1.</h2>
    <br>
    <p style="text-align: center">
        <strong>Se necesita personal femenino que sepa Microsoft Office o Gsuite.</strong>
    </p>
    <br>
    <p>
        Para dar solución al enunciado anterior se realiza las siguientes actividades.
        <br><br>
        <strong>Pasos a seguir:</strong>
        <br><br>
        Identificar el problema.
        <br><br>
        Descomponer el enunciado en proposiciones atómicas.
        <br><br>
        Evaluar los posibles casos derivados del enunciado anterior.
        <br><br>
        Determinar los casos donde se cumpla la condición y hacer la selección de las personas de acuerdo con el requerimiento.
    </p>
    <br>
    <p>
        <strong>Solución:</strong>
    </p>
    <br>
    <p>
        <strong>1. Identificar el problema:</strong> Se trata de buscar o contratar personal femenino que sepa utilizar Microsoft Office o Google Suite.
    </p>
    <br>
    <p>
        <strong>1. Descomponer el enunciado:</strong>   Descomponer en proposiciones atómicas del enunciado (cuando están separadas del contexto del problema se llaman proposiciones atómicas).
        <br><br>
        p: es personal femenino.
        <br><br>
        q: sabe utilizar el Microsoft Office.
        <br><br>
        r: sabe utilizar la suite de Google.
    </p>
    <br>
    <p>
       <strong>3. Determinar los casos:</strong> Determinar las relaciones lógicas de acuerdo con lo planteado en el enunciado, utilizando las proposiciones atómicas definidas en el punto anterior.
        <br><br>
    p ∧ (q V r).
    </p>
    <br>
    <p>
        <strong>4. Evaluar los posibles casos derivados del enunciado anterior.</strong>
    </p>
    <br>
    <h2 class="h2-content" id="2.3.2. Ejercicio 2.">2.3.2. Ejercicio 2.</h2>
    <br>
    <p style="text-align: center">
        <strong>Juan sabe utilizar Microsoft Office y Gsuite, Martha sabe utilizar Gsuite, Natalia sabe utilizar Gsuite y Microsoft Office.</strong>
    </p>
    <br>
    <p>
        Crear la tabla de verdad y aplicar la lógica proposicional para elegir las personas que cumplan con los requisitos exigidos.
    </p>
    <br>
    <p>
        Para la construcción de la tabla de verdad se evalúa cada una de las preposiciones atómicas y, se van validando para verificar si se cumple lo que la haría verdadera o si no se cumple, lo cual haría que la proposición sea falsa.
    </p>
    <br>
    <p>
        Se analiza cada posible caso por lo que se evalúa a Juan, para la primera proposición sería un valor falso, ya que p requiere que sea personal femenino, el cual se pondrá en la columna 2, luego se evalúa si Juan sabe utilizar Microsoft Office o la Suite de Google, el valor va en la columna tres y por último, se evalúa la conjunción para determinar la solución.
    </p>
    <br>
    <img src="/images/introduccion-a-la-algoritmia/tabla-5.png" alt="Tabla de verdad">
    <br>
    <p>
        De acuerdo con la anterior tabla, se concluye que Martha y Natalia son aptas para el trabajo, lo que permite seleccionarlas.
    </p>
    <br>
    <h2 class="h2-content" id="2.3.3. Ejemplo 3.">2.3.3. Ejemplo 3.</h2>
    <br>
    <p style="text-align: center">
        <strong>Sandra dice adelgazo o no hago dieta.</strong>
    </p>
    <br>
    <p>
        Para este enunciado además se propone una serie de alternativas que podrían ser válidas o no, dependiendo de la solución propuesta utilizando la lógica matemática. Las siguientes son las posibles respuestas de las cuales se deberá elegir la que se considera es real al problema planteado.
    </p>
    <br>
    <ul>
        <li>
            1. Si adelgazo, hago dieta.
        </li><br>

        <li>
            2. Si no adelgazo, hago dieta.
        </li><br>

        <li>
            3. Si hago dieta, no adelgazo.
        </li><br>

        <li>
            4. Si hago dieta adelgazo.
        </li><br>

        <li>
            5. Hago dieta o no adelgazo.
        </li><br>
    </ul>
    <p>
        <strong>Solución:</strong>
    </p>
    <br>
    <p>
       <strong>1. Problema:</strong> Identificar la respuesta correcta al problema presentado por Sandra
    </p>
    <br>
    <p>
        <strong>2. Definir</strong> Definir las proposiciones atómicas
        <br><br>
        p: adelgazo.
        <br><br>
        q: hago dieta.
    </p>
    <br>
    <p>
        <strong>3. Determinar:</strong> Determinar la relación lógica.
        <br><br>
        p V ¬ q.
    </p>
    <br>
    <p>
        <strong>Crear:</strong> Crear la tabla de verdad.
    </p>
    <br>
    <img src="/images/introduccion-a-la-algoritmia/tabla-6.png" alt="Tabla de verdad">
@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#2. Lógica matemática">2. Lógica matemática</a><br><br>
    <a href="#2.1. Componentes de la lógica matemática">2.1. Componentes de la lógica matemática</a><br><br>
    <a href="#Operador AND (y) conjunción">Operador AND (y) conjunción</a><br><br>
    <a href="#Operador OR (o) disyunción">Operador OR (o) disyunción</a><br><br>
    <a href="#Operador NOT (no) negación">Operador NOT (no) negación</a><br><br>
    <a href="#2.2. Tablas de verdad">2.2. Tablas de verdad</a><br><br>
    <a href="#2.3. Ejercicios de lógica proposicional">2.3. Ejercicios de lógica proposicional</a><br><br>
    <a href="#2.3.1. Ejercicio 1.">2.3.1. Ejercicio 1.</a><br><br>
    <a href="#2.3.2. Ejercicio 2.">2.3.2. Ejercicio 2.</a><br><br>
    <a href="#2.3.3. Ejemplo 3.">2.3.3. Ejemplo 3.</a><br><br>
@endsection
