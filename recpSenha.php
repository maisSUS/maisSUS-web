<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Definição da codificação de caracteres e escala inicial -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título da página e ícone na barra de título -->
    <title>Recuperar Senha</title>
    <link rel="icon" href="img/serra.png">
    
    <!-- Referência ao arquivo CSS para estilização da página de recuperação de senha -->
    <link rel="stylesheet" href="css/rcprSenha.css">
    
    <!-- Referência ao arquivo JavaScript para lidar com as ações de recuperação de senha (com o atributo defer para carregar após o HTML) -->
    <script src="js/recuperar.js" defer></script>
</head>
<body>
    <!-- Container principal -->
    <div id="container">
        <!-- Fundo do container -->
        <div id="nav-bcg"></div>
        
        <!-- Texto e elementos do container -->
        <div id="nav-txt">
            <!-- Logotipo +SUS -->
            <p id="logo">+SUS</p>
            
            <!-- Título da página -->
            <h1 class="navtxt-title">Recuperar senha</h1>
            
            <!-- Texto "E-mail" -->
            <div id="e-mailTxt" class="navtxt-text">
                <label for="inEmail">E-mail</label>
            </div>
            
            <!-- Campo de entrada para o e-mail -->
            <div id="e-mail">
                <input type="email" placeholder="nome@dominio.com" id="inEmail" class="circle">
            </div>
            
            <!-- Botão para recuperar senha -->
            <div id="btnRcp">
                <input type="submit" value="Recuperar" class="green-button" id="btRecuperar">
            </div>
            
            <!-- Link para voltar para a página de login -->
            <div id="linkLogin">
                <a href="index.php"><span>← Voltar para login</span></a>
            </div>
        </div>
    </div>
</body>
</html>
