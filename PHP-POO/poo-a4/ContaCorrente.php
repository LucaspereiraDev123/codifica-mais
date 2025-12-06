<?php

require '../poo-a1/ContaBancaria.php';

class ContaCorrente extends ContaBancaria {
    
    private const TAXA_SAQUE = 3.50; // ou outro que você escolher
    private const TAXA_TRANSFERENCIA = 1.50; // xx

    public function __construct($numeroDaConta, string $nomeDoTitular, int $saldo = 0) 
    {
        parent::__construct($numeroDaConta, $nomeDoTitular, $saldo);
        $this->numeroDaConta = self::gerarNumeroConta();
    }

    private static function gerarNumeroConta(): string
    {
        $numero = rand(10000000, 99999999);
        $digito = rand(1, 9);
        
        return  "{$numero}-{$digito}";
    }

    
    public function sacar($quantia, $ehTransferencia = false)
    {
        $quantiaTotalSaque = $quantia + self::TAXA_SAQUE;
        
        if($quantiaTotalSaque > $this->saldo){
            echo "Saque não foi executado, saldo insuficiente";
            return;
        }
        
        if (!$ehTransferencia) {
            parent::sacar($quantiaTotalSaque, $ehTransferencia);
            $quantiaFormatada = number_format($quantia, 2, ',', '.');
            $taxaFormatada = number_format(self::TAXA_SAQUE, 2, ',', '.');

            echo "Valor R$ $quantiaFormatada sacado com sucesso. Taxa cobrada: R$ $taxaFormatada" .PHP_EOL;
            return;
        }
        
        parent::sacar($quantia, $ehTransferencia);
    }

    public function transferirDinheiro(ContaBancaria $contaDestino, float $quantia)
    {
        $valorTotal = $quantia + self::TAXA_TRANSFERENCIA;

        if($valorTotal > $this->saldo){
            echo "Não foi possivel realizar a transferência, saldo insuficiente" .PHP_EOL;
            return;
        }
        $this->sacar($valorTotal, true);
        $this->depositar($quantia);

        $valorFormatado = number_format($valorTotal, 2, ',' , '.');
        echo "Trasferência de R$ $valorFormatado realizada com sucesso" .PHP_EOL;
    }
}   