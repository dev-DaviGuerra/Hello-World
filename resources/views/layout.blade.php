<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <a href="{{ Route('homepage') }}">Home</a> | <a href="{{ Route('services') }}">Serviços</a> | <a href="{{ Route('contact') }}">Entre em contato</a>
    </header>
    <hr />
    <main>
        @yield('content')
    </main>
    <hr />
    <footer>Rodapé</footer>
    <hr />
</body>
</html>