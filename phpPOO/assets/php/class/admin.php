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

    $status_Usuario = true;
    $valor = 0;

    $usuario = new Usuario($nome, $cpf, $endereco, $idade, $senha);
    $usuario->setStatusUsuario($status_Usuario);
    $usuario->setValorUsuario($valor);          

    $db = require_once 'config.php';
    $usuarioDAO = new UsuarioDAO($db);
    $usuarioDAO->cadastrar($usuario);

    header("Location: index.php");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['login'])) {
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    if (empty($cpf) || empty($senha)) {
        echo "Todos os campos são obrigatórios.";
        exit;
    }

    $db = require_once 'config.php';
    $usuarioDAO = new UsuarioDAO($db);

    $usuario = $usuarioDAO->buscarPorCpf($cpf);

    if ($usuario && $usuario->getSenhaUsuario() === $senha) {
    
        header("Location: main.php");
        exit;
    } else {
        echo "Credenciais inválidas. Tente novamente.";
        exit;
    }
}
?>
