<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <script src="js/alterarDados.js" defer></script>
    <script src="js/excluirConta.js" defer></script> <!-- Link para o script de excluir conta -->
    <link rel="icon" href="img/serra.png">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/367278d2a4.css" crossorigin="anonymous">
</head>

<body>
    <?php
        include 'header.php'; // Inclui o cabeçalho
        include 'config.php';  // Inclui a configuração de conexão com o banco de dados

        // Verifique se o usuário está logado e se o nome do usuário está na sessão
        session_start();
        if (!isset($_SESSION['usuario'])) {
            header('Location: login.php'); // Redireciona para a página de login caso o usuário não esteja logado
            exit();
        }

        // Obtenha o nome do usuário da sessão
        $nomeUsuario = $_SESSION['usuario'];

        // Consulta para pegar os dados do usuário com base no nome
        $sql = "SELECT * FROM LOGIN_USUARIO WHERE nomeUsuario = :usuario";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':usuario', $nomeUsuario, PDO::PARAM_STR);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC); // Obtém os dados do usuário

        // Verifique se o usuário existe
        if (!$usuario) {
            echo "Usuário não encontrado.";
            exit();
        }

        // Processa a exclusão da conta
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['excluir'])) {
            // Excluir os dados do usuário
            $deleteSql = "DELETE FROM LOGIN_USUARIO WHERE nomeUsuario = :usuario";
            $deleteStmt = $pdo->prepare($deleteSql);
            $deleteStmt->bindParam(':usuario', $nomeUsuario);

            if ($deleteStmt->execute()) {
                // Destrói a sessão e redireciona para a página de login
                session_destroy();
                header('Location: index.php');
                exit();
            } else {
                echo "<script>alert('Erro ao excluir a conta. Tente novamente.');</script>";
            }
        }
    ?>

    <div class="container">
        <div id="nav-r">
            <h1 id="h10">Perfil</h1>
            <div class="content">
                <h1 id="h11">Dados Pessoais</h1>
                <div class="data">
                    <div class="data-left">
                        <p id="nav-subtitles">Nome Completo</p>
                        <p id="nav-txt"><?php echo htmlspecialchars($usuario['nomeUsuario']); ?></p>
                        <p id="nav-subtitles" class="cpf">CPF</p>
                        <p id="nav-txt"><?php echo htmlspecialchars($usuario['cpfUsuario']); ?></p>
                        <p id="nav-subtitles">Cartão Nacional de Saúde</p>
                        <p id="nav-txt"><?php echo htmlspecialchars($usuario['cartaoSus']); ?></p>
                    </div>
                    <div class="data-right">
                        <p id="nav-subtitles">E-mail</p>
                        <p id="nav-txt"><?php echo htmlspecialchars($usuario['email']); ?></p>
                        <p id="nav-subtitles">Telefone</p>
                        <p id="nav-txt"><?php echo htmlspecialchars($usuario['telUsuario']); ?></p>
                        <div id="nav-button">
                            <button type="button" class="red-button" id="excluirDados">Excluir conta</button>
                            <button type="button" class="green-button" id="altDados">Alterar dados</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
