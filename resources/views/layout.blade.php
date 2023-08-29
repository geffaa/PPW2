<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Header Website</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <h1>Footer Website</h1>
    </footer>
    
    <script src="/js/script.js"></script>
</body>
</html>
