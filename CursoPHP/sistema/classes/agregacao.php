<?php 

class Produtos
{
    public $nome;
    public $preco;
   

    function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}


class Carrinho
{

    public $produtos;

    public function adiciona(Produtos $produtos){
        $this->produtos [] = $produtos;
    }

    public function exibeProdutos()
    {
        foreach ($this->produtos as $produto){
            echo 'Produto: ' . $produto->nome . ' Preço: ' . $produto->preco .  '<br>';
        }
    }
}

$produto1 = new Produtos('Notebook', 2500);
$produto2 = new Produtos('Mouse', 50);
$produto3 = new Produtos('Teclado', 100);

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto3);

$carrinho->exibeProdutos();