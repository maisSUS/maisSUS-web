<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Agendamentos</title>
    <link rel="icon" href="img/serra.png">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/meusAgendamentos.css">
    <link rel="stylesheet" href="css/cancelamento.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'><link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <script src="js/cancelamento.js" defer></script>
    <script src="js/btnAcoes.js" defer></script>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <section>

        <!--Seta para volta-->
        <i class='bx bx-arrow-back' id="setaagd" onclick="Principal()"><p id="pSeta">Meus agendamentos</p></i>

        <h1>CONSULTE OU CANCELE SEUS AGENDAMENTOS</h1>
        <div class="lista">

            <!--Bloco com as informacoes principais de cada agendamento-->
            <div class="agendamentos" id="agd1">
                <div class="ag1">
                    <div class="linha-1">
                        <p class="dentista" id="dentista"><b>Dentista</b></p>
                        <button class="btnCancelar" id="btnCancelar" onclick="document.getElementById('id01').style.display='block'">Cancelar</button>
                    </div>
        
                    <p><b>Nome do paciente:</b> Fulano da Silva Santos</p>
                    <p><b>Data da consulta:</b> dd/mm/yyyy</p>
                </div>
                
                <div class="btn">
                    <button class="btnVerMais" id="btnVerMais" onclick="infoAgendamento()">Ver mais</button>
                </div>
            </div>
            
            <!--Bloco com as informacoes principais de cada agendamento-->
            <div class="agendamentos" id="agd1">
                <div class="ag1">
                    <div class="linha-1">
                        <p class="dentista" id="dentista"><b>Dentista</b></p>
                        <button class="btnCancelar" id="btnCancelar" onclick="document.getElementById('id01').style.display='block'">Cancelar</button>
                    </div>
        
                    <p><b>Nome do paciente:</b> Fulano da Silva Santos</p>
                    <p><b>Data da consulta:</b> dd/mm/yyyy</p>
                </div>
                
                <div class="btn">
                    <button class="btnVerMais" id="btnVerMais" onclick="infoAgendamento()">Ver mais</button>
                </div>
            </div>
    
            <!--Bloco com as informacoes principais de cada agendamento-->
            <div class="agendamentos" id="agd1">
                <div class="ag1">
                     
                    <div class="linha-1">
                        <p class="dentista" id="dentista"><b>Dentista</b></p>
                        <button class="btnCancelar" id="btnCancelar" onclick="document.getElementById('id01').style.display='block'">Cancelar</button>
                    </div>
        
                    <p><b>Nome do paciente:</b> Fulano da Silva Santos</p>
                    <p><b>Data da consulta:</b> dd/mm/yyyy</p>
                    <p></p>
                </div>
                
                <div class="btn">
                    <button class="btnVerMais" id="btnVerMais" onclick="infoAgendamento()">Ver mais</button>
                </div>
            </div>    
            
        </div>

    </section>

    <!--Janela que aparece ao apertar em cancelar e garante que ele realmente quer cancelar a consulta-->
    <div id="id01" class="modal">
        <form class="modal-content">
            <div class="container">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                <h1>Cancelar Consulta</h1>
                <p>Tem certeza que você deseja cancelar a sua consulta com o [especialista]?</p>
                <p><b>Data da consulta:</b> dd/mm/yyyy</p>
                <p><b>Nome do médico:</b> Fulano</p>
                
                <div class="centralizar">
                    <div class="clearfix">
                        <button type="button" onclick="some(1)" class="deletebtn">Não</button>
                        <button type="button" onclick="some(0)" class="cancelbtn">Sim</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!--Informa a consulta foi cancelada com sucesso-->
    <div id="id02" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
        <form class="modal-content">
            <div class="centralizar">
                <div class="container">
                    <h1>Consulta Cancelada</h1>
                    <p>A sua consulta foi cancelada com sucesso.</p>
                    
                    <!--Ao apertar em ok voce volta para a pagina inicial-->
                    <div class="clearfix">
                        <a type="button" onclick="document.getElementById('id02').style.display='none'" class="ok" href="pagPrincipal.php">Ok</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>