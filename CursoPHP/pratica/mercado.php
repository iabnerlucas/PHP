<?php

abstract class Item
{
    private $nome;
    private $preco;
    private $quantidade;
    public static $totalProd = 0;

    public function __construct($nome, $preco, $quantidade)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        self::$totalProd++;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setNome($n)
    {
        $this->nome = $n;
    }

    public function setPreco($p)
    {
        $this->preco = $p;
    }
    public function setQuantidade($q)
    {
        $this->quantidade = $q;
    }

    public static function getCalcularTotal()
    {
        return self::$totalProd;
    }
    abstract public function exibirDetalhes();

    public function calcularValorTotal()
    {
        return $this->getPreco() * $this->getQuantidade();
    }
}


interface OperacoesCarrinho
{
    public function adicionarAoCarrinho();
    public function removerCarrinho();
}

class ProdutoFisico extends Item implements OperacoesCarrinho
{
    const TIPO = 'Produto Físico';

    public function adicionarAoCarrinho()
    {
        echo $this->getNome() . ' foi adicionado ao carrinho.<br>';
    }

    public function removerCarrinho()
    {
        echo $this->getNome() . ' foi removido do carrinho.<br>';
    }

    public function exibirDetalhes()
    {
        echo self::TIPO . ': ' . $this->getNome() .
            ' | Preço: R$' . number_format($this->getPreco(), 2, ',', '.') .
            ' | Quantidade em estoque: ' . $this->getQuantidade() . '<br>';
    }
}

class ProdutoDigital extends Item implements OperacoesCarrinho
{

    const TIPO = 'Produto Digital';

    public function adicionarAoCarrinho()
    {
        echo $this->getNome() . ' foi adicionado ao carrinho.<br>';
    }

    public function removerCarrinho()
    {
        echo $this->getNome() . ' foi removido do carrinho.<br>';
    }

    public function exibirDetalhes()
    {
        echo self::TIPO . ': ' . $this->getNome() .
            ' | Preço: R$' . number_format($this->getPreco(), 2, ',', '.') .
            ' | Quantidade em estoque: ' . $this->getQuantidade() . '<br>';
    }
}

$prodFis = new ProdutoFisico('Arroz', '20', '5');
echo 'Produto comprado: ' . $prodFis->getNome() . '<br>';
echo 'Quantidade comprada: ' . $prodFis->getQuantidade().'<br>';
echo 'Preço unitário: ' . $prodFis->getPreco().'<br>';

$prodFis->adicionarAoCarrinho().'<br>';
$prodFis->removerCarrinho().'<br>';
echo 'Valor total da compra: ' .$prodFis->calcularValorTotal();

echo '<br><br>';

$prodDig = new ProdutoDigital('Livro', '40', '3');
echo 'Produto comprado: ' . $prodDig->getNome().'<br>';
echo 'Quantidade comprada: ' . $prodDig->getQuantidade().'<br>';
echo 'Preço unitário: ' . $prodDig->getPreco().'<br>';
$prodDig->adicionarAoCarrinho().'<br>';
$prodDig->removerCarrinho().'<br>';
echo 'Valor total da compra: ' . $prodDig->calcularValorTotal();