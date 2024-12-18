<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/acessibilidadeBarra.css">
    <link href="https://fonts.cdnfonts.com/css/opendyslexic" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/acessibilidadeBarra.js" defer></script> 
    <title>Document</title>
</head>
<body>
    <header>
        <!--Menu que será usado em diversas páginas-->
        <div class="nav">
            <div id="logo"><a href="pagPrincipal.php">+SUS</a></div>
            <ul class="navlist">
                <li class="nav-item">
                    <a class="nav-link active" href="pagPrincipal.php">Página Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="perfil.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="logout.php">Sair</a>
                </li>
            </ul>
        </div>
        <!--Botões da barra de acessibilidade-->
        <button class="decreaseFont" title="diminuir fonte">A-</button>
        <button class="increaseFont" title="aumentar fonte">A+</button>
        <button class="blackBg" title="modo escuro">A</button>
        <button class="yellowBg" title="alto-contraste">A</button>
        <button class="dislexia" title="fonte para disléxicos">A</button>

    </header>
