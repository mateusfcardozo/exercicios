<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
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
    <h1>Exercício 11</h1>
    <p>Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes</p>
    <form action="processar.php" method="post">
        <label for="number">Número:</label>
        <input type="number" name="number">
        <br>
        <input type="submit" value="">
    </form>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>