// Seu código original do carrinho permanece aqui
let carrinho = [];

// Função para adicionar itens ao carrinho
function adicionarAoCarrinho(produto) {
    const itemExistente = carrinho.find(item => item.nome === produto.nome);

    if (itemExistente) {
        itemExistente.quantidade += 1;
    } else {
        carrinho.push({ ...produto, quantidade: 1 });
    }

    salvarCarrinho();
}

// Função para remover itens do carrinho
function removerDoCarrinho(nomeProduto) {
    carrinho = carrinho.filter(item => item.nome !== nomeProduto);
    salvarCarrinho();
}

// Função para salvar o carrinho no armazenamento local
function salvarCarrinho() {
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
}

// Função para carregar o carrinho do armazenamento local
function carregarCarrinho() {
    const carrinhoSalvo = localStorage.getItem('carrinho');
    if (carrinhoSalvo) {
        carrinho = JSON.parse(carrinhoSalvo);
    }
}

// Função para calcular o total do carrinho
function calcularTotal() {
    return carrinho.reduce((total, item) => total + item.preco * item.quantidade, 0).toFixed(2);
}

// Função para exibir o carrinho na página
function carregarItensCarrinho() {
    const itensCarrinho = document.getElementById('itens-carrinho');
    const totalElemento = document.getElementById('total');

    itensCarrinho.innerHTML = '';
    let total = 0;

    if (carrinho.length === 0) {
        itensCarrinho.innerHTML = '<p>O carrinho está vazio.</p>';
    } else {
        carrinho.forEach(item => {
            const itemDiv = document.createElement('div');
            itemDiv.classList.add('item-carrinho');
            itemDiv.innerHTML = `
                <span>${item.nome} (x${item.quantidade})</span>
                <span>R$ ${(item.preco * item.quantidade).toFixed(2)}</span>
            `;
            itensCarrinho.appendChild(itemDiv);
            total += item.preco * item.quantidade;
        });
    }

    totalElemento.textContent = total.toFixed(2);
    return total.toFixed(2);
}

// Carregar o carrinho ao abrir a página
document.addEventListener("DOMContentLoaded", carregarCarrinho);

// Adição específica para o PayPal (mantendo o restante do código original)
function configurarPaypal() {
    const total = calcularTotal();

    const paypalContainer = document.getElementById('paypal-button-container');
    if (paypalContainer.children.length > 0) {
        return; // Garante que não cria múltiplos botões
    }

    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: total
                    },
                    description: "Compra de produtos - Aura Prateada",
                    items: carrinho.map(item => ({
                        name: item.nome,
                        unit_amount: { value: item.preco.toFixed(2), currency_code: 'BRL' },
                        quantity: item.quantidade
                    }))
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Pagamento concluído com sucesso, ' + details.payer.name.given_name + '!');
                finalizarCompra();
            });
        }
    }).render('#paypal-button-container');
}
