<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alterar</title>
</head>
<body>
    <h1>Alterar.</h1>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif
    </ul>
    <form method="post" action="{{route('usuarios.update_user', ['usuario' => $usuario])}}">
        @csrf
        @method('PUT')
    <input type="text" name="nome" placeholder="nome" />
    <input type="number" name="cpf" placeholder="CPF" />
    <input type="number" name="dt_inclusao" placeholder="dt_inclusao" />
    <input type="number" name="dt_alteracao" placeholder="dt_alteracao" />
    <input type="submit" value="Alterar">
    </form>
</body>
</html>
