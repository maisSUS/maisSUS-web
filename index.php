<?php
    // Inicia a sessão
    session_start();
                            
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Captura o CPF e a senha enviados pelo formulário, com fallback para strings vazias
        
        if (isset($_POST['login'])):
            $cpf = $_POST['cpf']; 
            $senha = $_POST['senha']; 

            // Verifica as credenciais (use credenciais fictícias para demonstração)
            if ($cpf === "123" && $senha === "123") {
                // Armazena o nome na sessão (substituir "Usuário Teste" por uma lógica real)
                $_SESSION['usuario'] = "Chicoiins";

                // Redireciona para a página principal
                header('Location: pagPrincipal.php');
                exit;
            } else {
                // Exibe uma mensagem de erro caso as credenciais estejam erradas
                $erro = "CPF ou senha incorretos!";
            }
        endif;
    }
?>
    

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="icon" href="img/serra.png">
        <link rel="stylesheet" href="css/login.css">
        <script src="js/logar.js" defer></script>
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
                        <div id="txtUser" class="navtxt-text">
                            <label for="inID">CPF</label>
                        </div>
                        <div id="inUser" class="navtxt-text">
                            <input type="text" id="inID" class="circle" name="cpf" placeholder="123.456.789-00">
                        </div>
                        <div id="txtPassword" class="navtxt-text">
                            <label for="inSenha">Senha</label>
                        </div>
                        <div id="inPassword" class="navtxt-text">
                            <input type="password" id="inSenha" class="circle" name="senha">
                            <!-- Ícone de olho para mostrar/esconder a senha -->
                            <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho" title="mostrar senha" alt="imagem clicável de um olho em preto e branco para mostrar a senha" tabindex="0">
                        </div>
                        <div id="btnEntrar" class="navtxt-button">
                            <button type="submit" name="login" class="green-button">Entrar</button>
                        </div>
                        <?php if(isset($erro)): ?>
                        <p style="color: red;"><?php echo $erro; ?></p>
                        <?php endif; ?>
                        <div class="navtxt-link"><a href="cadastro.php">Não possui conta? <strong>Crie uma aqui</strong></a></div>
                    </form>
                </div>
            </div>
        </header>
    </body>

</html>
