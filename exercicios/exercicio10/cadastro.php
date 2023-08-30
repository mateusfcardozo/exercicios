<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado</title>
</head>
<body>
    <?php 
        
        $nome = $_GET['nome'];
        $email= $_GET['email'];
        $senha= $_GET['pass'];

        echo "Seja bem vindo $nome";
    ?>
    <br>
      <a href="index.php">Voltar para a lista de exercícios</a>
</body>
</html>