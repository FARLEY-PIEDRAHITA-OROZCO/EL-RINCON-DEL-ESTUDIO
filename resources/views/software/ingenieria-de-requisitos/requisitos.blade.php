@extends('../../layouts.sistemas')
@section('../../title', 'Ingeniería de requisitos')

@section('navbar')
    @include('partials.navbar-ingenieria-de-requisitos')
@endsection

@section('content')
    <h1 class="h1-content" id="3. Requisitos">3. Requisitos</h1>
    <br>
    <p>
        <strong>"Un requisito es una condición o capacidad que necesita el usuario para resolver un problema o conseguir un objetivo determinado (IEEE, 1990)."</strong>
    </p>
    <br>
    <p>
        Los requisitos comunican las expectativas de los consumidores de productos software; de otra parte, los requisitos pueden ser obvios o estar ocultos, conocidos o desconocidos, esperados o inesperados, desde el punto de vista del cliente.
    </p>
    <br>
    <h2 class="h2-content" id="3.1 Importancia de los requisitos">3.1 Importancia de los requisitos</h2>
    <br>
    <p>
        Los requisitos cobran importancia dentro del ciclo de vida del software, puesto que:
    </p>
    <br>
    <p>
        <strong>1.</strong> Establecen el alcance del trabajo subsecuente, pueden definir estrategias de desarrollo, riesgos, tomar decisiones de negocio (viabilidad de negocio), de proyecto (tiempo, recursos), de sistema (arquitectura).
    </p>
    <br>
    <p>
        <strong>2.</strong> Indican al equipo del proyecto qué requieren los usuarios (necesidades de negocio).
    </p>
    <br>
    <p>
        <strong>3.</strong> El éxito o fracaso de un proyecto está altamente influenciado por la calidad de los requisitos y el proceso para gestionarlos durante el desarrollo de un producto.
    </p>
    <br>
    <p>
        En la siguiente lista se pueden revisar las características que los requisitos deben cumplir de acuerdo con Pfleeger (2002).
    </p>
    <br>
    <p>
        <strong>Necesario: </strong> Si se tiene alguna duda acerca de la necesidad del requerimiento, se puede preguntar “¿Qué sería lo peor de no incluirlo?”. Si no se encuentra una respuesta o cualquier consecuencia, entonces es probable que no sea un requerimiento necesario.
    </p>
    <br>
    <p>
        <strong>Completo:</strong> Un requerimiento está completo si no necesita ampliar detalles en su redacción, es decir, si se proporciona la información suficiente para su comprensión.
    </p>
    <br>
    <p>
        <strong>Factible:</strong> El requerimiento deberá de ser totalmente factible y dentro de presupuesto, calendario y otras restricciones, si se tiene alguna duda de su factibilidad, hay que investigar, generar pruebas de concepto para saber su complejidad y factibilidad, si aun así el requerimiento es no factible, hay que revisar la visión del sistema y replantear el requerimiento.
    </p>
    <br>
    <p>
        <strong>Modificable:</strong> Los cambios en los requisitos deben hacerse de manera sistemática, y debe tenerse en cuenta su impacto en otros requisitos.
    </p>
    <br>
    <p>
        <strong>Priorizado:</strong> Categorizar el requerimiento nos ayuda a saber el grado de necesidad del mismo: esencial/crítico, deseado, opcional verificable.
    </p>
    <br>
    <p>
        <strong>Verificable</strong> Si un requerimiento no se puede comprobar, entonces, ¿cómo se sabe si se cumplió con él o no? Debe ser posible verificarlo ya sea por inspección, análisis de prueba o demostración. Cuando se escriba un requerimiento, se deberán determinar los criterios de aceptación.
    </p>
    <br>
    <p>
        <strong>Rastreable:</strong> La especificación se debe organizar de tal forma que cada función del sistema se pueda rastrear hasta su conjunto de requerimientos correspondiente. Facilita las pruebas y la validación del diseño.
    </p>
    <br>
    <p>
        <strong>Claro:</strong> Un requerimiento es conciso si es fácil de leer y entender, su redacción debe ser simple y clara para quienes lo consulten en un futuro.
    </p>
    <br>
    <h2 class="h2-content" id="3.2 Clasificación">3.2 Clasificación</h2>
    <br>
    <p>
        Los requerimientos se pueden definir de distintas maneras, la primera clasificación se encuentra relacionada con el nivel de descripción con la que cuentan estos y dentro de este tipo de clasificación se encuentran:
    </p>
    <br>
    <h2 class="h2-content" id="Requerimientos de usuario">Requerimientos de usuario</h2>
    <br>
    <p>
        Son declaraciones, en lenguaje natural y en diagramas, de los servicios que se espera que el sistema proporcione y de las restricciones bajo las cuales debe funcionar.
    </p>
    <br>
    <h2 class="h2-content" id="Requerimientos de sistema">Requerimientos de sistema</h2>
    <br>
    <p>
        Estos requerimientos establecen con detalle las funciones, servicios y restricciones operativas del sistema. El documento de requerimientos del sistema deberá ser preciso, y definir exactamente lo que se va a desarrollar.
    </p>
    <br>
    <p>
        En la siguiente clasificación se observa la que se da a los requerimientos del sistema, la cual se encuentra dividida con base en lo que se va a describir, las clasificaciones son:
    </p>
    <br>
    <h2 class="h2-content" id="Requerimientos funcionales">Requerimientos funcionales</h2>
    <br>
    <p>
        Son declaraciones de los servicios que debe proporcionar el sistema, de la manera en que este debe reaccionar a entradas particulares; o también pueden declarar explícitamente lo que el sistema no debe hacer.
    </p>
    <br>
    <h2 class="h2-content" id="Requerimientos no funcionales">Requerimientos no funcionales</h2>
    <br>
    <p>
        Son restricciones de los servicios o funciones ofrecidos por el sistema. Incluyen restricciones de tiempo, sobre el proceso de desarrollo y estándares. Dentro de estos requerimientos se encuentra todo lo referente a la fiabilidad, el tiempo de respuesta y la capacidad de almacenamiento.
    </p>
    <br>
    <p>
        En la siguiente tabla se presentan algunos ejemplos sobre requisitos funcionales y no funcionales.
    </p>
    <br>
    <img class="img-2" src="/images/ingenieria-de-requisitos/tabla 2.png" alt="Requisitos.">
@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#3. Requisitos">3. Requisitos</a><br><br>
    <a href="3.1 Importancia de los requisitos">3.1 Importancia de los requisitos</a><br><br>
    <a href="3.2 Clasificación">3.2 Clasificación</a><br><br>
    <a href="Requerimientos de usuario">Requerimientos de usuario</a><br><br>
    <a href="Requerimientos de sistema">Requerimientos de sistema</a><br><br>
    <a href="Requerimientos funcionales">Requerimientos funcionales</a><br><br>
@endsection
