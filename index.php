<?php
// Iniciar a sessão no início do arquivo
session_start();

// Incluir o arquivo de conexão
require_once('Modelo/DAO/Conexao.php');

// Conectar ao banco de dados
$pdo = Conexao::conectar();

// Consultar todos os produtos cadastrados
$sql = "SELECT * FROM produto";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Buscar todos os produtos
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="Visao/CSS/estilo.css">
    <link rel="shortcut icon" href="Visao/imagem/logo.ico" type="image/x-icon">
    <title>Aura Prateada</title>
</head>

<body>

    <!-- Carregar jQuery completo -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Carregar Popper.js (necessário para o Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <!-- Carregar o JS do Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <header>
        <div class="logo">
            <h1>Aura Prateada</h1>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Braceletes.php">Braceletes</a></li>
                <li><a href="Aneis.php">Anéis</a></li>
                <li><a href="Colares.php">Colares</a></li>
                <li><a href="Brincos.php">Brincos</a></li>
            </ul>
        </nav>
        <div class="auth-cart-container">
            <div class="auth-buttons">
                <?php if (isset($_SESSION['usuario_logado'])): ?>
                    <!-- Dropdown para usuário logado -->
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" style="color: inherit; text-decoration: none;">
                            <span
                                style="color: inherit;"><?php echo htmlspecialchars($_SESSION['usuario_logado']['nome']); ?></span>
                            <i class="bi bi-chevron-down" style="margin-left: 5px;"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                            <a href="logout.php" class="dropdown-item">Sair</a>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Link de login para usuários não logados -->
                    <a href="logincad.php" class="link">Login/Cadastro</a>
                <?php endif; ?>
                <script>
                    // Espera o DOM carregar completamente
                    $(document).ready(function () {
                        // Quando o usuário clicar no nome (elemento com id "dropdownMenu")
                        $('#dropdownMenu').click(function (event) {
                            // Impede que o clique feche o menu imediatamente
                            event.stopPropagation();

                            // Alterna o 'dropdown-menu' (mostrar ou esconder)
                            $(this).next('.dropdown-menu').toggle();
                        });

                        // Fecha o dropdown se o usuário clicar em qualquer outro lugar na página
                        $(document).click(function (event) {
                            if (!$(event.target).closest('.dropdown').length) {
                                $('.dropdown-menu').hide();
                            }
                        });
                    });
                </script>

            </div>
            <div class="cart">
                <a href="carrinho.php" class="cart-link">
                    <i class="uil uil-shopping-cart"></i>
                    <span class="cart-count">0</span>
                </a>
            </div>
        </div>
    </header>

    <main>
        <section class="promo">
            <h2>GANHE UM BRACELETE GRÁTIS</h2>
            <p>Nas suas compras a partir de R$899,00</p>
            <a href="#" class="btn">Compre Agora</a>
        </section>

        <section class="produtos">
            <h2>Produtos em Destaque</h2>
            <div class="produtos-grid">
                <?php
                // Exibir os produtos cadastrados
                foreach ($produtos as $produto) {
                    echo '<div class="produto">';
                    echo '<img src="' . $produto['imagem'] . '" alt="' . $produto['nome'] . '">';
                    echo '<p>' . $produto['nome'] . ' - R$' . number_format($produto['preco'], 2, ',', '.') . '</p>';
                    echo '<button class="btn add-carrinho" onclick="adicionarAoCarrinho(\'' . $produto['nome'] . '\', ' . $produto['preco'] . ', \'' . $produto['imagem'] . '\')">Adicionar ao Carrinho</button>';
                    echo '<a href="remover_produto.php?nome=' . $produto['nome'] . '" class="btn btn-danger">Remover</a>';
                    echo '</div>';
                }
                ?>

                <div class="produto">
                    <img src="Visao/imagem/Bracelete1.png" alt="Bracelete de prata">
                    <p>Bracelete de Prata - R$299</p>
                    <button class="btn add-carrinho"
                        onclick="adicionarAoCarrinho('Bracelete de Prata', 299, 'Visao/imagem/Bracelete1.png')">Adicionar
                        ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/Anel1.png" alt="Anel de prata">
                    <p>Anel de Prata - R$199</p>
                    <button class="btn add-carrinho"
                        onclick="adicionarAoCarrinho('Anel de Prata', 199, 'Visao/imagem/Anel1.png')">Adicionar ao
                        Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/Colar1.png" alt="Colar de prata">
                    <p>Colar de Prata - R$399</p>
                    <button class="btn add-carrinho"
                        onclick="adicionarAoCarrinho('Colar de Prata', 399, 'Visao/imagem/Colar1.png')">Adicionar ao
                        Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/Brinco1.png" alt="Brincos de prata">
                    <p>Brincos de Prata - R$149</p>
                    <button class="btn add-carrinho"
                        onclick="adicionarAoCarrinho('Brincos de Prata', 149, 'Visao/imagem/Brinco1.png')">Adicionar ao
                        Carrinho</button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Loja de Joias. Todos os direitos reservados.</p>
    </footer>

    <script src="Modelo/JavaScript.js"></script>
    <script src="Modelo/carrinho.js"></script>

</body>

</html>