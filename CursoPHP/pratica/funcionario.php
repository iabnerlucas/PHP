<?php 


//Desafio: 

// Classe abstrata Funcionario:
// Atributos: nome, setor, salario
// Constante TIPO = 'Funcionário'
// Método abstrato exibirDetalhes()
// Contador estático para total de funcionários


// Interface OperacoesFuncionario:
// Métodos: trabalhar() e descansar()


// Classes concretas Gerente e Atendente:
// Herdam Funcionario
// Implementam OperacoesFuncionario
// Sobrescrevem o método exibirDetalhes() usando self::TIPO
// Cada uma define sua própria constante TIPO


// Modificadores de acesso:
// Use private ou protected para os atributos
// Getters e setters para acessar/modificar
// Construtor para inicializar os atributos

// Polimorfismo:
// exibirDetalhes() deve mostrar informações diferentes em Gerente e Atendente


abstract class Funcionario
{
    private $nome;
    private $setor;
    private $salario;
    const TIPO = 'Generico';
    private static $totalFuncionarios = 0;

    public function __construct($nome, $setor, $salario)
    {
        $this->nome = $nome;
        $this->setor = $setor;
        $this->salario = $salario;
        self::$totalFuncionarios++;
    }

    public function getNome(){return $this->nome;}
    public function getSetor(){return $this->setor;}
    public function getSalario(){return $this->salario;}

    public function setNome($n){$this->nome = $n;}
    public function setSetor($s){$this->setor = $s;}
    public function setSalario($sa){$this->salario = $sa;}
    public static function getTotalFuncionarios(){return self::$totalFuncionarios;}

    abstract public function exibirDetalhes();
}

interface operacoesFuncionario{
    public function trabalhar();
    public function descansar();
}

class Gerente extends Funcionario implements operacoesFuncionario
{
    const TIPO = 'Gerente';

   public function trabalhar()
    {
        echo $this->getNome() . ' está trabalhando.';
    }

    public function descansar()
    {
         echo $this->getNome() . ' está descansando.';
    }

    public function exibirDetalhes()
    {
        echo self::TIPO .': '. $this->getNome() .  ', SETOR: ' . $this->getSetor() . ', Salário: R$' . $this->getSalario();
    }
}

class Atendente extends Funcionario implements operacoesFuncionario
{
    const TIPO = 'Atendente';

    public function trabalhar()
    {
        echo $this->getNome() . ' está trabalhando.';
    }

    public function descansar()
    {
         echo $this->getNome() . ' está descansando.';
    }

    public function exibirDetalhes()
    {
        echo self::TIPO .': '. $this->getNome() .  ', SETOR: ' . $this->getSetor() . ', Salário: R$' . $this->getSalario();
    }
}

$g1 = new Gerente("João", "Administração", 8000);
$a1 = new Atendente("Maria", "Recepção", 2500);

$g1->exibirDetalhes();
echo '<br>';
$a1->exibirDetalhes();
echo '<br>';

$g1->trabalhar();
echo '<br>';
$a1->trabalhar();
echo '<br>';



