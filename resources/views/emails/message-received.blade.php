<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Correo Recibido</h1>
    <p>Correo recibido de {{ $mensaje['name'] }} - {{ $mensaje['email'] }}</p>
    <p>Asunto: {{ $mensaje['subject'] }}</p>
    <p>Mensaje: {{ $mensaje['content'] }}</p>

</body>
</html>