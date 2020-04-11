<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email recibido</title>
</head>
<body>
    <h1>Contenido del Email</h1>

    <p>Recibiste un e-mail de {{$mensaje['name']}} con el correo {{$mensaje['email']}} </p>
    <p>Asunto: {{$mensaje['subject']}} </p>
    <p>Contenido: {{$mensaje['content']}} </p>
</body>
</html>