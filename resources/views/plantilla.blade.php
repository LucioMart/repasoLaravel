<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('titulo') </title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">about</a></li>
            <li><a href="/portafolio">portafolio</a></li>
            <li><a href="/contact">contact</a></li>
        </ul>
    </nav>
    <h1> @yield('tituloCuerpo') </h1>
    @yield('contenido')
</body>
</html>