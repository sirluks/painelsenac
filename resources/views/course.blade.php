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
        <li>{{$turmas->first()["Nome da Turma"]}}</li>
        <li>{{$turmas->first()["Código da Turma"]}}</li>
        <li>{{$turmas->first()["Data Início"]}}</li>
        <li>{{$turmas->first()["Data Término"]}}</li>
        <li>{{$turmas->first()["Recurso Financeiro"]}}</li>
        <li>{{$turmas->first()["CH"]}}</li>
        <li>{{$turmas->first()["Dias de Execução"]}}</li>
        <li>{{$turmas->first()["Valores Ofertas"]}}</li>
    </ul>
</body>
</html>