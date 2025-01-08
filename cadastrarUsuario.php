<?php
session_start();
if (!isset($_SESSION['dados_form'])) {
    die('Acesso inválido!');
}

$dados = $_SESSION['dados_form'];
unset($_SESSION['dados_form']); // Limpa a sessão para evitar reenvios

// Conexão e inserção no banco
require_once 'database.php';
try{
    $sql = "INSERT INTO LOGIN_USUARIO (nome, cpf, cartaoSus, telefone, email, senha) VALUES (:nome, :cpf, :cartaoSus, :telefone, :email, :senha)";
    $stmt = Database::prepare($sql);
    $stmt->bindParam(':nome', $dados['nome']);
    $stmt->bindParam(':cpf', $dados['cpf']);
    $stmt->bindParam(':cartaoSus', $cartaoSus);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':email', $email);
    $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);
    $stmt->bindParam(':senha', $hashedSenha);
    $stmt->execute();

    $idUsuario = Database::getInstance()->lastInsertId();
    $_SESSION['idUsuario'] = $idUsuario;
    echo "Usuário cadastrado com sucesso!";
} catch(PDOException $e) {
    echo "Erro ao cadastrar o usuário: " . $e->getMessage();
}

?>
