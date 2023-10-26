<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/css/software.css">
    <title>@yield('title')</title>
</head>

<body class="grid-container">

    <header class="header">
        @include('partials.nav')
    </header>

    <article class="main">
        @yield('content')
    </article>

    <footer class="footer">
        @include('partials.footer')
    </footer>

</body>
</html>
