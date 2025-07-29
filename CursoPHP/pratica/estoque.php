<?php 

// Classe abstrata Produto: nome, preço, validade (ou garantia).
// Classe Eletronico e Alimento herdam de Produto e implementam a interface.
// Atributo estático para contar o total de produtos criados.
// Método exibirDetalhes() polimórfico.
// Constantes de tipo para cada classe (TIPO = 'Alimento', etc).
// Clonagem altera o nome do produto com "(clone)".

abstract class Produto
{
    protected $nome;
    protected $preco;
    protected  $validade;
    public static $totalProdutos = 0;
    protected $estoque = 0;
    const TIPO = 'Genérico';
    public function __construct($nome, $preco, $validade)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->validade = $validade;
        self::$totalProdutos++;
    }

    public static function getTotalProdutos(){
        return self::$totalProdutos;
    }

    abstract public function exibirDetalhes();
}


// Interface OperacoesProduto: métodos vender() e repor().
interface OperacoesProduto
{
    public function vender($quantidade);
    public function repor($quantidade);
}


class Eletronico extends Produto implements OperacoesProduto
{
    const TIPO = 'Eletrônico';
    
    public function repor($quantidade) {
        $this->estoque += $quantidade;
        echo "$quantidade unidade(s) reposta(s) de {$this->nome}.<br>";
    }

    public function vender($quantidade) {
        if ($this->estoque >= $quantidade) {
            $this->estoque -= $quantidade;
            echo "$quantidade unidade(s) vendida(s) de {$this->nome}.<br>";
        } else {
            echo "Estoque insuficiente para {$this->nome}.<br>";
        }
    }
    public function exibirDetalhes() {
        echo self::TIPO . ': '. $this->nome . ' Preço: R$' . $this->preco. ' Garantia: ' . $this->validade. 'Estoque: ' .$this->estoque. '<br>';
    }
}
class Alimentos extends Produto implements OperacoesProduto
{
    const TIPO = 'Alimento';
    
    public function repor($quantidade) {
        $this->estoque += $quantidade;
        echo "$quantidade unidade(s) reposta(s) de {$this->nome}.<br>";
    }

    public function vender($quantidade) {
        if ($this->estoque >= $quantidade) {
            $this->estoque -= $quantidade;
            echo "$quantidade unidade(s) vendida(s) de {$this->nome}.<br>";
        } else {
            echo "Estoque insuficiente para {$this->nome}.<br>";
        }
    }
    public function exibirDetalhes() {
        echo self::TIPO . ': '. $this->nome . ' Preço: R$' . $this->preco. ' Garantia: ' . $this->validade. 'Estoque: ' .$this->estoque. '<br>';
    }
}



// Instância de um eletrônico
$tv = new Eletronico("Smart TV 55\"", 2800, "24 meses");
$tv->repor(15);         // Adiciona 15 unidades no estoque
$tv->vender(5);         // Vende 5 unidades
$tv->exibirDetalhes();  // Mostra os detalhes

echo "<br>";

// Instância de um alimento
$feijao = new Alimentos("Feijão Preto", 8.90, "2025-03-10");
$feijao->repor(100);       // Adiciona 100 unidades
$feijao->vender(40);       // Vende 40 unidades
$feijao->exibirDetalhes(); // Mostra os detalhes

echo "<br><br>Total de produtos: " . Produto::getTotalProdutos();
