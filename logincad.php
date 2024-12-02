<?php
// Iniciar a sessão
session_start();

// Incluir a classe de conexão
include "Modelo/DAO/Conexao.php";

// Verificar qual ação foi realizada
if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];

    if ($acao == 'login') {
        // Processar login
        if (isset($_POST['email']) && isset($_POST['senha'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            // Conectar ao banco de dados
            $pdo = Conexao::conectar();

            // Consultar o banco para buscar o usuário
            $sql = "SELECT * FROM cadastro WHERE email = :email";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verificar se o usuário existe e se a senha está correta
            if ($usuario && password_verify($senha, $usuario['senha'])) {
                // Usuário encontrado, iniciar a sessão
                $_SESSION['usuario_logado'] = $usuario;

                // Redirecionar para a página inicial ou painel
                header("Location: index.php");
                exit();
            } else {
                // Senha ou email incorretos
                echo "<script>alert('Email ou senha incorretos!');</script>";
            }
        }
    } elseif ($acao == 'cadastro') {
        // Processar cadastro
        if (isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['senha'])) {
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);  // Criptografando a senha

            // Conectar ao banco de dados
            $pdo = Conexao::conectar();

            // Inserir o novo usuário no banco de dados
            $sql = "INSERT INTO cadastro (nome, email, senha, telefone) VALUES (:nome, :email, :senha, :telefone)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':telefone', $telefone);

            // Verificar se a inserção foi bem-sucedida
            if ($stmt->execute()) {
                // Redirecionar para a página de login após o cadastro
                echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='logincad.php';</script>";
            } else {
                echo "<script>alert('Erro ao cadastrar, tente novamente!');</script>";
            }
        }
    }
}
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <title>Aura</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="Visao/CSS/style.css">
    <link rel="shortcut icon" href="Visao/imagem/logo.ico" type="image/x-icon">
</head>
<body>
    <div class="img">
        <div class="section">
            <div class="container">
                <div class="row full-height justify-content-center">
                    <div class="col-12 text-center align-self-center py-5">
                        <div class="section pb-5 pt-5 pt-sm-2 text-center">
                            <h6 class="mb-0 pb-3"><span>Entrar </span><span>Cadrastar</span></h6>
                            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                            <label for="reg-log"></label>
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">
                                    <div class="card-front">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">Conecte-se</h4>
                                                <form action="logincad.php" method="POST">
                                                    <input type="hidden" name="acao" value="login">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-style" placeholder="Email" required>
                                                        <i class="input-icon uil uil-at"></i>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="password" name="senha" class="form-style" placeholder="Senha" required>
                                                        <i class="input-icon uil uil-lock-alt"></i>
                                                    </div>
                                                    <button type="submit" class="btn mt-4">Entrar</button>
                                                    <p class="mb-0 mt-4 text-center"><a href="redefiniçao.php" class="link">Esqueceu sua senha?</a></p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-back">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h4 class="mb-3 pb-3">Criar conta</h4>
                                                <form action="logincad.php" method="POST">
                                                    <input type="hidden" name="acao" value="cadastro">
                                                    <div class="form-group">
                                                        <input type="text" name="nome" class="form-style" placeholder="Nome completo" required>
                                                        <i class="input-icon uil uil-user"></i>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="tel" name="telefone" class="form-style" placeholder="Número" required>
                                                        <i class="input-icon uil uil-phone"></i>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="email" name="email" class="form-style" placeholder="Email" required>
                                                        <i class="input-icon uil uil-at"></i>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="password" name="senha" class="form-style" placeholder="Senha" required>
                                                        <i class="input-icon uil uil-lock-alt"></i>
                                                    </div>
                                                    <button type="submit" class="btn mt-4">Registrar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
