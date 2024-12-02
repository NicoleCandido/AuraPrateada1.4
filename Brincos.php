<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <title>Brincos - AuraPrateada</title>
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
            <h2>Brincos</h2>
            <div class="produtos-grid">
                <div class="produto">
                    <img src="Visao/imagem/BrincoAncoraCoração.png" alt="Brinco Ancora">
                    <p>Brinco Ancora de coração - R$189,99</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Brinco Ancora', 189.99, 'Visao/imagem/BrincoAncoraCoração.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BrincoCascata.png" alt="Brinco Cascata">
                    <p>Brinco Cascata - R$100</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Brinco Cascata', 100.00, 'Visao/imagem/BrincoCascata.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BrincoDragao.png" alt="Brinco Dragao">
                    <p>Brinco Prata Dragão - R$279,99</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Brinco Dragao', 279.99, 'Visao/imagem/BrincoDragao.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BrincoPrataBasico.png" alt="Brinco Prata">
                    <p>Brinco Prata - R$99,99</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Brinco Prata', 99.99, 'Visao/imagem/BrincoPrataBasico.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BrincoArgolaCoracao.png" alt="Brinco Coracao">
                    <p>Brinco Argola Coração - R$299,99</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Brinco Argola Coração', 299.99, 'Visao/imagem/BrincoArgolaCoracao.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BrincoArgolaRosa.png" alt="Brinco Argola">
                    <p>Brinco Argola Rosa - R$300</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Brinco Argola Rosa', 300, 'Visao/imagem/BrincoArgolaRosa.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/BrincoMickey.png" alt="Brinco Mickey">
                    <p>Brinco Mickey - R$499,99</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Brinco Mickey', 499.99, 'Visao/imagem/BrincoMickey.png')">Adicionar ao Carrinho</button>
                </div>
                <div class="produto">
                    <img src="Visao/imagem/Brincolaço.png" alt="Brinco Laço">
                    <p>Brinco Laço - R$80</p>
                    <button class="btn add-carrinho" onclick="adicionarAoCarrinho('Brinco Laço', 80, 'Visao/imagem/Brincolaço.png')">Adicionar ao Carrinho</button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Loja de Joias. Todos os direitos reservados.</p>
    </footer>
    
    <script src="Modelo/carrinho.js"></script>
    <script src="Modelo/brinco.js"></script> 
    <script src="Modelo/JavaScript.js"></script>
</body>
</html>
