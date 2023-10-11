<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Painel de trabalho SENAC <span class="badge bg-secondary">NUTEC</span></h1>
    <p>Em construção...</p>
    <h2>Novas datas das turmas</h2>
   
        <div class="form-group">
            <label for="nome">Numero da turma:</label>
            <input type="text" name="codturma" class="form-control" required>
        </div>
        <div class="form-check">
            <input type="radio" name="situacao" value="1" id="i" class="form-check-input"><label for="i"
                class="form-check-label">Início</label>
        </div>
        <div>
            <input type="radio" name="situacao" value="2" id="a" class="form-check-input" checked><label for="a"
                class="form-check-label">Adiamento</label>
            </fieldset>
        </div>

        <div class="form-group">
            <label for="dtfim">Nova data:</label>
            <input type="date" name="novadata">
        </div>
        <br>
        <input type="submit" value="Calcular" class="btn btn-primary">
    
    <br>
    <br>

    @php

        <p>Estou passando para informar que dia *<strong>{data}</strong>* a partir das *<strong>{horario}</strong>* se dará o 1º dia de Aula do curso de *<strong>{curso}</strong>*. 😉</p>
        < p >* <strong>Obs1.: Informamos que é necessário que vc traga a sua garrafinha de agua</strong> *</p >
        <p></p>
        <p>*<strong>POR FAVOR!!! Confirme o recebimento.</strong>*</p><br>";

        "Prezado Cliente<br><br>
    
        A unidade *<strong>NUTEC – Núcleo de Ensino Tecnológico</strong>* informa que o curso *<strong>{curso}</strong>*, turno *<strong>{turno}</strong>* que seria realizado no período de *<strong>{datasigini}</strong>* a *<strong>{datasigfim}</strong>* foi adiado para o dia *<strong>{data inicial}</strong>* com término em *<strong>{datafim}</strong>*.<br>
        Conforme *<strong>cláusula 4.5</strong>* do Contrato de Prestação de Serviços Educacionais, _<em>o contratado se reserva o direito de adiar o curso que não atingir o percentual mínimo de 80%(oitenta por cento) de alunos previsto na programação</em>_.<br>
        $ult          
        Desde já agradecemos a compreensão.""

    @endphp



</body>

</html>