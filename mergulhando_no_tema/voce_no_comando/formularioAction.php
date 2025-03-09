<?php
$nome = $_POST['nome'];
$salario = $_POST['salario'];
$quant_depend = $_POST['quantidadeDependentes'];
$por = 0 ;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>mensagem</title>
</head>
<body>
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 40rem;">
        <div class="container">
       <nav class="navbar navbar-light bg-light">
       <a class="navbar-brand" href="#">
       <img src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
          Aumento de Salario
       </a>
       </nav>

       <?php
       if($salario <= 500 && $quant_depend <=5){
        $por = 15;
        }
        elseif($salario <= 500 && $quant_depend > 5)
        {
        $por = 20;
        }
        elseif($salario <= 1000 && $quant_depend <=5)
        {
        $por = 10;
        }
        elseif($salario <= 1000 && $quant_depend > 5){
        $por = 15;
        }
        elseif($salario <= 2000 && $quant_depend <=5){
        $por = 10;
        }
        elseif($salario <= 2000 && $quant_depend > 5){
        $por = 12;
        }
        echo $nome."<br>";
        echo "Você terá ".$por."% de aumento, resultara no valor de R$ ".($por* $salario / 100)."<br>";
        echo "Seu novo Salário: R$ ".($salario +$por * $salario / 100)."<br>";
       ?>

    </div>
    </div>
    </div>
   <br/>
    <div class="d-flex justify-content-center">
        <button>
            <a href="formulario.php" class="btn btn-dark">ok</a>
        </button>
        
    </div>
        
</body>
</html>