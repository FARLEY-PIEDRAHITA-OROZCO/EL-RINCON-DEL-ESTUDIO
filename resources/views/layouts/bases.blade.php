<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/grid-template.css">
    <link rel="stylesheet" href="/css/dark-mode-software.css">
    <link rel="stylesheet" href="/css/software.css">
    <title>@yield('title')</title>
</head>

<body class="grid-container">

    <header class="header">
        @include('partials.nav')
    </header>

    <nav class="navbar"></nav>

    <aside class="sidebar"></aside>

    <article class="main">
        @yield('content')
    </article>

    <footer class="footer">
        @include('partials.footer')
    </footer>

    <script src="/js/main.js"></script>
    <script src="/js/active-menu.js"></script>
</body>
</html>
