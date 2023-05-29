<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>
<body>
    <main class="container my-5">
        <p>Recibiste un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
        <p><strong>Mensaje: </strong> {{ $msg['message'] }}</p>
    </main>
</body>
</html>