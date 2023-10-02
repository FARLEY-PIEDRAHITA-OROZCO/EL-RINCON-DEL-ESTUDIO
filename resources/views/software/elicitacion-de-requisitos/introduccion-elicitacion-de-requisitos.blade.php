@extends('../../layouts.sistemas')
@section('../../title', 'Elicitación de requisitos')

@section('navbar')
    @include('partials.navbar-elicitacion-de-requisitos')
@endsection

@section('content')
    <h1 class="h1-content" id="Introducción">Introducción</h1>
    <br>
    <p>
        A través de este material, se tratan con detalle los pasos que se deben seguir en el proceso de recolección de datos, el uso de técnicas y los instrumentos para tal fin.
    </p>
    <br>
    <p>
        La recolección de datos se refiere al uso de una gran diversidad de técnicas y herramientas que pueden ser utilizadas por el analista para desarrollar los sistemas de información, las cuales pueden ser la entrevista, la encuesta, el cuestionario, la observación, las sesiones grupales, la recolección documental, entre otras.
    </p>
    <br>
    <p>
        En ese sentido, los analistas utilizan una variedad de métodos para recopilar los datos sobre una situación existente, como entrevistas, cuestionarios, inspección de registros (revisión en el sitio) y observación. Cada uno tiene ventajas y desventajas; es por ello que, por lo general, se utilizan dos o tres simultáneamente, para complementar el trabajo asegurar una investigación completa.
    </p>
@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#Introducción">Introducción</a>
@endsection
