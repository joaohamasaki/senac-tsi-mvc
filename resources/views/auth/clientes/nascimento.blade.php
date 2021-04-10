<!DOCTYPE html>
<html lang="pt-br">
    <body>
        <table border='1'>
            <tr>
                <th>Nascimento</th>
            </tr>

            @foreach($clientes as $cliente)

                <tr>
                    <td>{{$cliente->Nascimento}}</td>
                </tr>

            @endforeach
        </table>
    </body>
</html>
