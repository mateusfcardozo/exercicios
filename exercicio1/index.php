<!-- Escreva um algoritmo que leia dois números inteiros e compare-os,
mostrando na tela uma das mensagens abaixo:

   - O primeiro valor é o maior
   - O segundo valor é o maior
   - Não existe valor maior, os dois são iguais -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 1</title>
</head>

<body>
    <?php
    $number1 = 10;
    $number2 = 5;

    if ($number1 > $number2) {
        echo "o primeiro numero e maior que o segundo numero";
    } elseif ($number1 < $number2) {
        echo "o segundo numero e maior que o primeiro numero";
    } else {
        echo "os dois números sao iguais";
    }
    ?>
</body>

</html>