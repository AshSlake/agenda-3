<?php
// Adiciona cabeçalhos HTTP para evitar cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inclui o CSS do Bootstrap para estilização -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Título da página -->
    <title>Nota Fiscal</title>
    <!-- Estilos personalizados -->
    <style>
        /* Estilo para o card de nota fiscal */
        .nota-fiscal {
            border: 2px solid #000;
            border-radius: 10px;
            background-color: #f8f9fa;
        }
        /* Estilo para o cabeçalho da nota fiscal */
        .nota-fiscal-header {
            background-color: #343a40;
            color: #fff;
            border-radius: 8px 8px 0 0;
        }
        /* Estilo para os títulos */
        .nota-fiscal-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        /* Estilo para os valores */
        .nota-fiscal-value {
            font-size: 1.2rem;
            color: #28a745; /* Verde para valores monetários */
        }
        /* Estilo para o botão de finalizar */
        .btn-finalizar {
            background-color: #343a40;
            color: #fff;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-finalizar:hover {
            background-color: #23272b;
        }
    </style>
</head>
<body>
    <!-- Contêiner principal para centralizar o card na tela -->
    <div class="d-flex justify-content-center align-items-center vh-100">
        <!-- Card com estilo de nota fiscal -->
        <div class="card nota-fiscal shadow-lg" style="width: 40rem;">
            <!-- Cabeçalho do card com logo e título -->
            <div class="card-header nota-fiscal-header text-center">
                <img src="https://i.pinimg.com/736x/af/2e/a4/af2ea456ac3682b9aa18e02b758daa72.jpg" 
                     width="80" 
                     height="80" 
                     class="d-inline-block align-top" 
                     alt="Logo" 
                     loading="lazy">
                <h3 class="nota-fiscal-title mt-2">Nota Fiscal</h3>
            </div>

            <!-- Corpo do card com os detalhes da compra -->
            <div class="card-body">
                <!-- Nome do cliente -->
                <div class="text-center mb-4">
                    <h2 class="nota-fiscal-title"><?php echo $_POST['nomeCliente']; ?></h2>
                    <p class="text-muted">Obrigado por comprar conosco!</p>
                </div>

                <!-- Detalhes da compra -->
                <div class="mb-4">
                    <h4 class="nota-fiscal-title">Detalhes da Compra:</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Valor da compra:</strong>
                            <span class="nota-fiscal-value">R$ <?php echo number_format($_POST['valorCompra'], 2, ',', '.'); ?></span>
                        </li>
                        <li class="list-group-item">
                            <strong>Forma de pagamento:</strong>
                            <span><?php echo $_POST['formaPagamento']; ?></span>
                        </li>
                        <!-- Cálculo do desconto -->
                        <?php
                        $desconto = 0;
                        if ($_POST['formaPagamento'] == 'deposito') {
                            $desconto = 0.10 * $_POST['valorCompra'];
                            echo '<li class="list-group-item"><strong>Desconto aplicado:</strong> 10%</li>';
                        } elseif ($_POST['formaPagamento'] == 'boleto') {
                            $desconto = 0.08 * $_POST['valorCompra'];
                            echo '<li class="list-group-item"><strong>Desconto aplicado:</strong> 8%</li>';
                        } else {
                            echo '<li class="list-group-item"><strong>Desconto aplicado:</strong> 0%</li>';
                        }
                        ?>
                        <li class="list-group-item">
                            <strong>Você economizou:</strong>
                            <span class="nota-fiscal-value">R$ <?php echo number_format($desconto, 2, ',', '.'); ?></span>
                        </li>
                        <li class="list-group-item">
                            <strong>Valor a pagar:</strong>
                            <span class="nota-fiscal-value">R$ <?php echo number_format($_POST['valorCompra'] - $desconto, 2, ',', '.'); ?></span>
                        </li>
                    </ul>
                </div>

                <!-- Botão de finalizar -->
                <div class="text-center">
                     <button type="button" class="btn btn-finalizar btn-lg btn-block" onclick="window.location.href='formulario.php'">Finalizar Compra</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>