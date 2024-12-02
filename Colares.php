<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <title>Colares - AuraPrateada</title>
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
                <!-- <div class="auth-buttons">
                    <a href="logincad.php" class="link">Login/Cadastro</a>
                </div> -->
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
            <h2>Colares</h2>
            <div class="produtos-grid">
                <div class="produto">
                    <img src="Visao/imagem/ColarLuaArvoredaVida.png" alt="Colar Lua Arvore">
                    <p>Colar Lua e Árvore da vida - R$255,90</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Colar Lua Arvore', 255.90, 'Visao/imagem/ColarLuaArvoredaVida.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/ColarMiniCoracoes.png" alt="Corrente Mini">
                    <p>Corrente Mini Corações - R$100</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Corrente Mini', 100.00, 'Visao/imagem/ColarMiniCoracoes.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/ColarPrataDoisCoracoes.png" alt="Colar Prata">
                    <p>Colar Dois Corações - R$250</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Colar Prata', 250.00, 'Visao/imagem/ColarPrataDoisCoracoes.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/ColarPrataPingente.png" alt="Colar Prata Pigente">
                    <p>Colar Prata Pingente- R$279,99</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Colar Prata Pingente', 279.99, 'Visao/imagem/ColarPrataPingente.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/Colar Com Pendente Circulo E Aglomerado Riqueza Botanica Brilhante .png" alt="Colar Pendente">
                    <p>Colar Pendentes- R$300</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Colar Pendente', 300, 'Visao/imagem/Colar Com Pendente Circulo E Aglomerado Riqueza Botanica Brilhante .png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/Colar de Prata Coração Vermelho Brilhante .png" alt="Colar Vermelho">
                    <p>Colar Coração Vermelho- R$550</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Colar Coração Vermelho', 550, 'Visao/imagem/Colar de Prata Coração Vermelho Brilhante .png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="" alt="Colar Circular">
                    <p>Colar Circular- R$279,99</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Colar Circular', 279.99, 'Visao/imagem/Colar de Prata Círculo Logo e Pavé .png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/colar de prata pendente.png" alt="Colar Prata Pendente">
                    <p>Colar Prata Pendente- R$229,99</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Colar Pendente', 229.99, 'Visao/imagem/colar de prata pendente.png')">Adicionar ao Carrinho</button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Loja de Joias. Todos os direitos reservados.</p>
    </footer>
    
    <script src="Modelo/carrinho.js"></script>
    <script src="Modelo/colar.js"></script>
    <script src="Modelo/JavaScript.js"></script>
</body>
</html>
