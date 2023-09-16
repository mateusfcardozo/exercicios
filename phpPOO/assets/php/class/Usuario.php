<?php 
class Usuario{
private int $id_user;
private string $Nome_Usuario;
private int $Idade_Usuario;
private int $CFP_Usuario;
private string $Endereco_Usuario;
private string $Senha_Usuario;
private float $Valor_Usuario;
private bool $Status_Usuario;

public function getIdUser(): int
{
return $this->id_user;
}

public function setIdUser(int $id_user): self
{
$this->id_user = $id_user;

return $this;
}

public function getNomeUsuario(): string
{
return $this->Nome_Usuario;
}
public function setNomeUsuario(string $Nome_Usuario): self
{
$this->Nome_Usuario = $Nome_Usuario;

return $this;
}

public function getIdadeUsuario(): int
{
return $this->Idade_Usuario;
}

public function setIdadeUsuario(int $Idade_Usuario): self
{
$this->Idade_Usuario = $Idade_Usuario;

return $this;
}

public function getCFPUsuario(): int
{
return $this->CFP_Usuario;
}

public function setCFPUsuario(int $CFP_Usuario): self
{
$this->CFP_Usuario = $CFP_Usuario;

return $this;
}

public function getEnderecoUsuario(): string
{
return $this->Endereco_Usuario;
}

public function setEnderecoUsuario(string $Endereco_Usuario): self
{
$this->Endereco_Usuario = $Endereco_Usuario;

return $this;
}

public function getSenhaUsuario(): string
{
return $this->Senha_Usuario;
}

public function setSenhaUsuario(string $Senha_Usuario): self
{
$this->Senha_Usuario = $Senha_Usuario;

return $this;
}

public function getValorUsuario(): float
{
return $this->Valor_Usuario;
}

public function setValorUsuario(float $Valor_Usuario): self
{
$this->Valor_Usuario = $Valor_Usuario;

return $this;
}

public function isStatusUsuario(): bool
{
return $this->Status_Usuario;
}

public function setStatusUsuario(bool $Status_Usuario): self
{
$this->Status_Usuario = $Status_Usuario;

return $this;
}
}
?>