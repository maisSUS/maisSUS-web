<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Definição da codificação de caracteres e escala inicial -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título da página e ícone na barra de título -->
    <title>Perfil</title>
    <link rel="icon" href="img/serra.png">

    <!-- Referências aos arquivos de estilos CSS -->
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/perfil.css">

    <!-- Biblioteca de ícones FontAwesome -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/367278d2a4.css" crossorigin="anonymous">
</head>

<body>
    <?php
        include 'header.php';
    ?>

    <!-- Container principal -->
    <div class="container">

        <!-- Lado direito do container -->
        <div id="nav-r">
            <h1 id="h10">Perfil</h1>
            <!-- Conteúdo do perfil -->
            <div class="content">
                <!-- Título "Dados Pessoais" -->
                <h1 id="h11">Dados Pessoais</h1>

                <!-- Dados pessoais -->
                <div class="data">
                    <div class="data-left">
                        <p id="nav-subtitles">Nome Completo</p>
                        <p id="nav-txt">Francisco Veiga</p>
                        <p id="nav-subtitles">CPF</p>
                        <p id="nav-txt">160.616.570-48</p>
                        <p id="nav-subtitles">Cartão Nacional de Saúde</p>
                        <p id="nav-txt">754.891.263.781</p>
                    </div>
                    <div class="data-right">
                        <p id="nav-subtitles">E-mail</p>
                        <p id="nav-txt">eutentei@fuimlk.com.br</p>
                        <p id="nav-subtitles">Telefone</p>
                        <p id="nav-txt">(XX) XXXXX-XXXX</p>
                        <div id="nav-button">
                            <button type="submit" class="green-button" id="altDados">Alterar dados</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>