<?php 

class ContaBancaria
{
    private int $numeroDaConta;
    private string $nomeDoTitular;
    private int $saldo = 0;

    public function __construct($numeroDaConta, $nomeDoTitular, $saldo)
    {
        $this->numeroDaConta = $numeroDaConta;
        $this->nomeDoTitular = $nomeDoTitular;
        $this->saldo = $saldo;
    }

    public function depositar($quantia)
    {
        if($quantia <= 0){
            echo 'Não foi executado' .PHP_EOL;
            echo "" .PHP_EOL;
            return;
        }

        $this->saldo = $this->saldo + $quantia;
        echo 'Executado' .PHP_EOL;
        echo "" .PHP_EOL;
    } 

    public function sacar($quantia)
    {
        if($quantia <= 0){
            echo 'não foi executado' .PHP_EOL;
            echo "" .PHP_EOL;
            return;
        }

        $this->saldo = $this->saldo - $quantia;
        echo 'Executado' .PHP_EOL;
        echo "" .PHP_EOL;

    }

    public function exibirSaldo()
    {
        echo $this->saldo;
        echo "" .PHP_EOL;
    }
}


