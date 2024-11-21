<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags para definir a codificação de caracteres e a escala inicial -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título da página e ícone na barra de título -->
    <title>Cadastro</title>
    <link rel="icon" href="img/serra.png">

    <!-- Referência ao arquivo CSS para estilização da página -->
    <link rel="stylesheet" href="css/cadastro.css">

    <link rel="stylesheet" href="css/acessibilidadeBarra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/acessibilidadeBarra.js" defer></script> 
    <!-- Referência ao arquivo JavaScript para validar os inputs (com o atributo defer para carregar após o HTML) -->
    <script src="js/cadastrar.js" defer></script>
</head>

<body>
    <!-- Cabeçalho com o logotipo -->
    <p id="logo">+SUS</p>

    <!-- Container principal da página -->
    <div id="container">
        <div class="btnAcessibilidade">
            <button class="decreaseFont">A-</button>
            <button class="increaseFont">A+</button>
            <button class="blackBg">A</button>
            <button class="yellowBg">A</button>
            <button class="dislexia">A</button>
        </div>
        <!--Botões da barra de acessibilidade-->
        
        <!-- Título do formulário de cadastro -->
        <h1>Crie uma conta</h1>

        <!-- Divisão para os campos de entrada -->
        <div class="inputs">
            <!-- Lado esquerdo dos campos de entrada -->
            <div id="nav-l">
                <label for="inNome">Nome completo*</label><br>
                <!-- Campo de entrada para o nome -->
                <p><input type="text" placeholder="Nome" id="inNome" class="circle" required></p>
                <!-- Campo de entrada para o CPF -->
                <label for="inCpf">CPF *</label><br>
                <p><input type="text" placeholder="123.456.789-00" id="inCpf" class="circle"></p>
                <!-- Campo de entrada para o Cartão do SUS -->
                <label for="inSus">Cartão do SUS *</label><br>
                <p><input type="text" placeholder="123-4567-8912-3456" id="inSus" class="circle"></p>
                <!-- Campo de entrada para o telefone -->
                <label for="inTel">Telefone *</label><br>
                <p><input type="text" placeholder="(DDD) 12345-6789" id="inTel" class="circle"></p>
            </div>

            <!-- Lado direito dos campos de entrada -->
            <div id="nav-r">
                <!-- Campo de entrada para o email -->
                <label for="inEmail">E-mail *</label><br>
                <p><input type="email" placeholder="nome@dominio.com" id="inEmail" class="circle"></p>
                <!-- Campo de entrada para a senha -->
                <label for="inPssw">Senha *</label><br>
                <p><input type="password" placeholder="***********" id="inPssw" class="circle"></p>
                <!-- Campo de confirmação de senha -->
                <label for="inCfmPssw">Confirmar senha *</label><br>
                <p><input type="password" placeholder="***********" id="inCfmPssw" class="circle"></p>
            </div>
        </div>

        <!-- Botões para criar conta e link para retornar a pagina login -->
        <div id="botoes">
            <button type="submit" id="btnCadastrar" class="circle">Criar conta</button>
            <!-- Link para página de login -->
            <div class="links">
                <span>Já possui conta?</span>
                <p><a href="index.php" id="link">Faça o login</a></p>
            </div>
        </div>

    </div>
</body>

</html>