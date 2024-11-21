<?php
// Inicia a sessão
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura o CPF e a senha enviados pelo formulário, com fallback para strings vazias
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : ''; 
    $senha = isset($_POST['senha']) ? $_POST['senha'] : ''; 

    // Verifica as credenciais (use credenciais fictícias para demonstração)
    if ($cpf === "" && $senha === "") {
        // Armazena o nome na sessão (substituir "Usuário Teste" por uma lógica real)
        $_SESSION['usuario'] = "Usuário Teste";

        // Redireciona para a página principal
        header('Location: pagPrincipal.php');
        exit;
    } else {
        // Exibe uma mensagem de erro caso as credenciais estejam erradas
        $erro = "CPF ou senha incorretos!";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css">
    </head>

    <body>
        <header>
            <div id="container">
                <div id="nav-bcg"></div>
                <div id="nav-txt">
                    <div id="logo">
                        <p class="logo">+SUS</p>
                    </div>
                    <div id="title">
                        <h1>Faça seu login</h1>
                    </div>
                    <!-- Formulário de login -->
                    <form method="POST" action="">
                        <div id="txtUser" class="navtxt-text"><label for="inID">CPF</label></div>
                        <div id="inUser" class="navtxt-text"><input type="text" id="inID" class="circle" name="cpf" placeholder="123.456.789-00"></div>
                        <div id="txtPassword" class="navtxt-text"><label for="inSenha">Senha</label></div>
                        <div id="inPassword" class="navtxt-text">
                            <input type="password" id="inSenha" class="circle" name="senha">
                        </div>
                        <div id="btnEntrar" class="navtxt-button">
                            <input type="submit" value="Entrar" class="green-button">
                        </div>
                        <?php if (isset($erro)): ?>
                            <p style="color: red;"><?php echo $erro; ?></p>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </header>
    </body>

</html>
