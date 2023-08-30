<!-- O Índice de Massa Corpórea (IMC) é um valor calculado baseado na altura e no peso de uma pessoa.
De acordo com o valor do IMC, podemos classificar o indivíduo dentro de certas faixas.
- abaixo de 18.5: Abaixo do peso
- entre 18.5 e 25: Peso ideal
- entre 25 e 30: Sobrepeso
- entre 30 e 40: Obesidade
- acima de 40: Obseidade mórbida
O IMC é calculado pela expressão peso/altura² (peso dividido pelo quadrado da altura) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>

<body>
<h1>Exercício 1</h1>
<p>30/08/24</p>
    <?php
    $peso = 70; 
    $altura = 1.75; 

    $imc = $peso / ($altura * $altura);

    if ($imc < 18.5) {
        echo "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 25) {
        echo "Peso ideal";
    } elseif ($imc >= 25 && $imc < 30) {
        echo "Sobrepeso";
    } elseif ($imc >= 30 && $imc < 40) {
        echo "Obesidade";
    } else {
        echo "Obesidade mórbida";
    }
    ?>
     <br>
     <br>
     <a href="../index.php">Voltar para a lista de exercícios</a>
</body>

</html>
