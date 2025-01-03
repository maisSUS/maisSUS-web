<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidades</title>
    <link rel="icon" href="img/serra.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navBar.css">
    <script src="js/btnAcoes.js"></script>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'><link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://kit.fontawesome.com/367278d2a4.css" crossorigin="anonymous">
</head>

<body>
    <?php
        // Inclui o header com o menu e outras informações
        include 'header.php';
    ?>

    <section>
        <i class='bx bx-arrow-back' id="setaUbs" onclick="Principal()"><p id="voltarVac">Unidades básicas de saúde</p></i>
        <!-- Lista de UBS -->
        <div class="unidades">
            <div>
                <div class="UBS">
                    <div>
                        <i class="fa-regular fa-hospital"></i>
                        <h3>URS Feu Rosa</h3>
                        <p>Localização R. parara</p>   
                    </div>
                    <!-- Botão com Link para outra pagina -->
                    <a href="infoUBS.php" class="btnVerMais">Detalhes</a>
                </div>

                <div class="UBS">
                    <div>
                        <i class="fa-regular fa-hospital"></i>
                        <h3>UBS Jacaraipe</h3>
                        <p>Localização R. parara</p>   
                    </div>
                    <a href="infoUBS.php" class="btnVerMais">Detalhes</a>
                </div>

                <div class="UBS">
                    <div>
                        <i class="fa-regular fa-hospital"></i>
                        <h3>UBS Nova Almeida</h3>
                        <p>Localização R. parara</p>   
                    </div>
                    <a href="infoUBS.php" class="btnVerMais">Detalhes</a>
                </div>
            </div>
            <div>
                <div class="UBS">
                    <div>
                        <i class="fa-regular fa-hospital"></i>
                        <h3>UBS P. Res. Laranjeiras</h3>
                        <p>Localização R. parara</p>   
                    </div>
                    <a href="infoUBS.php" class="btnVerMais">Detalhes</a>
                </div>

                <div class="UBS">
                    <div>
                        <i class="fa-regular fa-hospital"></i>
                        <h3>UBS Novo Horizonte</h3>
                        <p>Localização R. parara</p>   
                    </div>
                    <a href="infoUBS.php" class="btnVerMais">Detalhes</a>
                </div>

                <div class="UBS">
                    <div>
                        <i class="fa-regular fa-hospital"></i>
                        <h3>UBS Lorem Ipsum</h3>
                        <p>Localização R. parara</p>   
                    </div>
                    <a href="infoUBS.php" class="btnVerMais">Detalhes</a>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>