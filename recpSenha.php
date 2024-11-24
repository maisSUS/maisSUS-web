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
    <?php
    // Função para sanitizar entradas
    function sanitizar($data) {
        return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
    }

    // Mensagem de erro ou sucesso
    $mensagem = '';

    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sanitiza o e-mail
        $email = isset($_POST['email']) ? sanitizar($_POST['email']) : '';

        // Valida se o e-mail está no formato correto
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mensagem = "Por favor, insira um e-mail válido.";
        } else {
            $mensagem = "Se este e-mail estiver cadastrado, um link de recuperação será enviado.";
        }
    }
    ?>

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
            
            <!-- Formulário para recuperar senha -->
            <form method="POST" action="">
                <!-- Texto "E-mail" -->
                <div id="e-mailTxt" class="navtxt-text">
                    <label for="inEmail">E-mail</label>
                </div>
                
                <!-- Campo de entrada para o e-mail -->
                <div id="e-mail">
                    <input 
                        type="email" 
                        placeholder="nome@dominio.com" 
                        id="inEmail" 
                        name="email" 
                        class="circle" 
                        required>
                </div>
                
                <!-- Botão para recuperar senha -->
                <div id="btnRcp">
                    <input type="submit" value="Recuperar" class="green-button" id="btRecuperar">
                </div>
                
                <!-- Mensagem de feedback -->
                <?php if (!empty($mensagem)): ?>
                    <p style="color: red;"><?php echo htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endif; ?>
            </form>
            
            <!-- Link para voltar para a página de login -->
            <div id="linkLogin">
                <a href="index.php"><span>← Voltar para login</span></a>
            </div>
        </div>
    </div>
</body>
</html>
