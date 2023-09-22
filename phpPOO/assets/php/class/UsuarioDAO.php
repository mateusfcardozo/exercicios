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
        $this->db->set_charset("utf8"); // Certifique-se de definir o conjunto de caracteres corretamente
        $sql = "INSERT INTO usuarios (nome, cpf, endereco, idade, senha, valor, status) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
    
        // Verifique se a preparação da consulta foi bem-sucedida
        if (!$stmt) {
            die('Erro na preparação da consulta: ' . $this->db->error);
        }
    
        // Bind dos parâmetros
        $stmt->bind_param("sssisis", $usuario->getNomeUsuario(), $usuario->getCpfUsuario(), $usuario->getEnderecoUsuario(), $usuario->getIdadeUsuario(), $usuario->getSenhaUsuario(), $usuario->getValorUsuario(), $usuario->isStatusUsuario());
    
        // Execute a consulta
        $result = $stmt->execute();
    
        // Verifique se a execução foi bem-sucedida
        if (!$result) {
            die('Erro na execução da consulta: ' . $stmt->error);
        }
    
        $stmt->close(); // Feche a consulta
    
        return $result;
    }
    
    public function atualizar(Usuario $usuario)
{
    $sql = "UPDATE usuarios SET nome = :nome, cpf = :cpf, endereco = :endereco, idade = :idade, senha = :senha, valor = :valor, status = :status WHERE id = :id";
    $stmt = $this->db->prepare($sql);

    $stmt->bindValue(':nome', $usuario->getNomeUsuario());
    $stmt->bindValue(':cpf', $usuario->getCpfUsuario());
    $stmt->bindValue(':endereco', $usuario->getEnderecoUsuario());
    $stmt->bindValue(':idade', $usuario->getIdadeUsuario());
    $stmt->bindValue(':senha', $usuario->getSenhaUsuario());
    $stmt->bindValue(':valor', $usuario->getValorUsuario());
    $stmt->bindValue(':status', $usuario->isStatusUsuario(), PDO::PARAM_BOOL);
    $stmt->bindValue(':id', $usuario->getIdUsuario());

    return $stmt->execute();
}
//     public function adicionarTransacao(Usuario $usuario, $tipo_transacao, $valor)
// {
//     $sql = "INSERT INTO extrato (usuario_id, data_transacao, tipo_transacao, valor) 
//             VALUES (:usuario_id, NOW(), :tipo_transacao, :valor)";

//     $stmt = $this->db->prepare($sql);
//     $stmt->bindValue(":usuario_id", $usuario->getId());
//     $stmt->bindValue(":tipo_transacao", $tipo_transacao);
//     $stmt->bindValue(":valor", $valor);
//     $stmt->execute();
// }
public function buscarPorCpf($cpf)
{
    $sql = "SELECT * FROM usuarios WHERE cpf = :cpf";
    $stmt = $this->db->prepare($sql);
    $stmt->bindValue(':cpf', $cpf, PDO::PARAM_STR);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}
}

?>
