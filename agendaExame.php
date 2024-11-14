<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Exame</title>
    <link rel="icon" href="img/serra.png">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/agendaExame.css">
    <link rel="stylesheet" href="css/cancelamento.css">
<body>
    <header>
        <!-- menu  -->
        <div class="nav">
            <div id="logo"><a href="pagPrincipal.php">+SUS</a></div>
            <ul class="navlist">
                <li class="nav-item">
                    <a class="nav-link active" href="pagPrincipal.php">Página Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="meusAgendamentos.php">Meus Agendamentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="perfil.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Sair</a>
                </li>
            </ul>


        </div>
    </header>
    <h1>Agendamento de Exame</h1>
    <section>
        <div class="conteudo">

            <!-- lista de unidades disponiveis  -->
            <div class="unidades">
                <label class="item" for="unidade">Selecione uma unidade:</label>

                <select name="unidade" id="unidade">
                <option value="feurosa">Feu Rosa</option>
                <option value="vnc">Vila Nova de Colares</option>
                <option value="jacar">Jacaraípe</option>
                <option value="boavista">Boa Vista</option>
                <option value="novoh">Novo Horizonte</option>
                <option value="serradourada">Serra Dourada</option>
                </select>
            </div>
            
            <!-- lista de exames  -->
            <div class="exames">
                <label class="item" for="exame">Escolha o exame desejado:</label>

                <select name="exame" id="exame">
                <option value="exmSangue">Exame de Sangue</option>
                <option value="exmPapaNicolau">Papa-Nicolau</option>
                <option value="exmPreNatal">Pré-Natal</option>
                <option value="exmRadiog">Radiografia</option>
                <option value="exmMamog">Mamografia</option>
                </select>
            </div>

            <div class="botoes">
                <button class="btnfinais" name="btnvoltar" onclick="history.back()">Voltar</button>
                <!--<a class="btnfinais" name="btnprosseguir" href="agendaHorario.php">Continuar</a>-->
                <input type="button" value="Continuar" class="btnfinais" id="btnprosseguir" onclick="document.getElementById('id01').style.display='block'">
                <div id="id01" class="modal">
                    <form class="modal-content">
                        <div class="container">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                            <h2>ATENÇÃO!</h2>
                            <p>Para agendar essa consulta é necessário ter o</br> encaminhamento do clínico geral. Se já possui,</br> siga em frente. Se não possui, procure um clínico</br> geral antes.</p>
                            <div class="centralizar">
                                <div class="clearfix">
                                    <button type="button" class="deletebtn" onclick="document.getElementById('id01').style.display='none'">Voltar</button>
                                    <button type="button" class="cancelbtn" id="avancarbtn">Seguir em frente</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <script>
                    var avancar = document.getElementById("avancarbtn");
                    
                    function confirmar() {
                        window.location.href = "agendaHorario.php";
                    }
                    avancar.addEventListener("click", confirmar);
                </script>
            </div>
        </div>
    </section>
</body>
</html>