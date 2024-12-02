<?php
// Incluir o arquivo de conexão
require_once('Modelo/DAO/Conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Conexão com o banco de dados
        $pdo = Conexao::conectar();

        // Receber os dados do formulário
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];

        // Verificar se a imagem foi enviada
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
            $imagemTmp = $_FILES['imagem']['tmp_name'];
            $imagemNome = $_FILES['imagem']['name'];
            $imagemExt = strtolower(pathinfo($imagemNome, PATHINFO_EXTENSION));

            // Extensões permitidas
            $extensoesPermitidas = ['jpg', 'jpeg', 'png'];
            if (!in_array($imagemExt, $extensoesPermitidas)) {
                die("Erro: Apenas arquivos JPG, JPEG e PNG são permitidos.");
            }

            // Definir o caminho para salvar a imagem
            $imagemNovoNome = uniqid('produto_', true) . '.' . $imagemExt;
            $caminhoImagem = 'imagens/produtos/' . $imagemNovoNome;

            // Criar o diretório se não existir
            if (!is_dir('imagens/produtos')) {
                mkdir('imagens/produtos', 0755, true);
            }

            // Mover a imagem
            if (!move_uploaded_file($imagemTmp, $caminhoImagem)) {
                die("Erro ao fazer upload da imagem.");
            }
        } else {
            die("Erro no envio da imagem. Código do erro: " . $_FILES['imagem']['error']);
        }

        // Inserir no banco de dados
        $sql = "INSERT INTO produto (nome, preco, imagem) VALUES (:nome, :preco, :imagem)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':imagem', $caminhoImagem);

        if ($stmt->execute()) {
            // Redirecionar para a página principal após o sucesso
            header('Location: index.php');
            exit;
        } else {
            echo "Erro ao cadastrar o produto.";
        }
    } catch (Exception $e) {
        die("Erro: " . $e->getMessage());
    }
} else {
    echo "Erro: Formulário não enviado corretamente.";
}
