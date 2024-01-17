<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            table,th,tr,td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;

            }
        </style>
    </head>
    <body>

        <h1>Usuarios</h1>
        <div>
            <br>
            <br>
            <br>
        </div>
        <div>
            <table>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data de Inclusao</th>
                    <th>Data de Alteracao</th>
                    <th>Alterar</th>
                    <th>Deletar</th>
                </tr>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->usuario_id}}</td>
                    <td>{{$usuario->nome}}</td>
                    <td>{{$usuario->cpf}}</td>
                    <td>{{$usuario->dt_inclusao}}</td>
                    <td>{{$usuario->dt_alteracao}}</td>
                    <td>
                        <a href="{{$usuario->usuario_id}}/edit">Alterar</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('usuarios.delete', ['usuario' => $usuario])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Deletar" />
                        </form>
                    </td>
                </tr>


                @endforeach
            </table>
        </div>

    </body>
</html>
