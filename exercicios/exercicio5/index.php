<!-- Escreva um programa para aprovar ou não o empréstimo bancário para a compra de uma casa.
O programa vai perguntar o valor da casa, o salário do comprador e em quantos anos ele vai pagar.
Calcule o valor da prestação mensal, sabendo que ela não pode exceder 30% do salário ou
então o empréstimo será negado. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 5</title>
</head>

<body>
<h1>Exercício 1</h1>
<p>29/08/24</p>
    <?php
    $valor_da_casa = 300000;
    $salario_do_comprador = 5000;
    $quantos_anos = 17;
    $prestação_maxima = $salario_do_comprador * 0.30;
    $valor_da_prestação = $valor_da_casa / ($quantos_anos * 12);

    if ($valor_da_prestação <= $prestação_maxima) {
        echo"empréstimo aprovado! prestação mensal: R$". number_format($valor_da_prestação,2);
    }else{
        echo"empréstimo negado! a prestação excede os 30% do salario";
    }
    ?>
     <br>
     <br>
     <a href="../index.php">Voltar para a lista de exercícios</a>
</body>

</html>