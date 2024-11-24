<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Consulta</title>
    <link rel="icon" href="img/serra.png">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/agendaConsulta.css">
    <link rel="stylesheet" href="css/cancelamento.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <section>
        <h1 id="h1">Agendamento de Consulta</h1>
        <div class="conteudo">    
            
            <!-- lista de unidades -->
            <div class="unidades">
                <label class="item" for="unidade">Selecione uma unidade:</label>
    
                <select name="unidade" id="unidade">
                    <option value="feurosa">Feu Rosa</option>
                    <option value="vnc">Vila Nova de Colares</option>
                    <option value="jacar">Jacaraípe</option>
                    <option value="boavista">Boa Vista</option>
                    <option value="novoh">Novo Horizonte</option>
                    <option value="serrad">Serra Dourada</option>
                </select>
            </div>

            <!-- lista de especialidades -->

            <div class="especialidades">
                <label class="item" for="especialidade">Escolha uma especialidade:</label>
    
                <select name="especialidade" id="especialidade">
                    <option value="clinicogeral">Clínico Geral</option>
                    <option value="derma">Dermatologista</option>
                    <option value="ped">Pediatria</option>
                    <option value="gine">Ginecologista</option>
                    <option value="dentista">Dentista</option>
                </select>
            </div>
            
            <!-- lista de profissionais -->
            <div class="profissionais">
                <label class="item" for="profissional">Escolha um especialista:</label>
    
                <select name="profissional" id="profissional">
                    <option value="p1">Kátia Flávia dos Santos</option>
                    <option value="p2">Ana Paula Silva</option>
                    <option value="p3">Beatriz Vitória Matins </option>
                    <option value="p4">Maria Eduarda Rodrigues</option>
                    <option value="p5">Luiza da Conceição Oliveira</option>
                    <option value="p6">Gustavo Pereira de Almeida</option>
                    <option value="p7">Leonardo Gabriel Gonçalves</option>
                </select>
            </div>
            
            <!-- botoes para prosseguir e voltar  -->
            <div class="botoes">
                <button class="btnfinais" id="btnvoltar" onclick="history.back()">Voltar</button>
                <input type="button" value="Continuar" class="btnfinais" id="btncontinuar" onclick="document.getElementById('id01').style.display='block'">
                <div id="id01" class="modal">
                    <form class="modal-content">
                        <div class="container">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                            <i class='bx bx-error' ></i>
                            <h1 id="aviso">ATENÇÃO!</h1>
                            <p>Para agendar essa consulta é necessário ter o</br> encaminhamento do clínico geral. Se já possui,</br> siga em frente. Se não possui, procure um clínico</br> geral antes.</p>
                            <div class="centralizar">
                                <div class="clearfix">
                                    <button type="button" class="voltarbtn" onclick="document.getElementById('id01').style.display='none'">Voltar</button>
                                    <button type="button" class="avancarbtn" id="avancarbtn">Seguir em frente</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <script>
                    var avancar = document.getElementById("avancarbtn");
                    function continuar() {
                        window.location.href = "agendaHorario.php";
                    }
                    avancarbtn.addEventListener("click", continuar);
                </script>
                    
            </div>
        </div>
    </section>
</body>
</html>