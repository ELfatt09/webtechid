<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - WebTech Indonesia</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    <header class="header">
        <img src="{{ asset('images/logo.png') }}" alt="WebTech Indonesia Logo">
        <nav class="nav">
            <a href="/">Home</a>
            <a href="/blog">Blog</a>
            <a href="/portfolio">Portfolio</a>
            <a href="/admin">Admin</a>
        </nav>
    </header>

    <main class="content">
        @yield('content')
    </main>

    <footer class="footer">
        <p>Designed by: Your Name</p>
    </footer>
</body>
</html>
