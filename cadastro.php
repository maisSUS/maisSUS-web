<?php
// Função para sanitizar entradas
function sanitizar($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Mensagem de erro ou sucesso
$mensagem = '';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitiza e valida os campos
    $nome = isset($_POST['nome']) ? sanitizar($_POST['nome']) : '';
    $cpf = isset($_POST['cpf']) ? sanitizar($_POST['cpf']) : '';
    $cartao_sus = isset($_POST['cartao_sus']) ? sanitizar($_POST['cartao_sus']) : '';
    $telefone = isset($_POST['telefone']) ? sanitizar($_POST['telefone']) : '';
    $email = isset($_POST['email']) ? sanitizar($_POST['email']) : '';
    $senha = isset($_POST['senha']) ? sanitizar($_POST['senha']) : '';
    $confirma_senha = isset($_POST['confirma_senha']) ? sanitizar($_POST['confirma_senha']) : '';

    // Validação básica dos campos obrigatórios
    if (empty($nome) || empty($cpf) || empty($cartao_sus) || empty($telefone) || empty($email) || empty($senha) || empty($confirma_senha)) {
        $mensagem = "Todos os campos marcados com * são obrigatórios.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Valida se o e-mail tem um formato válido
        $mensagem = "Por favor, insira um e-mail válido.";
    } elseif ($senha !== $confirma_senha) {
        // Verifica se as senhas coincidem
        $mensagem = "As senhas não coincidem.";
    } else {
        // Aqui você incluiria a lógica para salvar os dados no banco de dados
        $mensagem = "Cadastro realizado com sucesso!";
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
    <script src="js/cadastrar.js" defer></script>
</head>

<body>
    <!-- Cabeçalho com o logotipo -->
    <p id="logo">+SUS</p>

    <!-- Container principal da página -->
    <div id="container">
        <!-- Botões de acessibilidade -->
        <div class="btnAcessibilidade">
            <button class="decreaseFont">A-</button>
            <button class="increaseFont">A+</button>
            <button class="blackBg">A</button>
            <button class="yellowBg">A</button>
            <button class="dislexia">A</button>
        </div>

        <!-- Título do formulário de cadastro -->
        <h1>Crie uma conta</h1>

        <!-- Formulário de cadastro -->
        <form method="POST" action="">
            <div class="inputs">
                <!-- Lado esquerdo dos campos de entrada -->
                <div id="nav-l">
                    <label for="inNome">Nome completo*</label><br>
                    <p><input type="text" name="nome" placeholder="Nome" id="inNome" class="circle" required></p>

                    <label for="inCpf">CPF *</label><br>
                    <p><input type="text" name="cpf" placeholder="123.456.789-00" id="inCpf" class="circle" required></p>

                    <label for="inSus">Cartão do SUS *</label><br>
                    <p><input type="text" name="cartao_sus" placeholder="123-4567-8912-3456" id="inSus" class="circle" required></p>

                    <label for="inTel">Telefone *</label><br>
                    <p><input type="text" name="telefone" placeholder="(DDD) 12345-6789" id="inTel" class="circle" required></p>
                </div>

                <!-- Lado direito dos campos de entrada -->
                <div id="nav-r">
                    <label for="inEmail">E-mail *</label><br>
                    <p><input type="email" name="email" placeholder="nome@dominio.com" id="inEmail" class="circle" required></p>

                    <label for="inPssw">Senha *</label><br>
                    <p><input type="password" name="senha" placeholder="***********" id="inPssw" class="circle" required></p>

                    <label for="inCfmPssw">Confirmar senha *</label><br>
                    <p><input type="password" name="confirma_senha" placeholder="***********" id="inCfmPssw" class="circle" required></p>
                </div>
            </div>

            <!-- Botões para criar conta e link para retornar ao login -->
            <div id="botoes">
                <button type="submit" id="btnCadastrar" class="circle">Criar conta</button>
                <div class="links">
                    <span>Já possui conta?</span>
                    <p><a href="index.php" id="link">Faça o login</a></p>
                </div>
            </div>

            <!-- Exibição de mensagem de erro ou sucesso -->
            <?php if (!empty($mensagem)): ?>
                <p style="color: red;"><?php echo htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8'); ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>

</html>
