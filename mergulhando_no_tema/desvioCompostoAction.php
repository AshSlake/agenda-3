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
                // Captura as notas do formulário
                $nome = $_POST['txtNome'];
                $n1 = $_POST['txtNota1'];
                $n2 = $_POST['txtNota2'];
                $n3 = $_POST['txtNota3'];
                if ($nome == "" || $n1 == "" || $n2 == "" || $n3 == "") {
                    // Exibe um toast usando JavaScript
                    echo '
                    <script>
                        // Exibe o toast
                        alert("Por favor, preencha todos os campos antes de proseguir!");
                        // Redireciona após exibir o toast
                        window.location.href = "desvioCondicionalComposto.php";
                    </script>
                    ';
                    exit;
                }
                $media = ($n1 + $n2 + $n3) / 3;
                // Mostra o nome do aluno e a média calculada
            
                echo $nome . ' sua média é '. number_format($media, 1). '<br>'  ;
                $resultado;

                if($media > 7) {
                    $resultado = "Parabéns, você foi aprovado!";
                }
                else {
                    $resultado = "Você está de recuperação, estude mais!";
                }
                echo 'resultado: '. $resultado. '<br>';
            ?>
        </h1>
    </div>

    <p>
            <button class='w3-button w3-teal'>
                <a href="desvioCondicionalComposto.php">Voltar</a>
            </button>
        </p>
</body>
</html>