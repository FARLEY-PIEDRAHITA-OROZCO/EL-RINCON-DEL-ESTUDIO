@extends('../../layouts.sistemas')
@section('../../title', 'Caracterización de procesos')

@section('navbar')
    @include('partials.navbar-caracterizacion-de-procesos')
@endsection

@section('content')
    <h1 class="h1-content" id="Introducción">Introducción</h1>
    <br>
    <p>A continuación, se presentará el video que hará una breve introducción del presente componente formativo:</p>
    <br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/h5U98IQxP4E?si=0r4pakLjfHCkJf5G" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
@endsection

@section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#Introducción">Introducción</a>
@endsection
