<?php 

class Cliente{
    
    private $nome;

    public function getNome(){return $this->nome;}
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function __construct($nome){
        $this->setNome($nome);
    }

       public function mostrarPedido( Pedido $pedido){
        echo 'Pedido do cliente: ' . $this->getNome() . '<br>';
        $pedido->getMostrarPratos();
    }

}

class Pedido{
    private $pratos = [];

    public function adicionarPrato(Prato $prato){
        $this->pratos[] = $prato; //Adiciona o prato ao array de pratos do pedido.
    }

    public function getMostrarPratos(){
    foreach ($this->pratos as $prato){
        echo 'Prato: ' . $prato->getNome() . ' - Preço: R$' . $prato->getPreco() . '<br>';
        }
    }
}

class Prato{

    private $nome;
    private $preco;

    public function __construct($nome, $preco){
        $this->setNome($nome);
        $this->setPreco($preco);
    }

    public function getNome(){return $this->nome;}

    public function getPreco(){return $this->preco;}

    public function setNome($nome){
        $this->nome = $nome;
    }


    public function setPreco($preco){
        $this->preco = $preco;
    }

}

// Primeiro cliente
$cliente1 = new Cliente("Maria");
$pedido1 = new Pedido();

$prato1 = new Prato("Pizza", 30.00);
$prato2 = new Prato("Salada", 15.00);

$pedido1->adicionarPrato($prato1);
$pedido1->adicionarPrato($prato2);

$cliente1->mostrarPedido($pedido1);

echo "<hr>"; 

// Segundo cliente
$cliente2 = new Cliente("João");
$pedido2 = new Pedido();

$prato3 = new Prato("Hambúrguer", 25.00);
$prato4 = new Prato("Batata Frita", 10.00);

$pedido2->adicionarPrato($prato3);
$pedido2->adicionarPrato($prato4);

$cliente2->mostrarPedido($pedido2);

class Produto
{
    private $nome;
    private $preco;

    public function __construct($nome, $preco){
        $this->setNome($nome);
        $this->setPreco($preco);
    }

    public function getNome(){return $this->nome;}
    public function getPreco(){return $this->preco;}
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
}

class Carrinho
{
    public $produtos = [];

    public function adicionarProduto(Produto $produto){
        $this->produtos[] = $produto;
    }

    public function getMostrarProdutos(){
        foreach ($this->produtos as $produto){
            echo 'Produto> ' . $produto->getNome() . ' - Preço: R$' . $produto->getPreco() . '<br>';
        }
    }
}

class Clientes
{
   private $nome;
   
   public function getNome(){return $this->nome;}
   public function setNome($nome){
       $this->nome = $nome;
   }

   public function __construct($nome){
       $this->setNome($nome);
   }
}


$cliente = new Cliente("Carlos");

// Criando carrinho
$carrinho = new Carrinho();

// Criando produtos
$produto1 = new Produto("Mouse", 75.00);
$produto2 = new Produto("Teclado", 120.00);

// Adicionando produtos ao carrinho
$carrinho->adicionarProduto($produto1);
$carrinho->adicionarProduto($produto2);

// Mostrando resultado final
echo 'Cliente: ' . $cliente->getNome() . '<br>';
$carrinho->getMostrarProdutos();