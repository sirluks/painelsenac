<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos Cursos</title>
</head>
<body>
    <table border="1">
    <thead>
    <tr>
        <th>titulo 1</th>
        <th>titulo 2</th>
        <th>titulo 3</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Body1 linha1</td>
        <td>Body2 linha1</td>
        <td>Body3 linha1</td>
    </tr>
    <tr>
        <td>Body1 linha2</td>
        <td>Body2 linha2</td>
        <td>Body3 linha2</td>
    </tr>
    </tbody>
    <tfoot>
        <td>Foot 1</td>
        <td>Foot 2</td>
        <td>Foot 3</td>
    </tfoot>
    </table>
    <h1>Lista dos cursos dísponiveis</h1>
        @foreach ($turmas as $turma)
            <ul>
                <li>{{$turma["Nome da Turma"]}}</li>
                <li>{{$turma["Código da Turma"]}}</li>
                <li>{{$turma["Data Início"]}}</li>
                <li>{{$turma["Data Término"]}}</li>
                <li>{{$turma["Recurso Financeiro"]}}</li>
                <li>{{$turma["CH"]}}</li>
                <li>{{$turma["Dias de Execução"]}}</li>
                <li>{{$turma["Valores Ofertas"]}}</li>
            </ul>
        @endforeach
</body>
</html>