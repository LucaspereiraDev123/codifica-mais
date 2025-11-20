<?php 

class Produto 
{
    private string $nome;
    private int $preco;
    private int $quantidade;


    public function __construct($nome, $preco, $quantidade)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function alterarPreco($novoPreco)
    {
        $this->preco = $novoPreco;
    }

    public function alterarQuantidade($novaQuantidade)
    {
        if($this->quantidade >= 0){
            $this->quantidade = $novaQuantidade;
            return $this->quantidade;
        } else {
            echo "Quantidade Indisponivel no estoque" .PHP_EOL;
        }
    }

    public function exibirDetalhes()
    {
        echo "" .PHP_EOL;
        echo "Nome do produto: " . $this->nome .PHP_EOL;
        echo "Valor do produto: " . $this->preco .PHP_EOL;
        echo "Quantidade disponivel: " . $this->quantidade .PHP_EOL;
    }
}