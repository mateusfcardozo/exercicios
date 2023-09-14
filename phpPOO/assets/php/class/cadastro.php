<?php
// Conecte-se ao banco de dados (substitua com suas credenciais)
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $idade = $_POST["idade"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];

    // Consulta SQL para verificar se o CPF ou email já estão cadastrados
    $sql = "SELECT * FROM usuarios WHERE cpf = '$cpf' OR email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // CPF ou email já cadastrados, exiba uma mensagem de erro
        echo "CPF ou email já cadastrados. Por favor, verifique suas informações.";
    } else {
        // CPF e email são únicos, insira os dados no banco de dados
        $sql = "INSERT INTO usuarios (nome, cpf, endereco, idade, senha, email)
                VALUES ('$nome', '$cpf', '$endereco', '$idade', '$senha', '$email')";

        if ($conn->query($sql) === TRUE) {
            // Cadastro bem-sucedido, retorne uma resposta de sucesso
            echo "sucesso";
        } else {
            echo "Erro ao cadastrar: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
