<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('toDoLists.store') }}" method="post">
        @csrf
        <input type="text" name="title">
        <button type="submit">Confirmar</button>
    </form>

    
</body>
</html>