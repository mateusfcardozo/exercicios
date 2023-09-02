<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
        .result {
            font-weight: bold;
        }
        .back-link {
            margin-top: 20px;
            display: block;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Exercício 10</h1>
    <p>Construir um algoritmo que leia 2 números e efetue a adição. <br>
        Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; <br>
        caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5</p>
    <form action="processar.php" method="post">
        <label for="number1">Número 1:</label>
        <input type="number" name="number1">
        <br>
        <label for="number2">Número 2:</label>
        <input type="number" name="number2">
        <br>
        <input type="submit" value="somar">
    </form>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>