<?php

class Funcionario 
{
    private string $nome;
    private string $cargo;
    private int $salario;

    public function __construct ($nome, $cargo, $salario)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function alterarCargo($novoCargo)
    {
        $this->cargo = $novoCargo;
    }

    public function alterarSalario($novoSalario)
    {
        if ($novoSalario > 0) {
            $this->salario = $novoSalario;
        } else {
            echo "Erro: O salário deve ser um valor positivo!" . PHP_EOL;
        }
    }

    public function exibirDetalhes()
    {
        echo "";
        echo "Nome do funcionário: " .$this->nome .PHP_EOL;
        echo "Cargo atual: " .$this->cargo .PHP_EOL;
        echo "Salario atual: " .$this->salario .PHP_EOL;
    }
}