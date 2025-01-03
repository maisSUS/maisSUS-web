<?php 
// Inclui o arquivo de configuração, que contém as constantes para conexão com o banco de dados
require_once 'config.php';

class Database {
    // Propriedade estática para armazenar a única instância da conexão com o banco de dados
    private static $instance;

    /**
     * Método responsável por retornar a instância única da conexão com o banco de dados.
     * Utiliza o padrão Singleton para garantir que apenas uma conexão seja criada durante a execução.
     * 
     * @return PDO A instância da conexão com o banco de dados.
     */
    public static function getInstance() {
        // Verifica se a instância já foi criada
        if (!isset(self::$instance)) {
            try {
                // Cria a conexão com o banco de dados utilizando PDO
                self::$instance = new PDO(
                    'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, // String de conexão com o banco de dados
                    DB_USER, // Nome de usuário do banco
                    DB_PASS  // Senha do banco
                );
                // Configura o PDO para lançar exceções em caso de erro
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // Configura o modo de retorno das consultas como objetos (PDO::FETCH_OBJ)
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                // Exibe a mensagem de erro caso a conexão falhe
                echo $e->getMessage();
            }
        }
        // Retorna a instância única da conexão
        return self::$instance;
    }

    /**
     * Método responsável por preparar uma consulta SQL para execução.
     * 
     * @param string $sql A consulta SQL a ser preparada.
     * @return PDOStatement A consulta preparada, pronta para ser executada.
     */
    public static function prepare($sql) {
        // Chama o método getInstance() para obter a conexão com o banco e prepara a consulta
        return self::getInstance()->prepare($sql);
    }
}
?>
