<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'usbw');
define('DB_NAME', 'maissus');

try {
    // Conectando ao banco de dados com PDO
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtém os dados enviados pelo frontend
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id']; // ID do agendamento a ser excluído

    // Valida o ID
    if (!$id) {
        echo json_encode(['success' => false, 'message' => 'ID não fornecido.']);
        exit;
    }

    // Query para excluir o registro no banco de dados
    $stmt = $pdo->prepare('DELETE FROM consultas WHERE id = :id');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Retorna uma resposta de sucesso
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    // Retorna um erro em caso de falha
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}

?>