<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $conexao = Conexao::conectar();

        // Verifica qual formulário foi enviado
        if ($_POST["acao"] === "login") {
            // Dados de login
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            // Consulta para verificar o usuário no banco
            $sql = "SELECT * FROM cadastro WHERE email = :email";
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":email", $email);
            $stmt->execute();

            // Verifica se encontrou o usuário e se a senha está correta
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($usuario && $senha === $usuario["senha"]) { // Comparação direta da senha
                // Exibir mensagem de sucesso e redirecionar
                echo "<div class='mensagem'>Login bem-sucedido!</div>";
                
                // Redirecionar para a tela principal (index.php)
                header("Location: index.php");
                exit();
            } else {
                echo "<div class='mensagem'>Email ou senha incorretos.</div>";
            }
            

        } elseif ($_POST["acao"] === "cadastro") {
            // Dados de cadastro
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $senha = $_POST["senha"]; // Armazena a senha como está

            // Consulta para inserir o usuário no banco
            $sql = "INSERT INTO cadastro (nome, telefone, email, senha) VALUES (:nome, :telefone, :email, :senha)";
            $stmt = $conexao->prepare($sql);

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);

            if ($stmt->execute()) {
                echo "<div class='mensagem'>Cadastro realizado com sucesso!</div>";
            } else {
                echo "<div class='mensagem'>Erro ao realizar cadastro.</div>";
            }
        }
    } catch (PDOException $e) {
        echo "<div class='mensagem'>Erro: " . $e->getMessage() . "</div>";
    }
} 
?>