<?php

//require '../poo-a1/ContaBancaria.php';


class ContaPoupanca extends ContaBancaria {

    protected float $porcentagemRendimento = 0.01; // 1% ao mês

    public function __construct(string $numeroDaConta, string $nomeDoTitular, float $saldo = 0)
    {
        parent::__construct($numeroDaConta, $nomeDoTitular, $saldo);
        $this->numeroDaConta = self::gerarNumeroConta();
    }

    private static function gerarNumeroConta(): string
    {
        $numero = rand(100000, 999999);
        $digito = rand(0, 9);

        return "{$numero}-{$digito}";
    }

    public function getPorcentagemRendimento(): float
    {
        return $this->porcentagemRendimento;
    }

    public function setPorcentagemRendimento(float $novaPorcentagemRendimento): void
    {
        if ($novaPorcentagemRendimento < 0) {
            echo "Não foi possível atualizar a porcentagem de rendimento. Insira um número inteiro" 
        . PHP_EOL;
            return;
        }

        $this->porcentagemRendimento = $novaPorcentagemRendimento;
    }

    public function aplicarRendimento(): void
    {
        $this->saldo = ($this->saldo * (1 + $this->porcentagemRendimento));
    }

}

