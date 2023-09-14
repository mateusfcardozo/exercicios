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
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    // Consulta SQL para verificar o login
    $sql = "SELECT * FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login bem-sucedido, redirecione para a página de boas-vindas ou outra página desejada
        header("Location: boas-vindas.php");
    } else {
        echo "Login falhou. Por favor, verifique suas credenciais.";
    }
}

$conn->close();
?>
