<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
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
    <h1>Exercício 12</h1>
    <p>Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)</p>
    <form action="processar.php" method="post">
        <label for="number1">Número 1:</label>
        <input type="number" name="number1">
        <br>
        <label for="number2">Número 2:</label>
        <input type="number" name="number2">
        <br>
        <label for="number3">Número 3:</label>
        <input type="number" name="number3">
        <br>
        <input type="submit" value="">
    </form>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>