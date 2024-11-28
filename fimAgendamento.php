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
    // Inclui o cabeçalho da página
        include 'header.php';
    ?>
    <section>
        <!-- titulo -->
        <h1>DADOS DA CONSULTA</h1>
        <div class="conteudo">
            <!-- subtitulo -->
            <h2>Confira seus dados:</h2>
            <div class="esquerda">
                <!-- resumo do agendamento -->
                <p><strong>Paciente:</strong> Francisco Veiga</p>
                <p><strong>Profissional:</strong> Ana Paula Silva</p>
                <p><strong>Especialidade:</strong> Dentista</p>
                <p><strong>Data da consulta:</strong> 02/02/2025</p>
                <p><strong>Horário:</strong> 09:00</p>
                <p><strong>Unidade:</strong> UBS Feu Rosa</p>
            </div>
            <!-- botoes de voltar e finalizar -->
            <div class="centralizar">
                <button type="button" class="voltarbtn" id="btns" onclick="history.back()">Voltar</button>
                <a class="botao" href="pagPrincipal.php" id="btns">Finalizar Agendamento</a>
            </div>
        </div>
    </section>
</body>
</html>