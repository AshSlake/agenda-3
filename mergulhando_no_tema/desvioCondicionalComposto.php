<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Desvio Condicional Composto</title>
</head>
<body>
    <div class="w3-container w3-steal">
       <h2>
        Calculo de Media e Resultado Final
       </h2>
    </div>
    <form class="w3-container" method="post" action="desvioCompostoAction.php">
        <p>
        <label class="w3-text-teal">
            <b>
                Nome do Aluno
            </b>
        </label>
        <input class="w3-input w3-border w3-light-grey w3-margin-bottom" type="text" name="txtNome" required>
        </p>
        
        <p>
        <label class="w3-text-teal">
            <b>
                Nota 1
            </b>
        </label>
        <input class="w3-input w3-border w3-light-grey w3-margin-bottom" type="number" name="txtNota1" required>
        </p>
        <p>
        <label class="w3-text-teal">
            <b>
                Nota 2
            </b>
        </label>
        <input class="w3-input w3-border w3-light-grey w3-margin-bottom" type="number" name="txtNota2" required>
        </p>
        <p>
        <label class="w3-text-teal">
            <b>
                Nota 3
            </b>
        </label>
        <input class="w3-input w3-border w3-light-grey w3-margin-bottom" type="number" name="txtNota3" required>
        </p>
        <button class="w3-btn w3-teal w3-margin-bottom" type="submit">Calcular Média</button>
</body>
</html>