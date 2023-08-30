<!-- Uma empresa precisa reajustar o salário dos seus funcionários,
dando um aumento de acordo com alguns fatores.
Faça um programa que leia o salário atual, o gênero do funcionário e
há quantos anos esse funcionário trabalha na empresa.
No final, mostre o seu novo salário, baseado na tabela a seguir:
- Mulheres
  - menos de 15 anos de empresa: +5%
  - de 15 até 20 anos de empresa: +12%
  - mais de 20 anos de empresa: +23%
- Homens
  - menos de 20 anos de empresa: +3%
  - de 20 até 30 anos de empresa: +13%
  - mais de 30 anos de empresa: +25% -->

  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>

<body>
<h1>Exercício 1</h1>
<p>30/08/24</p>
    <?php
    $salarioAtual = 3000; // não colocar ponto ou virgula, calculo da errado
    $genero = "mulher"; // ou "homem"
    $anosTrabalho = 18;

    if ($genero == "mulher") {
        if ($anosTrabalho < 15) {
            $novoSalario = $salarioAtual * 0.05; 
        } elseif ($anosTrabalho >= 15 && $anosTrabalho <= 20) {
            $novoSalario = $salarioAtual * 0.12; 
        } else {
            $novoSalario = $salarioAtual * 0.23; 
        }
    } else {
        if ($anosTrabalho < 20) {
            $novoSalario = $salarioAtual * 0.03; 
        } elseif ($anosTrabalho >= 20 && $anosTrabalho <= 30) {
            $novoSalario = $salarioAtual * 0.13; 
        } else {
            $novoSalario = $salarioAtual * 0.25; 
        }
    }

    echo "Novo salário: R$ " . number_format($novoSalario, 2);
    ?>
     <br>
     <br>
     <a href="../index.php">Voltar para a lista de exercícios</a>
</body>

</html>

