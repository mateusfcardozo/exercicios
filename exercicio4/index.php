<!-- Desenvolva um programa que leia o nome de um funcionário, seu salário,
quantos anos ele trabalha na empresa e mostre seu novo salário,
reajustado de acordo com a tabela a seguir:
   - Até 3 anos de empresa: aumento de 3%
   - entre 3 e 10 anos: aumento de 12.5%
   - 10 anos ou mais: aumento de 20% -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 4</title>
</head>

<body>
    <?php
    $nome = "mateus";
    $salario = 300;
    $novosalario = 0;
    $anos_na_empresa = 10;

    if ($anos_na_empresa <= 3) {
        $novosalario = $salario + ($salario * 0.03);
    } elseif ($anos_na_empresa > 3 and $anos_na_empresa <= 10) {
        $novosalario = $salario + ($salario * 0.125);
    } else {
        $novosalario = $salario + ($salario * 0.20);
    }
    echo "nome:". $nome. " seu novo salario e:".number_format($novosalario,2). " e esta na empresa há:". $anos_na_empresa;
    ?>
</body>

</html>