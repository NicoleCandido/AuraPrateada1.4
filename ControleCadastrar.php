<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Conexão com o banco de dados
        $conexao = Conexao::conectar();

        // Verifica qual formulário foi enviado
        if ($_POST["acao"] === "cadastrar_produto") {
            // Dados do produto
            $nome = $_POST["nome"];
            $preco = $_POST["preco"];

            // Verifica se a imagem foi enviada
            if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
                $imagemTmp = $_FILES['imagem']['tmp_name'];
                $imagemNome = $_FILES['imagem']['name'];
                $imagemExt = strtolower(pathinfo($imagemNome, PATHINFO_EXTENSION));

                // Verifica se a extensão da imagem é permitida
                $extensoesPermitidas = ['jpg', 'jpeg', 'png'];
                if (!in_array($imagemExt, $extensoesPermitidas)) {
                    die("<div class='mensagem'>Erro: Apenas arquivos JPG, JPEG e PNG são permitidos.</div>");
                }

                // Define o nome final do arquivo de imagem
                $imagemNovoNome = uniqid('produto_', true) . '.' . $imagemExt;
                $caminhoImagem = 'Visao/imagem/produtos/' . $imagemNovoNome;

                // Move a imagem para o diretório desejado
                if (!move_uploaded_file($imagemTmp, $caminhoImagem)) {
                    die("<div class='mensagem'>Erro ao fazer upload da imagem.</div>");
                }
            } else {
                // Caso a imagem não seja enviada
                $caminhoImagem = 'Visao/imagem/produtos/default.jpg'; // Imagem padrão, se necessário
            }

            // Consulta para inserir o produto no banco
            $sql = "INSERT INTO produtos (nome, preco, imagem) VALUES (:nome, :preco, :imagem)";
            $stmt = $conexao->prepare($sql);

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':preco', $preco);
            $stmt->bindParam(':imagem', $caminhoImagem);

            // Executa a inserção
            if ($stmt->execute()) {
                echo "<div class='mensagem'>Produto cadastrado com sucesso!</div>";
            } else {
                echo "<div class='mensagem'>Erro ao cadastrar o produto.</div>";
            }
        }
    } catch (PDOException $e) {
        echo "<div class='mensagem'>Erro: " . $e->getMessage() . "</div>";
    }
}
?>
