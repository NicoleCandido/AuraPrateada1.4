<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento - Aura Prateada</title>
    <link rel="stylesheet" href="Visao/CSS/estilo.css">
    <!-- SDK do PayPal -->
    <script src="https://www.paypal.com/sdk/js?client-id=BAArEwWGbDacH18zljN2UK2YLTTFlNVvo_QiiDS_UoH3TWMmdgcJaASiJcgcilqWTNi94i0_en_8J9dQEk&components=hosted-buttons&disable-funding=venmo&currency=BRL"></script>
</head>
<body>
    <div class="carrinho">
        <h2>Pagamento</h2>
        <div id="itens-carrinho">
            <!-- Aqui vai o conteúdo do carrinho -->
        </div>
        <p>Total: R$ <span id="total">0.00</span></p>

        <!-- Adicionando o botão de pagamento -->
        <div id="paypal-container-Y26R6ATSW45MQ"></div>

        <!-- Script do PayPal para Hosted Buttons -->
        <script>
            paypal.HostedButtons({
                hostedButtonId: "Y26R6ATSW45MQ",
            }).render("#paypal-container-Y26R6ATSW45MQ");
        </script>
    </div>

    <script src="Modelo/carrinho.js"></script>
    <script>
        // Função para carregar os itens do carrinho e calcular o total
        function carregarItensCarrinho() {
            const itensCarrinho = document.getElementById('itens-carrinho');
            const totalElemento = document.getElementById('total');

            itensCarrinho.innerHTML = '';
            let total = 0;

            // Supondo que você tem uma variável `carrinho` que guarda os itens
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
        }

        // Carregar itens do carrinho assim que a página é carregada
        document.addEventListener("DOMContentLoaded", function() {
            carregarItensCarrinho();
        });
    </script>
</body>
</html>