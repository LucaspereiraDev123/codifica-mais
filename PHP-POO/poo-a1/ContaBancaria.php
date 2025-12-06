<?php 

class ContaBancaria
{
    protected $numeroDaConta; //usei sem o int, pois não vai ser um valor que vai ser utilazado em operações matematicas
    protected string $nomeDoTitular;
    protected int $saldo = 0;

    public function __construct($numeroDaConta, $nomeDoTitular, $saldo)
    {
        $this->numeroDaConta = $numeroDaConta;
        $this->nomeDoTitular = $nomeDoTitular;
        $this->saldo = $saldo;
    }

    protected function retirarDinheiroDaConta(float $quantia): void
    {
        $this->saldo = $this->saldo - $quantia;
    }

    protected function adicionarDinheiroNaConta(float $quantia): void
    {
        $this->saldo = $this->saldo + $quantia;
    }
    
    public function getNumeroConta($numeroDaConta){
        echo "$this->numeroDaConta";
        echo "" .PHP_EOL;
    }

    public function getTitular($nomeDoTitular){
        echo "$this->nomeDoTitular";
        echo "" .PHP_EOL;
    }

    public function getSaldo($saldo, $numeroDaConta, $nomeDoTitular){
        echo "Conta: $this->numeroDaConta - Titular: $this->nomeDoTitular - Saldo: R$ $this->saldo";
        echo "" .PHP_EOL;
    }

    public function depositar($quantia)
    {
        if($quantia <= 0){ 
            echo 'Não foi executado, valor menor que 0' .PHP_EOL; 
            echo "" .PHP_EOL;
            return; 
        }

        $this->saldo = $this->saldo + $quantia;
        $quantiaFormatada = number_format($quantia, 2, ',', '.');

        echo "Depósito de R$ {$quantiaFormatada} realizado com sucesso na conta {$this->numeroDaConta}" . PHP_EOL;
        return;
    }

    public function sacar($quantia, $ehTransferencia = false)
    {
        if($quantia <= 0){
            echo 'Saque não foi executado, saldo insuficiente' .PHP_EOL;
            echo "" .PHP_EOL;
            return;
        }

         if ($ehTransferencia) {
            $this->retirarDinheiroDaConta($quantia);
            return;
        }

        $this->saldo = $this->saldo - $quantia;
        $quantiaFormatada = number_format($quantia, 2, ',', '.');

        echo "Saque de R$ {$quantiaFormatada} realizado com sucesso na conta {$this->numeroDaConta}" .PHP_EOL;
        return;

    }

    public function exibirSaldo()
    {
        $saldoFormatado = number_format($this->saldo, 2, ',' , '.');
        

        if(strlen($this->numeroDaConta) == 10){
            echo "O saldo da conta corrente $this->numeroDaConta , do titular $this->nomeDoTitular é R$ $saldoFormatado" . PHP_EOL;
        }

        if(strlen($this->numeroDaConta) == 8){
            echo "O saldo da conta poupança $this->numeroDaConta, do titular $this->nomeDoTitular é R$ $saldoFormatado" . PHP_EOL;
        }

        return;
    }

}


