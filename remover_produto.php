<?php
// Incluir o arquivo de conexão
require_once('Modelo/DAO/Conexao.php');

if (isset($_GET['nome'])) {
    try {
        // Conectar ao banco de dados
        $pdo = Conexao::conectar();

        // Obter o ID do produto que será removido
        $nome = $_GET['nome'];

   
        
            // Preparar e executar o comando SQL para remover o produto
            $sql = "DELETE FROM produto WHERE nome = :nome";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);

            // Executar a exclusão
            if ($stmt->execute()) {
                // Redirecionar para a página principal após a remoção
                header('Location: index.php');
                exit;
            } else {
                echo "Erro ao remover o produto.";
            }
        
    } catch (Exception $e) {
        die("Erro: " . $e->getMessage());
    }
} else {
    echo "Erro: Nenhum produto selecionado para remoção.";
}
