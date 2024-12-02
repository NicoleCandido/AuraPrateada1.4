// Recuperar o carrinho do localStorage ou inicializar vazio
let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

// Salvar o carrinho no localStorage
function salvarCarrinho() {
    localStorage.setItem("carrinho", JSON.stringify(carrinho));
    updateCartCount(); // Atualizar a contagem do carrinho
}

// Atualizar a contagem de itens no carrinho
function updateCartCount() {
    const cartCount = document.querySelector(".cart-count");
    const totalItens = carrinho.reduce((total, item) => total + item.quantidade, 0);
    if (cartCount) cartCount.textContent = totalItens;
}

// Adicionar produto ao carrinho
function adicionarAoCarrinho(nome, preco, imagem) {
    if (!nome || !preco || !imagem) {
        console.error("Erro ao adicionar produto ao carrinho: Parâmetros inválidos.", { nome, preco, imagem });
        alert("Erro: Produto inválido. Não foi possível adicioná-lo ao carrinho.");
        return;
    }

    const itemExistente = carrinho.find(item => item.nome === nome);

    if (itemExistente) {
        itemExistente.quantidade++;
    } else {
        carrinho.push({ nome, preco: parseFloat(preco), imagem, quantidade: 1 });
    }

    salvarCarrinho();
    alert("Produto adicionado ao carrinho!");
    atualizarCarrinhoVisual();
}

// Remover item do carrinho
function removerItem(nome) {
    carrinho = carrinho.filter(item => item.nome !== nome);
    salvarCarrinho();
    atualizarCarrinhoVisual();
}

// Alterar a quantidade de um produto
function alterarQuantidade(nome, delta) {
    const item = carrinho.find(item => item.nome === nome);
    if (item) {
        item.quantidade += delta;
        if (item.quantidade <= 0) {
            removerItem(nome); // Remove o item se a quantidade for zero ou negativa
        } else {
            salvarCarrinho();
        }
    }
    atualizarCarrinhoVisual();
}

// Atualizar a visualização do carrinho
function atualizarCarrinhoVisual() {
    const itensCarrinho = document.getElementById("itens-carrinho");
    const totalElement = document.getElementById("total");
    const promocaoElement = document.getElementById("promocao");

    if (!itensCarrinho || !totalElement) return;

    itensCarrinho.innerHTML = ""; // Limpa o carrinho visual
    let total = 0;

    carrinho.forEach(item => {
        // Verificar se o item tem todos os dados válidos
        if (!item.nome || !item.preco || !item.imagem || isNaN(item.quantidade)) {
            console.warn("Produto inválido encontrado no carrinho e será ignorado.", item);
            return; // Ignorar produtos inválidos
        }

        const itemElement = document.createElement("div");
        itemElement.classList.add("item-carrinho");

        const precoItem = item.nome === "Bracelete" ? "Brinde" : `R$ ${(item.preco * item.quantidade).toFixed(2)}`;
        total += item.nome !== "Bracelete" ? item.preco * item.quantidade : 0;

        itemElement.innerHTML = `
            <img src="${item.imagem}" alt="${item.nome}" class="imagem-produto-carrinho">
            <div>
                <p>${item.nome}</p>
                <p>Quantidade: 
                    <button onclick="alterarQuantidade('${item.nome}', -1)">-</button>
                    ${item.quantidade}
                    <button onclick="alterarQuantidade('${item.nome}', 1)">+</button>
                </p>
                <p>Preço: ${precoItem}</p>
            </div>
        `;

        itensCarrinho.appendChild(itemElement);
    });

    totalElement.textContent = total.toFixed(2);

    // Promoção do bracelete
    if (total >= 899 && !carrinho.find(item => item.nome === "Bracelete")) {
        carrinho.push({
            nome: "Bracelete",
            preco: 0,
            imagem: "imagens/bracelete.jpg",
            quantidade: 1,
        });
        salvarCarrinho();
    }

    promocaoElement.textContent = total >= 899
        ? "🎉 GANHE UM BRACELETE GRÁTIS! 🎉 Nas suas compras a partir de R$899,00"
        : "";
}

// Configurar eventos e inicializar o carrinho
document.addEventListener("DOMContentLoaded", () => {
    updateCartCount();
    atualizarCarrinhoVisual();
});
