<?php
    // Inicia a sessão
    session_start();

    // Destroi todas as variáveis da sessão
    session_destroy();

    // Redireciona para a página inicial (ou de login)
    header('Location: index.php');
    exit;
?>
