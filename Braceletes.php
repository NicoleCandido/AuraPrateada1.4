<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <title>Braceletes - Aura Prateada</title>
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
            <h2>Braceletes</h2>
            <div class="produtos-grid">
                <div class="produto">
                    <img src="Visao/imagem/BraceleteRaizesdeAmor.png" alt="Bracelete Raizes de Amor">
                    <p>Bracelete Raizes de Amor - R$130</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Raizes de Amor', 130.00, 'Visao/imagem/BraceleteRaizesdeAmor.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteEstrela.png" alt="Bracelete Estrela">
                    <p>Bracelete de Prata Estrela - R$299</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Estrela', 299.00, 'Visao/imagem/BraceleteEstrela.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteLuaAzul.png" alt="Bracelete Lua Azul">
                    <p>Bracelete Lua Azul - R$135.90</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Lua Azul', 135.90, 'Visao/imagem/BraceleteLuaAzul.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteMickey.png" alt="Bracelete Mickey">
                    <p>Bracelete Mickey - R$300</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Mickey', 300.00, 'Visao/imagem/BraceleteMickey.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteBlackIroncomRódioNegro.png" alt="Bracelete Black Iron">
                    <p>Bracelete Iron - R$459.99</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Black Iron', 459.99, 'Visao/imagem/BraceleteBlackIroncomRódioNegro.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteCoracaoNegro.png" alt="Bracelete negro">
                    <p>Bracelete Coração Negro - R$500</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Negro', 500.00, 'Visao/imagem/BraceleteCoracaoNegro.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteCoracaoVermelho.png" alt="Bracelete vermelho">
                    <p>Bracelete Coração Vermelho - R$309.99</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Vermelho', 309.99, 'Visao/imagem/BraceleteCoracaoVermelho.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteCronosSentinela.png" alt="Bracelete Sentinela">
                    <p>Bracelete Sentinela - R$400</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Sentinela', 400.00, 'Visao/imagem/BraceleteCronosSentinela.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteEsferaBrilhante.png" alt="Bracelete Esfera">
                    <p>Bracelete Esfera - R$99.99</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Esfera', 99.99, 'Visao/imagem/BraceleteEsferaBrilhante.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteTrama.png" alt="Bracelete Trama">
                    <p>Bracelete Trama - R$200</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Trama', 200.00, 'Visao/imagem/BraceleteTrama.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteCronos.png" alt="Bracelete Cronos">
                    <p>Bracelete Cronos - R$300</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Cronos', 300.00, 'Visao/imagem/BraceleteCronos.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteHaloMoments.png" alt="Bracelete Halo">
                    <p>Bracelete Halo - R$200</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Halo', 200.00, 'Visao/imagem/BraceleteHaloMoments.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceltePerola.png" alt="Bracelete Perola">
                    <p>Bracelete Perola - R$350</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Perola', 350.00, 'Visao/imagem/BraceltePerola.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteRaizesdeAmor.png" alt="Bracelete Raizes">
                    <p>Bracelete Raizes - R$400</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Raizes', 400.00, 'Visao/imagem/BraceltBraceleteRaizesdeAmorePerola.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BraceleteEstrela.png" alt="Bracelete Estrela">
                    <p>Bracelete Estrela - R$100</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Bracelete Estrela', 100.00, 'Visao/imagem/BraceleteEstrela.png')">Adicionar ao Carrinho</button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Loja de Joias. Todos os direitos reservados.</p>
    </footer>
    
    <script src="Modelo/JavaScript.js"></script>
    <script src="Modelo/Braceletes.js"></script>
    <script src="Modelo/carrinho.js"></script>
</body>
</html>

