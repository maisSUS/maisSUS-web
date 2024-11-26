<?php

// Função para sanitizar entradas usando FILTER_SANITIZE_SPECIAL_CHARS
function sanitizar($data) {
    return filter_var(trim($data), FILTER_SANITIZE_SPECIAL_CHARS);
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cadastrar'])) {
        $erros = array();
        $nome = sanitizar($_POST['nome']);
        $cpf = sanitizar($_POST['cpf']);
        $cartaoSus = sanitizar($_POST['cartaoSus']);
        $telefone = sanitizar($_POST['telefone']);
        $email = sanitizar($_POST['email']);
        $senha = sanitizar($_POST['senha']);
        $confSenha = sanitizar($_POST['confSenha']);

        // Validações específicas
        $expNm = array("options" => array("regexp" => "/^[a-zA-Z' ']+$/"));
        if (empty($nome)) {
            $erros["nome"] = "O nome completo é obrigatório *";
        } elseif (!filter_var($nome, FILTER_VALIDATE_REGEXP, $expNm)) {
            $erros["nome"] = "O nome deve possuir somente letras";
        }

        $expCpf = array("options" => array("regexp" => "/^\d{3}\.\d{3}\.\d{3}-\d{2}$/"));
        if (empty($cpf)) {
            $erros["cpf"] = "O cpf é obrigatório *";
        } elseif (!filter_var($cpf, FILTER_VALIDATE_REGEXP, $expCpf)) {
            $erros["cpf"] = "O CPF deve possuir o formato 123.456.789-00";
        }

        $expSus = array("options" => array("regexp" => "/^\d{15}$/"));
        if (empty($cartaoSus)) {
            $erros["cartaoSus"] = "O cartão do SUS é obrigatório *";
        } elseif (!filter_var($cartaoSus, FILTER_VALIDATE_REGEXP, $expSus)) {
            $erros["cartaoSus"] = "O cartão do SUS deve possuir quinze números consecutivos";
        }

        $expTel = array("options" => array("regexp" => "/^\(\d{2}\) \d{5}-\d{4}$/"));
        if (empty($telefone)) {
            $erros["tel"] = "O telefone é obrigatório *";
        } elseif (!filter_var($telefone, FILTER_VALIDATE_REGEXP, $expTel)) {
            $erros["tel"] = "O telefone deve possuir o formato (DDD) 12345-6789";
        }

        if (empty($email)) {
            $erros["email"] = "O email é obrigatório *";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros["email"] = "O email deve ser no formato nome@dominio.com";
        }

        $expSenha = array("options" => array("regexp" => "/^(?=.*[A-Z]).{5,}$/"));
        if (empty($senha)) {
            $erros["senha"] = "A senha é obrigatória *";
        } elseif (!filter_var($senha, FILTER_VALIDATE_REGEXP, $expSenha)) {
            $erros["senha"] = "A senha deve ter mais que 4 caracteres e conter uma letra maiúscula";
        }

        if (!isset($erros["senha"]) && empty($confSenha)) {
            $erros["confSenha"] = "Confirmar a senha é obrigatório *";
        } elseif (isset($erros["senha"]) && $senha == $confSenha) {
            $erros["confSenha"] = $erros["senha"];
        } elseif (!isset($erros["senha"]) && $senha != $confSenha) {
            $erros["confSenha"] = "As senhas não correspondem *";
        }

        if (empty($erros)) {
            header('Location: pagPrincipal.php');
            exit;
        }
    }
}
?>

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

    <!-- Estilização e scripts para acessibilidade -->
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
        <!--Botões da barra de acessibilidade-->

        <div class="btnAcessibilidade">
            <button class="decreaseFont">A-</button>
            <button class="increaseFont">A+</button>
            <button class="blackBg">A</button>
            <button class="yellowBg">A</button>
            <button class="dislexia">A</button>
        </div>
        
        <!-- Título do formulário de cadastro -->
        <h1>Crie uma conta</h1>

        <form method="post" action="">
            <!-- Divisão para os campos de entrada -->
            <div class="inputs">
                <!-- Lado esquerdo dos campos de entrada -->
                <div id="nav-l">
                    <label for="inNome">Nome completo</label><br>
                    <!-- Campo de entrada para o nome -->
                    <p><input type="text" placeholder="Nome" id="inNome" class="circle" name="nome"></p>
                    <?php
                        if(isset($erros["nome"])){
                    ?>
                    <p class='error' style="color: red; font-size: 0.7em; margin-bottom: 0.5em;"><?php echo $erros['nome'];?></p>
                    <?php } ?>
                    <!-- Campo de entrada para o CPF -->
                    <label for="inCpf">CPF</label><br>
                    <p><input type="text" placeholder="123.456.789-00" id="inCpf" class="circle" name="cpf"></p>
                    <?php
                        if(isset($erros["cpf"])){
                    ?>
                    <p class='error' style="color: red; font-size: 0.7em; margin-bottom: 0.5em;"><?php echo $erros['cpf'];?></p>
                    <?php } ?>
                    <!-- Campo de entrada para o Cartão do SUS -->
                    <label for="inSus">Cartão do SUS</label><br>
                    <p><input type="text" placeholder="123456789123456" id="inSus" class="circle" name="cartaoSus"></p>
                    <?php
                        if(isset($erros["cartaoSus"])){
                    ?>
                    <p class='error' style="color: red; font-size: 0.7em; margin-bottom: 0.5em;"><?php echo $erros['cartaoSus'];?></p>
                    <?php } ?>
                    <!-- Campo de entrada para o telefone -->
                    <label for="inTel">Telefone</label><br>
                    <p><input type="text" placeholder="(DDD) 12345-6789" id="inTel" class="circle" name="telefone"></p>
                    <?php
                        if(isset($erros["tel"])){
                    ?>
                    <p class='error' style="color: red; font-size: 0.7em; margin-bottom: 0.5em;"><?php echo $erros['tel'];?></p>
                    <?php } ?>
                </div>

                <!-- Lado direito dos campos de entrada -->
                <div id="nav-r">
                    <!-- Campo de entrada para o email -->
                    <label for="inEmail">E-mail</label><br>
                    <p><input type="email" placeholder="nome@dominio.com" id="inEmail" class="circle" name="email"></p>
                    <?php
                        if(isset($erros["email"])){
                    ?>
                    <p class='error' style="color: red; font-size: 0.7em; margin-bottom: 0.5em;"><?php echo $erros['email'];?></p>
                    <?php } ?>
                    <!-- Campo de entrada para a senha -->
                    <label for="inPssw">Senha</label><br>
                    <p><input type="password" placeholder="***********" id="inPssw" class="circle" name="senha"></p>
                    <?php
                        if(isset($erros["senha"])){
                    ?>
                    <p class='error' style="color: red; font-size: 0.7em; margin-bottom: 0.5em;"><?php echo $erros['senha'];?></p>
                    <?php } ?>
                    <!-- Campo de confirmação de senha -->
                    <label for="inCfmPssw">Confirmar senha</label><br>
                    <p><input type="password" placeholder="***********" id="inCfmPssw" class="circle" name="confSenha"></p>
                    <?php
                        if(isset($erros["confSenha"])){
                    ?>
                    <p class='error' style="color: red; font-size: 0.7em; margin-bottom: 0.5em;"><?php echo $erros['confSenha'];?></p>
                    <?php } ?>
                </div>
            </div>

            <!-- Botões para criar conta e link para retornar a pagina login -->
            <div id="botoes">
                <button type="submit" id="btnCadastrar" class="circle" name="cadastrar">Criar conta</button>
                <!-- Link para página de login -->
                <div class="links">
                    <span>Já possui conta?</span>
                    <p><a href="index.php" id="link">Faça o login</a></p>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
