<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Desvio condicional Simples</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <h2>
        Enviar Pedido
        </h2>
    </div>
    <form class="w3-container" method="post" action="desvioSimplesAction.php">
        <p>
        <label class="w3-text-teal">
            <b>
                Nome Usuario
            </b>
        </label>
        <input class="w3-input w3-border w3-light-grey" name="txtNome" type="text">
        </p>
      <p>
      <label class="w3-text-teal">
            <b>
                Valor Total da Compra
            </b>
        </label>
        <input class="w3-input w3-border w3-light-grey" name="txtValorTotal" type="number">
      </p>
        
        <p>
        <label class="w3-text-teal">
            <b>
                Escolha a região:
            </b>
        </label>
        <select class="w3-select w3-border w3-ligth-grey" id="regiao" name="slcRegiao">
            <option value="Centro-Oeste">Centro-Oeste</option>
            <option value="Nordeste">Nordeste</option>
            <option value="Norte">Norte</option>
            <option value="Sul">Sul</option>
            <option value="Sudeste">Sudeste</option>
        </select>
        </p>
        
        <p>
        <button class="w3-btn w3-blue-grey">
            Enviar Pedido
        </button>
        </p>
       

    </form>
</body>
</html>