<?php
require_once 'Conexao.php';
class Usuario {

    // Método para verificar login
    public static function verificarLogin($email, $senha) {
        try {
            $conexao = Conexao::conectar();
            $sql = "SELECT * FROM cadastro WHERE email = :email";
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verifica se a senha bate
            if ($usuario && password_verify($senha, $usuario['senha'])) {
                return $usuario;
            }
            return false;
        } catch (PDOException $e) {
            die("Erro: " . $e->getMessage());
        }
    }

}
?>
