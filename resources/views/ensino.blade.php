<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados Escolares</h1>
    @foreach ($teachs as $teach)
    <p> Olá, professor {{ $teach->name}}</p>
    @endforeach
</body>
</html>