<?php
require_once "Usuario.php";
require_once "UsuarioDAO.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $idade = $_POST['idade'];
    $senha = $_POST['senha'];

    if (empty($nome) || empty($cpf) || empty($endereco) || empty($idade) || empty($senha)) {
        echo "Todos os campos são obrigatórios.";
        exit;
    }

    $status = true;
    $valor = 0;

    $usuario = new Usuario($nome, $cpf, $endereco, $idade, $senha);
    $usuario->setStatus($status);
    $usuario->setValor($valor);

    $db = require_once 'config.php';
    $usuarioDAO = new UsuarioDAO($db);
    $usuarioDAO->cadastrar($usuario);

    header("Location: index.php");
    exit;
}
?>
