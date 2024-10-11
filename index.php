<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Definição da codificação de caracteres e escala inicial -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título da página e ícone na barra de título -->
    <title>Login</title>
    <link rel="icon" href="img/serra.png">

    <!-- Referência ao arquivo CSS para estilização da página de login -->
    <link rel="stylesheet" href="css/login.css">

    <!-- Referência ao arquivo JavaScript para lidar com as ações de login (com o atributo defer para carregar após o HTML) -->
    <script src="js/logar.js" defer></script>
</head>

<body>
    <!-- Cabeçalho da página -->
    <header>
        <!-- Container principal -->
        <div id="container">
            <!-- Fundo do cabeçalho -->
            <div id="nav-bcg"></div>
            <!-- Texto e elementos do cabeçalho -->
            <div id="nav-txt">
                <!-- Logotipo -->
                <div id="logo">
                    <p class="logo">+SUS</p>
                </div>
                <!-- Título do formulário de login -->
                <div id="title">
                    <h1>Faça seu login</h1>
                </div>
                <!-- Texto para inserir CPF ou Cartão do SUS -->
                <div id="txtUser" class="navtxt-text">CPF</div>
                <!-- Campo de entrada para o CPF -->
                <div id="inUser" class="navtxt-text"><input type="text" id="inID" class="circle" placeholder="123.456.789-00"></div>
                <!-- Texto para inserir senha -->
                <div id="txtPassword" class="navtxt-text">Senha</div>
                <!-- Campo de entrada para a senha -->
                <div id="inPassword" class="navtxt-text">
                    <input type="password" id="inSenha" class="circle">
                    <!-- Ícone de olho para mostrar/esconder a senha -->
                    <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png"
                        id="olho" class="olho">
                </div>
                <!-- Botão para entrar -->
                <div id="btnEntrar" class="navtxt-button"><input type="button" value="Entrar" id="btEntrar"
                        class="green-button"><a href="recpSenha.php" id="linkA">Esqueci minha senha</a></div>
                <!-- Link para redefinir senha -->
                <div class="navtxt-link"><a href="cadastro.php">Não possui conta? <b>Crie uma aqui</b></a></div>
            </div>
        </div>
    </header>
</body>

</html>