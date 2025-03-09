<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>formulario funcionario</title>
</head>
<body>
<div class="d-flex justify-content-center">
<div class="card" style="width: 40rem;">
    <div class="container">
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
      <img src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      Formulário Funcionário
      </a>
    </nav>
    </div>

    <form method="post" action="formularioAction.php">
        <div class="form-group">
            <label name="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="form-group">
            <label name="salario">Salario:</label>
            <input type="number" class="form-control" name="salario" required>
        </div>
        <div class="form-group">
            <label name="quantidadeDependentes">Quantidade Dependentes:</label>
            <input type="number" class="form-control" name="quantidadeDependentes" required>
        </div>

        <button type="submit" class="btn btn-dark">Calcular aumento de salário</button>
    </form>
  </div>
  </div>
</body>
</html>