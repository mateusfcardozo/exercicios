<?php
class Usuario
{
    private int $id;
    private string $nome;
    private string $cpf;
    private string $endereco;
    private int $idade;
    private string $senha;
    private float $valor;
    private bool $status;
    private ?int $extrato_id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): self
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;
        return $this;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): self
    {
        $this->senha = $senha;
        return $this;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;
        return $this;
    }

    public function isStatus(): bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getExtratoId(): ?int
    {
        return $this->extrato_id;
    }

    public function setExtratoId(?int $extrato_id): self
    {
        $this->extrato_id = $extrato_id;
        return $this;
    }

    // Adicione aqui um método para obter o extrato do usuário
    public function obterExtrato(): array
    {
        // Aqui você irá buscar o extrato do usuário no banco de dados e retorná-lo
        // Retorna um array com as transações do extrato (data, tipo, valor)
        return [
            ['data' => '2023-09-17 10:00:00', 'tipo' => 'Depósito', 'valor' => 100.00],
            ['data' => '2023-09-17 12:30:00', 'tipo' => 'Saque', 'valor' => 50.00],
            // ... Adicione outras transações do extrato aqui
        ];
    }
}
?>
