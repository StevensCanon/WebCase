<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recebido</title>
</head>
<body>
    <h1>Mensaje recibido</h1>
    <p>Recibiste un correo de: {{$msg['name']}}</p>
    <p>correo electronico: {{$msg['email']}}</p>
    <p><strong>Asunto: {{$msg['subject']}}</strong></p>
    <p>Contenido: {{$msg['content']}}</p>

    {{ var_dump($msg)}}
</body>
</html>