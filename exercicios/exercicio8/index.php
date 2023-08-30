<!-- Um programa de vida saudável quer dar pontos atividades físicas que podem ser trocados por dinheiro.
O sistema funciona assim:
- Cada hora de atividade física no mês vale pontos
  - até 10h de atividade no mês: ganha 2 pontos por hora
  - de 10h até 20h de atividade no mês: ganha 5 pontos por hora
  - acima de 20h de atividade no mês: ganha 10 pontos por hora
- A cada ponto ganho, o cliente fatura R$0,05 (5 centavos)
Faça um programa que leia quantas horas de atividade uma pessoa teve por mês,
calcule e mostre quantos pontos ela teve e quanto dinheiro ela conseguiu ganhar. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>

<body>
<h1>Exercício 1</h1>
<p>30/08/24</p>
    <?php
    $horasAtividade = 25; 

    if ($horasAtividade <= 10) {
        $pontos = $horasAtividade * 2;
    } elseif ($horasAtividade <= 20) {
        $pontos = $horasAtividade * 5;
    } else {
        $pontos = $horasAtividade * 10;
    }

    $ganhoDinheiro = $pontos * 0.05; 

    echo "Pontos: $pontos\n";
    echo "Ganho em dinheiro: R$ " . number_format($ganhoDinheiro, 2);
    ?>
     <br>
     <br>
     <a href="../index.php">Voltar para a lista de exercícios</a>
</body>

</html>
