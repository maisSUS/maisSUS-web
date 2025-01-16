<?php 
/*// Configurações do banco de dados
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'usbw');
define('DB_NAME', 'maissus');

header('Content-Type: application/json');

try {
    // Conectando ao banco de dados com PDO
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtém os dados enviados pelo frontend
    $data = json_decode(file_get_contents('php://input'), true);
    $id = isset($data['id']) ? $data['id'] : null; // ID do agendamento a ser excluído

    // Valida o ID
    if (!$id) {
        echo json_encode(['success' => false, 'message' => 'ID não fornecido.']);
        exit;
    }

    // Query para excluir o registro no banco de dados
    $stmt = $pdo->prepare('DELETE FROM consultas WHERE id = :id');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Verifica se algum registro foi excluído
    if ($stmt->rowCount() > 0) {
        echo json_encode(['success' => true, 'message' => 'Item excluído com sucesso.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Nenhum registro encontrado para o ID fornecido.']);
    }
} catch (Exception $e) {
    // Retorna um erro em caso de falha
    echo json_encode(['success' => false, 'message' => 'Erro no servidor: ' . $e->getMessage()]);
}
    */
// Configurações do banco de dados
$host = 'localhost'; // Endereço do servidor do banco
$dbname = 'maissus'; // Nome do banco de dados
$username = 'root'; // Usuário do banco de dados
$password = 'usbw'; // Senha do banco de dados

try {
    // Criar a conexão usando PDOa
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password, [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
    ]);

    // Configurar o PDO para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Conexão bem-sucedida!"; // Você pode remover isso para evitar exibir mensagens de sucesso no frontend
} catch (PDOException $e) {
    // Tratar erros de conexão
    echo "Erro ao conectar: " . $e->getMessage();
}
?>

