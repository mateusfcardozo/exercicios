<!-- Faça um programa que leia a largura e o comprimento de um terreno retangular,
calculando e mostrando a sua área em m². O programa também deve mostrar a classificação
desse terreno, de acordo com a lista abaixo:
- Abaixo de 100m² = TERRENO POPULAR
- Entre 100m² e 500m² = TERRENO MASTER
- Acima de 500m² = TERRENO VIP -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>

<body>
    <h1>Exercício 1</h1>
    <p>29/08/24</p>
    <label for="largula">Qual a largula?</label>
    <br>
    <label for="comprimento">Qual o comprimento?</label>
    <br>
    <?php
    $largura = '';
    $comprimento = '';

    $area = $largura * $comprimento;

    if ($area < 100) {
        echo "Área: $area m² - TERRENO POPULAR";
    } elseif ($area >= 100 && $area <= 500) {
        echo "Área: $area m² - TERRENO MASTER";
    } else {
        echo "Área: $area m² - TERRENO VIP";
    }
    ?>
    <br>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>

</html>