<?php
require_once 'config.php';
require_once 'Usuario.php';

class UsuarioDAO
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function cadastrar(Usuario $usuario)
    {
        $sql = "INSERT INTO usuarios (nome, cpf, endereco, idade, senha, status, valor) VALUES (:nome, :cpf, :endereco, :idade, :senha, :status, :valor)";

        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(":nome", $usuario->getNome());
        $stmt->bindValue(":cpf", $usuario->getCpf());
        $stmt->bindValue(":endereco", $usuario->getEndereco());
        $stmt->bindValue(":idade", $usuario->getIdade());
        $stmt->bindValue(":senha", $usuario->getSenha());
        $stmt->bindValue(":status", $usuario->isStatus(), PDO::PARAM_BOOL); 
        $stmt->bindValue(":valor", $usuario->getValor());

        $stmt->execute();
        return $this->db->lastInsertId();
    }
    public function adicionarTransacao(Usuario $usuario, $tipo_transacao, $valor)
{
    $sql = "INSERT INTO extrato (usuario_id, data_transacao, tipo_transacao, valor) 
            VALUES (:usuario_id, NOW(), :tipo_transacao, :valor)";

    $stmt = $this->db->prepare($sql);
    $stmt->bindValue(":usuario_id", $usuario->getId());
    $stmt->bindValue(":tipo_transacao", $tipo_transacao);
    $stmt->bindValue(":valor", $valor);
    $stmt->execute();
}
}
?>
