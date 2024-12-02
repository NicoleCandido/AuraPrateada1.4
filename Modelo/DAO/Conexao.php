<?php
class Conexao {
    // Método para criar a conexão com o banco de dados
    public static function conectar() {
        // Defina as configurações do banco de dados
        $host = 'localhost';  // Endereço do servidor MySQL
        $db = 'auraprateada';         // Nome do banco de dados
        $usuario = 'root';    // Usuário do banco de dados
        $senha = '';          // Senha do banco de dados (padrão no XAMPP é vazio)

        try {
            // Estabelecendo a conexão usando PDO
            $pdo = new PDO("mysql:host=$host;dbname=$db", $usuario, $senha);
            // Definindo o modo de erro do PDO para exceção
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            // Se houver erro, exibe a mensagem
            die("Erro ao conectar com o banco de dados: " . $e->getMessage());
        }
    }
}
?>
