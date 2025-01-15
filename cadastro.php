<?php
// inicia sessão
session_start();

// Inclui o arquivo de conexão com o banco de dados
include 'config.php'; // Certifique-se de que o config.php contém as informações corretas de conexão com o banco de dados

// Função para sanitizar entradas usando FILTER_SANITIZE_SPECIAL_CHARS
function sanitizar($data) {
    return filter_var(trim($data), FILTER_SANITIZE_SPECIAL_CHARS);
}

// Condição que verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cadastrar'])) {
        $erros = array(); //array para guardar os erros, a fim de imprimi-los na tela depois
        //variaveis para armazenar os dados digitados no formulário
        $nome = sanitizar($_POST['nome']);
        $cpf = sanitizar($_POST['cpf']);
        $cartaoSus = sanitizar($_POST['cartaoSus']);
        $telefone = sanitizar($_POST['telefone']);
        $email = sanitizar($_POST['email']);
        $senha = sanitizar($_POST['senha']);
        $confSenha = sanitizar($_POST['confSenha']);

        // Validações (já fornecidas no seu código)

        // Se não houver erros, insere os dados no banco de dados
        if (empty($erros)) {
            // Criptografar a senha antes de armazená-la no banco
            $senhaCriptografada = md5($senha); // Use md5 ou outro método de hash (bcrypt é recomendado)

            // Preparar a consulta SQL para inserir os dados
            $sql = "INSERT INTO LOGIN_USUARIO (cpfUsuario, cartaoSus, nomeUsuario, email, telUsuario, senha) 
                VALUES (:cpf, :cartaoSus, :nome, :email, :telefone, :senha)";
    
            $stmt = $conn->prepare($sql);

            // Bind dos parâmetros
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':cartaoSus', $cartaoSus);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':senha', $senhaCriptografada);

            // Executar a consulta
            if ($stmt->execute()) {
                // Cadastro realizado com sucesso
                $_SESSION['usuario'] = $nome;
                $_SESSION['dados_form'] = $_POST;
                header('Location: pagPrincipal.php'); // Redireciona para a página de sucesso ou login
                exit;
            } else {
                $erros['geral'] = 'Erro ao cadastrar o usuário. Tente novamente.';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" href="img/serra.png">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="css/acessibilidadeBarra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/acessibilidadeBarra.js" defer></script> 
    <script src="js/cadastrar.js" defer></script>
</head>

<body>
    <p id="logo">+SUS</p>
    <div id="container">
        <div class="btnAcessibilidade">
            <button class="decreaseFont">A-</button>
            <button class="increaseFont">A+</button>
            <button class="blackBg">A</button>
            <button class="yellowBg">A</button>
            <button class="dislexia">A</button>
        </div>
        
        <h1>Crie uma conta</h1>

        <!-- Formulario enviado por post -->
        <form method="post" action="">
            <div class="inputs">
                <div id="nav-l">
                    <label for="inNome">Nome completo</label><br>
                    <p><input type="text" placeholder="Nome" id="inNome" class="circle" name="nome"></p>
                    <?php if(isset($erros["nome"])): ?>
                    <p class='error' style="color: red; font-size: 0.7em; margin-bottom: 0.5em;"><?php echo $erros['nome']; ?></p>
                    <?php endif; ?>
                    <label for="inCpf">CPF</label><br>
                    <p><input type="text" placeholder="123.456.789-00" id="inCpf" class="circle" name="cpf"></p>
                    <?php if(isset($erros["cpf"])): ?>
                    <p class='error' style="color: red; font-size: 0.7em; margin-bottom: 0.5em;"><?php echo $erros['cpf']; ?></p>
                    <?php endif; ?>
                    <label for="inSus">Cartão do SUS</label><br>
                    <p><input type="text" placeholder="123456789123456" id="inSus" class="circle" name="cartaoSus"></p>
                    <?php if(isset($erros["cartaoSus"])): ?>
                    <p class='error' style="color: red; font-size: 0.7em; margin-bottom: 0.5em;"><?php echo $erros['cartaoSus']; ?></p>
                    <?php endif; ?>
                    <label for="inTel">Telefone</label><br>
                    <p><input type="text" placeholder="(DDD) 12345-6789" id="inTel" class="circle" name="telefone"></p>
                    <?php if(isset($erros["tel"])): ?>
                    <p class='error' style="color: red; font-size: 0.7em; margin-bottom: 0.5em;"><?php echo $erros['tel']; ?></p>
                    <?php endif; ?>
                </div>

                <div id="nav-r">
                    <label for="inEmail">E-mail</label><br>
                    <p><input type="email" placeholder="nome@dominio.com" id="inEmail" class="circle" name="email"></p>
                    <?php if(isset($erros["email"])): ?>
                    <p class='error' style="color: red; font-size: 0.7em; margin-bottom: 0.5em;"><?php echo $erros['email']; ?></p>
                    <?php endif; ?>
                    <label for="inPssw">Senha</label><br>
                    <p><input type="password" placeholder="***********" id="inPssw" class="circle" name="senha"></p>
                    <?php if(isset($erros["senha"])): ?>
                    <p class='error' style="color: red; font-size: 0.7em; margin-bottom: 0.5em;"><?php echo $erros['senha']; ?></p>
                    <?php endif; ?>
                    <label for="inCfmPssw">Confirmar senha</label><br>
                    <p><input type="password" placeholder="***********" id="inCfmPssw" class="circle" name="confSenha"></p>
                    <?php if(isset($erros["confSenha"])): ?>
                    <p class='error' style="color: red; font-size: 0.7em; margin-bottom: 0.5em;"><?php echo $erros['confSenha']; ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div id="botoes">
                <button type="submit" id="btnCadastrar" class="circle" name="cadastrar">Criar conta</button>
                <div class="links">
                    <span>Já possui conta?</span>
                    <p><a href="index.php" id="link">Faça o login</a></p>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
