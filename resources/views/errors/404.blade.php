<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página no encontrada</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #05030e;
            color: #ffffff;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 100px;
            margin: 0;
        }
        h2 {
            font-size: 24px;
            margin: 10px 0;
        }
        p {
            font-size: 16px;
            margin: 20px 0;
        }
        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .icon {
            font-size: 80px;
            color: #ff6347;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">
            <i class="fas fa-exclamation-circle"></i>
        </div>
        <h1>404</h1>
        <h2>Página no encontrada</h2>
        <p>Lo sentimos, no encontramos lo que buscas.</p>
        <p><a href="{{ url('Home') }}">Volver a la página principal</a></p>
    </div>
</body>
</html>
