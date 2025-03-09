<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>mensagem</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <h1>
            <?php
            echo"".$_POST['txtNome']." <br>";
            echo "valor total da compra foi de: R$". number_format($_POST['txtValorTotal'], 2, ',', '.');
            ?>
            <?php
            if ($_POST['slcRegiao'] == "Sudeste") {
                echo "<br> Este mes estamos com frete gratis para o Sudeste!";
            }
            ?>
        </h1>
    </div>
<p>
<button class="w3-button ">
        <a href="desvioSimples.php">Voltar</a>
    </button>
</p>
    
</body>
</html>