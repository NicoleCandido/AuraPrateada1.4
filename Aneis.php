<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <title>Anéis - AuraPrateadaS</title>
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
            <h2>Anéis</h2>
            <div class="produtos-grid">
            <div class="produto">
                <img src="Visao/imagem/AnelPrataCorações.png" alt="Anel Prata Corações">
                <p>Anel Prata Corações - R$150</p>
                <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Anel Prata Corações', 150.00, 'Visao/imagem/AnelPrataCorações.png')">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="Visao/imagem/AnelPrataCruzadas.png" alt="Anel Prata Cruzadas">
                <p>Anel Pratas Cruzadas - R$299,99</p>
                <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Anel Prata Cruzada', 299.99, 'Visao/imagem/AnelPrataCruzadas.png')">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="Visao/imagem/AnelPrataDiabo.png" alt="Anel Prata Diabo">
                <p>Anel Prata Diabo - R$190</p>
                <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Anel Prata Diabo', 190.00, 'Visao/imagem/AnelPrataDiabo.png')">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="Visao/imagem/AnelPrataDiamantes.png" alt="Anel Prata Diamantes">
                <p>Anel Diamantes - R$279,99</p>
                <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Anel Prata Diamante', 279.99, 'Visao/imagem/AnelPrataDiamantes.png')">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="Visao/imagem/AnelDiamante Azul.png" alt="Anel Diamante Azul">
                <p>Anel Diamante Azul - R$550</p>
                <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Anel Diamante Azul', 550.00, 'Visao/imagem/AnelDiamante Azul.png')">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="Visao/imagem/AnelChevron.png" alt="Anel Chevron">
                <p>Anel Diamantes - R$400</p>
                <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Anel Chevron', 400, 'Visao/imagem/AnelChevron.png')">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="Visao/imagem/AnelCoroa.png" alt="Anel Coroa">
                <p>Anel Diamantes - R$99.99</p>
                <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Anel Coroa', 99.99, 'Visao/imagem/AnelCoroa.png')">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="Visao/imagem/AnelDiamanteFlor.png" alt="Anel Diamante de Flor">
                <p>Anel Diamante Flor - R$450</p>
                <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Anel Diamante Flor', 450, 'Visao/imagem/AnelDiamanteFlor.png')">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="Visao/imagem/AnelDiamante.png" alt="Anel Diamante">
                <p>Anel Diamante - R$280</p>
                <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Anel Prata Diamante', 280, 'Visao/imagem/AnelDiamante.png')">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="Visao/imagem/AnelCruzada.png" alt="Anel Cruzado">
                <p>Anel Diamante - R$579.90</p>
                <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Anel Cruzado', 579.90, 'Visao/imagem/AnelCruzada.png')">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="Visao/imagem/AnelLinhaFina.png" alt="Anel Fino">
                <p>Anel Linha Fina - R$99.99</p>
                <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Anel Linha Fina', 99.99, 'Visao/imagem/AnelLinhaFina.png')">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="Visao/imagem/AnelMinnie.png" alt="Anel Minnie">
                <p>Anel Minnie - R$199.99</p>
                <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Anel Minnie', 199.99, 'Visao/imagem/AnelMinnie.png')">Adicionar ao Carrinho</button>
            </div>
            </div>
        </section>
    </main>
 <footer>
        <p>&copy; 2024 Loja de Joias. Todos os direitos reservados.</p>
    </footer>
    <script src="Modelo/carrinho.js"></script>
    <script src="Modelo/JavaScript.js"></script>
    <script src="Modelo/aneis.js"></script>
</body>
</html>
