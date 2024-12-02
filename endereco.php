<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Visao/CSS/style2.css">
    <link rel="shortcut icon" href="Visao/imagem/logo.ico" type="image/x-icon">
    <title>Endereço de Entrega</title>
</head>
<body>

    <div class="container">
        <h2>Endereço de Entrega</h2>
        
        <form id="form-endereco">
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" required>

            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep" maxlength="9" required onblur="buscarEndereco()">

            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" required>

            <label for="complemento">Complemento</label>
            <input type="text" id="complemento" name="complemento" required>

            <div class="row">
                <div class="column">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" required>
                </div>
                <div class="column">
                    <label for="estado">Estado</label>
                    <input type="text" id="estado" name="estado" required maxlength="2">
                </div>
            </div>

            <button class="btn finalizar-compra" onclick="irParaPagamento()">Selecionar forma de Pagamento</button>
            
        </form>
    </div>

    <script>
        function buscarEndereco() {
            const cep = document.getElementById('cep').value.replace(/\D/g, '');

            if (cep.length === 8) { 
                const url = `https://viacep.com.br/ws/${cep}/json/`;

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        if (data.erro) {
                            alert("CEP não encontrado!");
                        } else {
                            document.getElementById('endereco').value = data.logradouro || '';
                            document.getElementById('cidade').value = data.localidade || '';
                            document.getElementById('estado').value = data.uf || '';
                        }
                    })
                    .catch(error => {
                        alert("Erro ao buscar o endereço!");
                        console.error(error);
                    });
            } else {
                alert("Por favor, insira um CEP válido com 8 dígitos.");
            }
        }
    </script>
        <script> 
 function irParaPagamento() {
        
            window.location.href = 'pagamento.php';
        }
    </script>
</body>
</html>
