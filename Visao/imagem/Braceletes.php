<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <title>Anéis - Aura Prateada S</title>
    <link rel="stylesheet" href="Visao/CSS/estilo.css">
    <link rel="shortcut icon" href="Visao/imagem/logo.ico" type="image/x-icon">
</head>
<body>
    
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
                    <a href="logincad.php" class="link">Login/Cadastro</a>
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
        <section class="produtos">
            <h2>Braceletes</h2>
            <div class="produtos-grid">
                <div class="produto">
                    <img src="Visao/imagem/BraceleteRaizesdeAmor.png" alt="Bracelete Raizes de Amor">
                    <p>Bracelete Raizes de Amor - R$130</p>
                    <!-- Atualizado: chamada direta da função com parâmetros -->
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Raizes de Amor', 130.00)">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteEstrela.png" alt="Bracelete Estrela">
                    <p>Bracelete de Prata Estrela - R$299</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Estrela', 299.00)">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteLuaAzul.png" alt="Bracelete Lua Azul">
                    <p>Bracelete Lua Azul - R$135.90</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Lua Azul', 135.90)">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteMickey.png" alt="Bracelete Mickey">
                    <p>Bracelete Mickey - R$300</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Mickey', 300.00)">Adicionar ao Carrinho</button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Loja de Joias. Todos os direitos reservados.</p>
    </footer>

    <!-- Certifique-se de que o script carrinho.js está corretamente incluído -->
    <script src="Modelo/JavaScript.js"></script>
    <script src="Modelo/Braceletes.js"></script>
    <script src="Modelo/carrinho.js"></script>
</body>
</html>

