<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inclui o CSS do Bootstrap para estilização -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Formulário de Pagamento</title>
</head>
<body>
    <!-- Contêiner principal para centralizar o card na tela -->
    <div class="d-flex justify-content-center align-items-center vh-100">
        <!-- Card com largura fixa -->
        <div class="card shadow" style="width: 40rem;">
            <!-- Cabeçalho do card com logo e título -->
            <div class="card-header bg-light">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <!-- Logo do site -->
                        <img src="https://i.pinimg.com/736x/af/2e/a4/af2ea456ac3682b9aa18e02b758daa72.jpg" 
                             width="80" 
                             height="80" 
                             class="d-inline-block align-top" 
                             alt="Logo" 
                             loading="lazy">
                        <!-- Título do formulário -->
                        <span class="h4 ml-2">Formulário de Pagamento</span>
                    </a>
                </nav>
            </div>

            <!-- Corpo do card com o formulário -->
            <div class="card-body">
                <!-- Formulário de pagamento -->
                <form method="post" action="formularioAction.php">
                    <!-- Campo: Nome do Cliente -->
                    <div class="form-group">
                        <label for="nomeCliente">Nome do Cliente:</label>
                        <input type="text" 
                               class="form-control" 
                               name="nomeCliente" 
                               placeholder="Digite o nome do cliente" 
                               required>
                    </div>

                    <!-- Campo: Valor da Compra -->
                    <div class="form-group">
                        <label for="valorCompra">Valor da Compra:</label>
                        <input type="number" 
                               class="form-control"  
                               name="valorCompra" 
                               placeholder="Digite o valor da compra" 
                               required>
                    </div>

                    <!-- Campo: Forma de Pagamento -->
                    <div class="form-group">
                        <label for="formaPagamento">Forma de Pagamento:</label>
                        <select class="custom-select" id="formaPagamento" name="formaPagamento" required>
                            <option value="" disabled selected>Escolha a forma de pagamento</option>
                            <option value="cartaoCredito">Cartão de Crédito</option>
                            <option value="boleto">Boleto</option>
                            <option value="deposito">Depósito</option>
                        </select>
                    </div>

                    <!-- Botão de envio -->
                    <button type="submit" class="btn btn-dark btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</html>