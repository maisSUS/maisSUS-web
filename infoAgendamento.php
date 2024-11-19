<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mais Info</title>
    <link rel="icon" href="img/serra.png">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/infoAgendamento.css">
    <link rel="stylesheet" href="css/cancelamento.css">
    <script src="js/cancelamento.js"></script>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <h1 class="o1">Informações do agendamento</h1>
    <section>
        
        <h1 class="h1" id="especialidade">DENTISTA</h1> <!--Especialidade-->
        <h2 class="h2" id="h2">Consulta</h2><!--Tipo do agendamento-->

        <!--Informacoes referentes ao dados da consulta-->
        <div class="pessoas">
            <div id="paciente">
                <p><b>Paciente:</b> Fulano da Silva Santo</p> 
            </div>

            

            <div id="profissional">
                <p><b>Profissional:</b> Luiza da Conceição Oliveira</p>
            </div>
        </div>
        
        <div class="dtHora">
            <div id="data">
                <p><b>Data da consulta:</b> dd/mm/yyyy</p>
            </div>
            <div id="horario">
                <p><b>Horário:</b> 08:00</p>
            </div>
        </div>
        
        <div class="undInfo">
            <div id="und">
                <p><b>Unidade:</b> UBS Feu Rosa</p>
            </div>
            
            <div id="sala">
                <p><b>Sala de atendimento:</b> 14A</p>
            </div>
        </div>

        <!--Botoes para permitir que o usuario volte a pagina anterior ou cancele a consulta-->
        <button class="btnVoltar" id="btnVoltar" name="btnvoltar" onclick="history.back()">Voltar</button>
        <button class="btnCancelar" id="btnCancelar" onclick="document.getElementById('id01').style.display='block'">Cancelar</button>
        
    </section>

    <!--Janela para garantir que o usuario nao cancele sua consulta por engano-->
    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
        <form class="modal-content">
            <div class="container">
                <h1>Cancelar Consulta</h1>
                <p>Tem certeza que você deseja cancelar a sua consulta?</p>
                
                <div class="centralizar">
                    <div class="clearfix">
                        <button type="button" onclick="some(1)" class="deletebtn">Não</button>
                        <button type="button" onclick="some(0)" class="cancelbtn">Sim</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!--Janela que informa que a consulta foi cancelada-->
    <div id="id02" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
        <form class="modal-content">
            <div class="container">
                <h1>Consulta Cancelada</h1>
                <p>A sua consulta foi cancelada com sucesso.</p>
                
                <div class="clearfix">
                    <a type="button" onclick="document.getElementById('id02').style.display='none'" class="ok" href="pagPrincipal.php">Ok</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>