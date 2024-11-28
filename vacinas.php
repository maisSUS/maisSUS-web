<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacinas</title>
    <link rel="icon" href="img/serra.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'><link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <script src="js/btnAcoes.js"></script>
</head>

<body>
    <?php
        include 'header.php';
    ?>

    <section>
        <div>
            <!-- Botão com evento para voltar a pagina principal -->
            <i class='bx bx-arrow-back' id="seta" onclick="Principal()"><p id="voltarVac">Vacinas</p></i>
        </div>
        <section>
            <div class="unidades">
                <!-- Lista de Vacinas com nome das doenças que tratam -->
                 <!-- bloco esquerdo -->
                <div>
                    <div class="vacina">
                        <i class='bx bx-injection'></i>
                        <p>Hepatite A</p>
                        <!-- Botão que leva a uma pagina com as informações dessa vacinas -->
                        <a href="infoVac.php">Detalhes</a>
                    </div>

                    <div class="vacina">
                        <i class='bx bx-injection'></i>
                        <p>Hepatite B</p>
                        <a href="infoVac.php">Detalhes</a>
                    </div>

                    <div class="vacina">
                        <i class='bx bx-injection'></i>
                        <p>HPV</p>
                        <a href="infoVac.php">Detalhes</a>
                    </div>
                </div>

                <!-- bloco direito -->
                <div>
                    <div class="vacina">
                        <i class='bx bx-injection'></i>
                        <p>Coronavírus</p>
                        <a href="infoVac.php">Detalhes</a>
                    </div>

                    <div class="vacina">
                        <i class='bx bx-injection'></i>
                        <p>Febre amarela</p>
                        <a href="infoVac.php">Detalhes</a>
                    </div>
                    <div class="vacina">
                        <i class='bx bx-injection'></i>
                        <p>Tétano</p>
                        <a href="infoVac.php">Detalhes</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
