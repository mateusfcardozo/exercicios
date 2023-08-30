<!-- Crie um programa que leia duas notas de um aluno e calcule a sua média,
mostrando uma mensagem no final, de acordo com a média atingida:
   - Média até 4.9: REPROVADO
   - Média entre 5.0 e 6.9: RECUPERAÇÃO
   - Média 7.0 ou superior: APROVADO -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 2</title>
</head>

<body>
<h1>Exercício 2</h1>
<p>29/08/24</p>
    <?php
    $nota1 = 4.9;
    $nota2 = 0;

    $media = $nota1 + $nota2;

    if ($media <= 4.9) {
        echo "você esta reprovado";
    } elseif ($media >= 5.0 && $media <= 6.9) {
        echo "você esta em recuperação";
    } else {
        echo "você esta aprovado";
    }
    ?>
     <br>
     <br>
     <a href="../index.php">Voltar para a lista de exercícios</a>
</body>

</html>