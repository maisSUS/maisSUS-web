<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horário e data</title>
    <link rel="icon" href="img/serra.png">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/agendaHorario.css">
    <link rel="stylesheet" href= "https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="css/calendario.css">
    <script src="js/calendario.js" defer></script>
    <script src="js/agendarHorario.js" defer></script>
</head>
<body>
    <?php
    //header da pagina
        include 'header.php';
    ?>
    
    <section>
        <h1>Agendamento de consulta</h1>
        <div class="conteudo">
            <div class="agendamento">
                <!-- calendario -->
                <div class="calendario">
                    <label class="item" for="id">1. Escolha uma data:</label>

                    <div class="calendar-container" tabindex="0">
                        <header class="calendar-header">
                            <p class="calendar-current-date"></p>
                            <!-- botoes de alterar o mes -->
                            <div class="calendar-navigation">
                                <span id="calendar-prev" class="material-symbols-rounded" tabindex="0">chevron_left</span>
                                <span id="calendar-next" class="material-symbols-rounded" tabindex="0">chevron_right</span>
                            </div>
                        </header>
                        <!-- dias da semana -->
                        <div class="calendar-body">
                            <ul class="calendar-weekdays">
                                <li>Dom</li>
                                <li>Seg</li>
                                <li>Ter</li>
                                <li>Qua</li>
                                <li>Qui</li>
                                <li>Sex</li>
                                <li>Sab</li>
                            </ul>
                            <!-- dias do mes -->
                            <ul class="calendar-dates"></ul>
                        </div>
                    </div>
                </div>
                
                <!-- Botoes de escolher a hora -->
                <div class="escolheHora">
                    <label class="item" for="id">2. Escolha um horário:</label>
                    <div id="horarios">
                        <div class="item-EscolheHora" tabindex="0">08:00</div>
                        <div class="item-EscolheHora" tabindex="0">08:20</div>
                        <div class="item-EscolheHora" tabindex="0">08:40</div>
                        <div class="item-EscolheHora" tabindex="0">09:00</div>
                        <div class="item-EscolheHora" tabindex="0">09:20</div>
                        <div class="item-EscolheHora" tabindex="0">09:40</div>
                        <div class="item-EscolheHora" tabindex="0">10:00</div>
                        <div class="item-EscolheHora" tabindex="0">10:20</div>
                        <div class="item-EscolheHora" tabindex="0">10:40</div>
                        <div class="item-EscolheHora" tabindex="0">11:00</div>
                        <div class="item-EscolheHora" tabindex="0">11:20</div>
                        <div class="item-EscolheHora" tabindex="0">11:40</div>
                        <div class="item-EscolheHora" tabindex="0">12:00</div>
                        <div class="item-EscolheHora" tabindex="0">12:20</div>
                        <div class="item-EscolheHora" tabindex="0">12:40</div>
                        <div class="item-EscolheHora" tabindex="0">13:00</div>
                        <div class="item-EscolheHora" tabindex="0">13:20</div>
                        <div class="item-EscolheHora" tabindex="0">13:40</div>
                    </div>
                </div>
            </div>
            <!-- botoes de voltar e prosseguir -->
            <div class="botoes">
                <button class="btnfinais" name="btnvoltar" id="btnvoltar" onclick="history.back()">Voltar</button>
                <a href="fimAgendamento.php" class="btnfinais" name="btncontinuar" id="btncontinuar">Continuar</a>
            </div>
        </div>
        
    </section>
</body>
</html>