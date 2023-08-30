<!-- Uma empresa de aluguel de carros precisa cobrar pelos seus serviços.
O aluguel de um carro custa R$90 por dia para carro popular e R$150 por dia para carro de luxo.
Além disso, o cliente paga por Km percorrido. Faça um programa que leia o tipo de carro alugado (popular ou luxo),
quantos dias de aluguel e quantos Km foram percorridos. No final, mostre o preço a ser pago de acordo com a tabela a seguir:
- Carros populares (aluguel de R$90 por dia)
  - Até 100Km percorridos: R$0,20 por Km
  - Acima de 100Km percorridos: R$0,10 por Km
- Carros de luxo (aluguel de R$150 por dia)
  - Até 200Km percorridos: R$0,30 por Km
  - Acima de 200Km percorridos: R$0,25 por Km -->

  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>

<body>
<h1>Exercício 1</h1>
<p>30/08/24</p>
    <?php
    $tipoCarro = "popular";// ou "luxo"
    $diasAluguel = 3;
    $kmPercorridos = 120;

    if ($tipoCarro == "popular") {
        if ($kmPercorridos <= 100) {
            $precoKm = 0.20;
        } else {
            $precoKm = 0.10;
        }
        $precoDiaria = 90;
    } else {
        if ($kmPercorridos <= 200) {
            $precoKm = 0.30;
        } else {
            $precoKm = 0.25;
        }
        $precoDiaria = 150;
    }

    $totalPagar = ($precoDiaria * $diasAluguel) + ($precoKm * $kmPercorridos);

    echo "Total a pagar: R$ " . number_format($totalPagar, 2);
    ?>
     <br>
     <br>
     <a href="../index.php">Voltar para a lista de exercícios</a>
</body>

</html>
