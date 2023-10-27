
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


    <aside class="aside-1">
        @yield('aside')
    </aside>
    
    <aside class="aside-2">
        @yield('aside-2')
    </aside>



    <footer class="footer">
        @include('partials.footer')
    </footer>

    <button id="goTopButton" onclick="goTop()">Ir Arriba</button>
    <script src="/js/main.js"></script>

</body>
</html>
