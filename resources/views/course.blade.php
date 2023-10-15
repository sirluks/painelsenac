<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos Cursos</title>
</head>
<body>
    <h1>Cursos Dísponiveis</h1>
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
</body>
</html>