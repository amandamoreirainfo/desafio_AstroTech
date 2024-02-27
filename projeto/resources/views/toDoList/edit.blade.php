
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ToDo List - Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    </head>

    <body>

        <form action="{{ route('toDoLists.update', $toDoList->id) }}" method="POST">
            @csrf
            @method('PUT') 
            <div class="form">
                <h1>Editar Tarefa</h1>
                <input type="text" class="form-control" aria-label="Digite um texto" id="title" name="title" value="{{ $toDoList->title }}">
                <br/>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>

    </body>
</html>   