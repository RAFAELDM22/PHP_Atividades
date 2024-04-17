<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Matéria </title>
</head>
<body>
    <h1> Matéria </h1>
    @foreach ($teachers as $teacher)
        <p> Disciplina: {{ $teacher->name }} </p>
    @endforeach
</body>
</html>