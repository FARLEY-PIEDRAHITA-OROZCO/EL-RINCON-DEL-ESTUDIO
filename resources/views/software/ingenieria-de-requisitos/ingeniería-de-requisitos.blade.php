@extends('../../layouts.sistemas')
@section('../../title', 'Ingeniería de requisitos')

@section('navbar')
    @include('partials.navbar-ingenieria-de-requisitos')
@endsection

@section('content')
    <h1 class="h1-content" id="Ingeniería de requisitos">4. Ingeniería de requisitos</h1>
    <br>
    <p>
        Las siguientes son definiciones de ingeniería de requisitos de algunos autores.
    </p>
    <br>
    <p>
        <strong>"La ingeniería de requisitos es la disciplina para desarrollar una especificación completa, consistente y no ambigua, la cual servirá como base para acuerdos comunes entre todas las partes involucradas y en dónde se describen las funciones que realizará el sistema."</strong><br><br>
        - (Boehm, 1979).
    </p>
    <br>
    <p>
        <strong>"La ingeniería de requisitos es el proceso de estudiar las necesidades del usuario para llegar a una definición de requisitos de sistema, hardware o software."</strong><br><br>
        - (IEEE, 1990).
    </p>
    <br>
    <p>
        <strong>"La ingeniería de requisitos puede considerarse como un proceso de descubrimiento y comunicación de las necesidades de clientes y usuarios y la gestión de los cambios de dichas necesidades."</strong><br><br>
        - (Amador, 2000).
    </p>
    <br>
    <p>
        El término IR <strong>“ingeniería de requisitos”</strong> ha surgido para englobar los procesos de desarrollo y gestión de requisitos en el ciclo de vida del software, el primer término (ingeniería) se enfoca en las actividades de obtención, análisis, especificación y validación de los requisitos que permitirá alcanzar los objetivos del negocio y el segundo (requisitos) está centrado en la administración de los mismos y tiene como propósito central la gestión de los cambios y la trazabilidad, de esta forma la IR proporciona el mecanismo apropiado para:
    </p>
    <br>
    <ul>
        <li>Entender lo que el cliente quiere.</li><br>
        <li>Analizar las necesidades.</li><br>
        <li>Evaluar la factibilidad.</li><br>
        <li>Negociar una solución razonable.</li><br>
        <li>Especificar la solución sin ambigüedades.</li><br>
        <li>Validar la especificación.</li><br>
        <li>Administrar los requisitos conforme éstos se transforman en un sistema operacional.</li>
    </ul>
    <br>
    <h2 class="h2-content" id="Etapas de la ingeniería de requisitos">Etapas de la ingeniería de requisitos</h2>
    <br>
    <p>
        Hay cuatro (4) etapas en un proceso usual de ingeniería de requisitos y que son utilizadas para el desarrollo de un producto único, a saber: elicitación, análisis, especificación y validación de los requisitos.
    </p>
    <br>
    <h2 class="h2-content" id="Elicitación">Elicitación</h2>
    <br>
    <p>
        Actividad involucrada en el descubrimiento de los requisitos del sistema. Aquí los analistas deben trabajar junto con el cliente para descubrir el problema que el sistema debe resolver, los diferentes servicios que el sistema debe prestar y las restricciones que se pueden presentar.
    </p>
    <br>
    <p>
        Los principales objetivos que se deben alcanzar son los siguientes:
    </p>
    <br>
    <ul>
        <li>
            Conocer el dominio del problema, de forma tal que los analistas puedan entenderse con los clientes y usuarios y sean capaces de transmitir dicho conocimiento al resto del equipo.
        </li><br>
        <li>
            Descubrir necesidades reales entre clientes y usuarios, haciendo énfasis en aquellas que la mayor parte de las veces se asumen y toman por implícitas
        </li><br>
        <li>
            Consensuar los requisitos entre los propios clientes y usuarios hasta obtener una visión común de los mismos.
        </li><br>
    </ul>
    <h2 class="h2-content" id="Análisis">Análisis</h2>
    <br>
    <p>
        Sobre la base de la obtención realizada previamente, comienza esta fase la cual tiene como propósito descubrir problemas con los requisitos del sistema identificados hasta el momento, para ello se basa en los siguientes objetivos:
    </p>
    <br>
    <ul>
        <li>
            Detectar conflicto en los requisitos que suelen provenir de distintas fuentes y presentar contradicciones o ambigüedades debido a su naturaleza informal.
        </li><br>
        <li>
            Profundizar en el conocimiento del dominio del problema puede facilitar el proceso de construir un producto útil para clientes y usuarios (Durán, 2000).
        </li><br>
    </ul>
    <br>
    <p>
        En esta fase, el analista proporciona un sistema de retroalimentación que refina el entendimiento conseguido en la etapa de obtención.
    </p>
    <br>
    <h2 class="h2-content" id="Especificación">Especificación</h2>
    <br>
    <p>
        Aquí se documentan los requisitos acordados con el cliente, en un nivel apropiado de detalle. En la práctica, esta etapa se realiza conjuntamente con el análisis, por lo que se puede decir que la especificación es el “pasar en limpio” el análisis realizado previamente aplicando técnicas y/o estándares de documentación, como la notación UML (Lenguaje de Modelado Unificado), que es un estándar para el modelado orientado a objetos, por lo que los casos de uso y la obtención de requisitos basada en los casos de uso se utilizan cada vez más para la obtención de requisitos.
    </p>
    <br>
    <h2 class="h2-content" id="Validación">Validación</h2>
    <br>
    <p>
        Por último, la validación garantiza que los requisitos, una vez analizados y resueltos los posibles conflictos, correspondan realmente a las necesidades de clientes y usuarios, para evitar que, a pesar de que el producto final sea técnicamente correcto, no sea satisfactorio. La validación puede llevar al analista a reescribir algunas especificaciones de requisitos y, en otros casos, a obtener nuevos, producto de la aparición de necesidades que hasta entonces estaban ocultas, para volver a evaluar el análisis inicial, o para corregir y perfeccionar el conjunto de requisitos documentados.
    </p>
@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#Ingeniería de requisitos">4. Ingeniería de requisitos</a><br><br>
    <a href="#Etapas de la ingeniería de requisitos">Etapas de la ingeniería de requisitos</a><br><br>
    <a href="#Elicitación">Elicitación</a><br><br>
    <a href="#Análisis">Análisis</a><br><br>
    <a href="#Especificación">Especificación</a><br><br>
    <a href="#Validación">Validación</a><br><br>
@endsection
