<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuario</title>
</head>
<body>
    <h1>Criar Usuario</h1>
    <div>
        info.
    </div>
    <br>
    <br>
    <br>
    <div>
        <label>Nome:</label>
        <form action="{{route('usuarios.store')}}">
            @csrf
            @method('post')
            <input type="text" name="nome" placeholder="Nome" />
            <input type="text" name="cpf" placeholder="CPF" />
            <input type="number" name="dt_inclusao" placeholder="dt inclusao" />
            <input type="number" name="dt_alteracao" placeholder="dt altercao" />
            <div>
            <input type="submit" value="Criar Usuario" />
            </div>

        </form>
    </div>
</body>
</html>
