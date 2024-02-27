<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <form action="{{ route('toDoLists.store') }}" method="post">
        @csrf
        <div class="form">
            <h1>To Do List</h1>
            <div class="teste"></div>
            <div class="formContainer">
                <input type="text" placeholder="Digite um texto" id="title" name="title">
                <button  type="submit">
                    +
                </button>
            </div>

        </div>
    </form>

    <div class="container">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($toDoLists as $toDoList)
                    <tr>
                        <td>{{ $toDoList->title }} </td>
                        <td>
                            <form action="{{ route('toDoLists.destroy', $toDoList->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                        </form>   
                        </td>
                    </tr>   
                @endforeach
            </tbody>
        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>