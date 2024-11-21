<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento concluído</title>
    <link rel="icon" href="img/serra.png">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/fimAgendamento.css">
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <section>
        <h1>Confira seus dados:</h1>
        <div class="conteudo">
            <p style="font-weight: bolder;">DADOS DA CONSULTA</p>
            <p>Paciente: Francisco Veiga</p>
            <p>Profissional: Dentista</p>
            <p>Data da consulta: XX/XX/XXXX</p>
            <p>Horário: XX:XX</p>
            <p>Unidade:</p>
            <div class="centralizar">
                <button type="button" class="voltarbtn" onclick="history.back()">Voltar</button>
                <a class="botao" href="pagPrincipal.php">Finalizar Agendamento</a>
            </div>
        </div>
    </section>
</body>
</html>