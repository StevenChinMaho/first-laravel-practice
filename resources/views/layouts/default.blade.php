<!DOCTYPE html>
<html>
<head lang="zh-TW">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>咕嚕靈波 Laravel</title>
    @vite('resources/css/default.css')
</head>

<body>
    <header>
        @yield('header')
        @include('sidemenu')
    </header>

    <main>
        @yield('maincontent')
    </main>

    <footer>
        @yield('footer')
    </footer>
</body>
</html>