@extends('../../layouts.sistemas')
@section('../../title', 'Análisis y solución de problemas aplicando algoritmos')

@section('navbar')
    @include('partials.navbar-solucion-de-problemas-con-algoritmos')
@endsection

@section('content')
    <h1 class="h1-content" id="2. Diagramas de flujo">2. Diagramas de flujo</h1>
    <br>
    <p>
        Una forma común de presentar los algoritmos es con diagramas de flujo, que consiste en una representación por medio de un gráfico. Mientras en pseudocódigo las sentencias se representaban con preposiciones en diagramas de flujo la preposición es reemplazada por una figura.
    </p>
    <br>
    <p>
        La representación del algoritmo de la figura 4 sería:
    </p>
    <br>
    <img class="img-2" src="/images/solucion-de-problemas-aplicando-algoritmos/figura 5.png" alt="Anánlisis">
    <p style="text-align: center">
        Figura 5. Diagrama de flujo imprimir un entero
    </p>
    <br>
    <p>
        Es ideal revisar la siguiente infografía sobre las ventajas de la representación gráfica de un algoritmo a través del diagrama de flujo:
    </p>
    <br>
    <p>
        <strong>Ventajas de los diagramas de flujo</strong>
    </p>
    <br>
    <p>
        <a href="https://sena.territorio.la/content/index.php/institucion/Titulada/institution/SENA/Tecnologia/228118/Contenido/OVA/CF13//downloads/Infografia_ventajas_diagrama_de_flujo.pdf">Descargar</a>
    </p>
    <br>
    <p>
        La representación del algoritmo de la figura 3 algoritmo que calcule el cuadrado y el cubo de un número introducido por teclado y mostrar los resultados el cubo y el cuadrado es:
    </p>
    <br>
    <img class="img-1" src="/images/solucion-de-problemas-aplicando-algoritmos/figura 6.svg" alt="Figura 6. Diagrama de flujo imprimir el cuadrado y el cubo de un entero">
    <p style="text-align: center">
        Figura 6. Diagrama de flujo imprimir el cuadrado y el cubo de un entero
    </p>
    <br>
    <p>
        La Organización Internacional para la Estandarización (ISO, por su sigla en inglés) y el Instituto Nacional Americano de Estandarización (ANSI, por su sigla en inglés), estandarizaron los símbolos que han sido mayor mente aceptados en 1985. Con el fin de evitar la utilización de símbolos diferentes para representar procesos iguales (López, 2009).
    </p>
    <br>
    <p>
        Los siguientes son los principales símbolos para crear diagramas de flujo:
    </p>
    <br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/inicio.svg" alt="Inicio/Final">
    <p style="text-align: center">
        <strong>Inicio/Final</strong>
    </p>
    <br>
    <p style="text-align: center">
        Se utiliza para indicar el inicio y el final de un diagrama; del Inicio solo puede salir una línea de flujo y al Final solo debe llegar una línea (López, 2009).
    </p>
    <br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/decision.svg" alt="Decisión">
    <p style="text-align: center">
        <strong>Decisión</strong>
    </p>
    <br>
    <p style="text-align: center">
        Indica la comparación de dos datos y dependiendo del resultado lógico (falso o verdadero) se toma la decisión de seguir un camino del diagrama u otro (López, 2009).
    </p>
    <br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/entrada.svg" alt="Entrada General">
    <p style="text-align: center">
        <strong>Entrada General</strong>
    </p>
    <br>
    <p style="text-align: center">
        Entrada/Salida de datos en General (en esta guía, solo se usará para la Entrada) (López, 2009).
    </p>
    <br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/iteracion.svg" alt="Iteración">
    <p style="text-align: center">
        <strong>Iteración</strong>
    </p>
    <br>
    <p style="text-align: center">
        Indica que una instrucción o grupo de instrucciones deben ejecutarse varias veces (López, 2009).
    </p>
    <br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/entrada-por-teclado.svg" alt="Entrada por teclado">
    <p style="text-align: center">
        <strong>Entrada por teclado</strong>
    </p>
    <br>
    <p style="text-align: center">
        Instrucción de entrada de datos por teclado. Indica que el computador debe esperar a que el usuario teclee un dato que se guardará en una variable o constante (López, 2009).
    </p>
    <br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/salida.svg" alt="Salida Impresa">
    <p style="text-align: center">
        <strong>Salida Impresa</strong>
    </p>
    <br>
    <p style="text-align: center">
        Indica la presentación de uno o varios resultados en forma impresa (López, 2009).
    </p>
    <br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/llamada.svg" alt="Llamada a subrutina">
    <p style="text-align: center">
        <strong>Llamada a subrutina</strong>
    </p>
    <br>
    <p style="text-align: center">
        Indica la llamada a una subrutina o procedimiento determinado (López, 2009).
    </p>
    <br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/salida-en-pantalla.svg" alt="Salida en Pantalla">
    <p style="text-align: center">
        <strong>Salida en Pantalla</strong>
    </p>
    <br>
    <p style="text-align: center">
        Instrucción de presentación de mensajes o resultados en pantalla (López, 2009).
    </p>
    <br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/accion.svg" alt="Acción/Proceso General">
    <p style="text-align: center">
        <strong>Acción/Proceso General</strong>
    </p>
    <br>
    <p style="text-align: center">
        Indica una acción o instrucción general que debe realizar el computador (cambios de valores de variables, asignaciones, operaciones aritméticas, etc.) (López, 2009).
    </p>
    <br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/conector.svg" alt="Conector">
    <p style="text-align: center">
        <strong>Conector</strong>
    </p>
    <br>
    <p style="text-align: center">
        Indica el enlace de dos partes de un diagrama dentro de la misma página (López, 2009).
    <br><br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/flujo.svg" alt="Flujo">
    <p style="text-align: center">
        <strong>Flujo</strong>
    </p>
    <br>
    <p style="text-align: center">
        Indica el seguimiento lógico del diagrama. También indica el sentido de ejecución de las operaciones (López, 2009).
    <br><br>
    <img class="img-4" src="/images/solucion-de-problemas-aplicando-algoritmos/conector-1.svg" alt="Conector">
    <p style="text-align: center">
        <strong>Conector</strong>
    </p>
    <br>
    <p style="text-align: center">
        Indica el enlace de dos partes de un diagrama en páginas diferentes (López, 2009)
    </p>
    <br>
    <h2 class="h2-content" id="2.1 Elaborar diagramas de flujo">2.1 Elaborar diagramas de flujo</h2>
    <br>
    <p>
        Cuando el algoritmo se desea representar como diagrama de flujo, se deben tener en cuenta algunos principios para su elaboración (Rojas y Ñacato, 1980):
    </p>
    <br>
    <p>
        <strong>Diagramas de flujo</strong>
    </p>
    <br>
    <p>
        Infografía. Elaborar diagramas de flujo
    </p>
    <br>
    <p>
        <a href="https://sena.territorio.la/content/index.php/institucion/Titulada/institution/SENA/Tecnologia/228118/Contenido/OVA/CF13//downloads/Infografia_diagrama_de_flujo.pdf">Descargar</a>
    </p>
    <br>
    <h2 class="h2-content" id="2.2. Herramientas digitales para creación y prueba de algoritmos">2.2. Herramientas digitales para creación y prueba de algoritmos</h2>
    <br>
    <p>
        Para aprender a reconocer los elementos que componen los diagramas de flujo se puede hacer uso de la herramienta denominada Draw.io a través del enlace <a href="https://app.diagrams.net/">https://app.diagrams.net/</a> con la que puede usar una cuenta de correo de Google, o misena.edu.co para acceder y crear un nuevo diagrama.
    </p>
    <br>
    <p>
        Es ideal ingresar y seleccionar los diagramas que se muestran en la siguiente figura.
    </p>
    <br>
    <img class="img-2" src="/images/solucion-de-problemas-aplicando-algoritmos/figura 7.png" alt="Conector">
    <p style="text-align: center">
        Figura 7 Seleccionar formas. Nota. Tomada de <a href="https://app.diagrams.net/">https://app.diagrams.net/</a>
    </p>
    <br>
    <p>
        En caso de contar con intermitencia de internet se puede realizar el ejercicio propuesto a través del programa de libre distribución disponible en <a href="http://dia-installer.de/">http://dia-installer.de/</a> o puede acceder a la versión de escritorio de Draw.io disponible en <a href="https://app.diagrams.net/">https://app.diagrams.net/</a>
    </p>
    <br>
    <p>
        <strong>Enlace web:</strong> Instituto de informatica Uach. (08 de septiembre de 2020). Cómo descargar draw io 2 para dibujar diagramas de flujo <a href="https://www.youtube.com/watch?v=encz3h8TLWA">video.</a>
    </p>
    <br>
    <p>
        El programa de mayor uso para el diseño y depuración de algoritmos en pseudocódigo es PSeInt disponible en <a href="http://pseint.sourceforge.net/.">http://pseint.sourceforge.net/.</a>
    </p>
@endsection

@section('sidebar')
<h1 class="h1-sidebar">En este articulo</h1>
<a href="#2. Diagramas de flujo">2. Diagramas de flujo</a>
@endsection
