
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/posts.css">
    <title>@yield('title')</title>
</head>

<body>

    <header class="header">
        @include('partials.nav')
    </header>

    <main>
        @yield('content')
    </main>

    <aside>
        @yield('aside')
    </aside>

    <aside>

        <h2>En este modulo</h2>
        <ul>
            <li><a href="/post1">Título del Post 1</a></li>
            <li><a href="/post2">Título del Post 2</a></li>
            <li><a href="/post2">Título del Post 2</a></li>
            <li><a href="/post2">Título del Post 2</a></li>
            <li><a href="/post2">Título del Post 2</a></li>
            <li><a href="/post2">Título del Post 2</a></li>
            <li><a href="/post2">Título del Post 2</a></li>
        </ul>

    </aside>


    <footer class="footer">
        @include('partials.footer')
    </footer>

    <button id="goTopButton" onclick="goTop()">Ir Arriba</button>
    <script src="/js/main.js"></script>

</body>
</html>
