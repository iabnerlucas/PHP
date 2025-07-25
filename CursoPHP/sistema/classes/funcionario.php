<?php 

//classe abstrata funcionário
abstract class Funcionario
{

    private $nome;
    private $codIdent;
    private $cargo;
    private $valorHora;
    private $horas;
    private $salario;

    public function getValorHora(){return $this->valorHora;}
    public function setValorHora($s){$this->valorHora = $s;}

    public function getHoras(){return $this->horas;}
    public function setHoras($h){$this->horas = $h;}

    public function getNome(){return $this->nome;}
    public function setNome($n){$this->nome = $n;}

    public function getCodIdent(){return $this->codIdent;}
    public function setCodIdent($ci){$this->codIdent = $ci;}

    public function getCargo(){return $this->cargo;}
    public function setCargo($c){$this->cargo = $c;}

    public function getSalario() { return $this->salario; }

    
    public function nome(){
        return 'Nome do funcionário: ' . $this->nome;
    }

    public function codIdent(){
        return 'Código de identificação do funcionário: ' . $this->codIdent;
    }

    public function cargo(){
        return 'Cargo do funcionário: ' . $this->cargo;
    }

    public function calcularSalario(){
        $this->salario = $this->getHoras() * $this->getValorHora();
        return 'Salário mensal: ' .$this->salario;
    }
    public function exibir(){
        echo $this->nome(). '<br>'; 
        echo $this->cargo(). '<br>'; 
        echo $this->codIdent(). '<br>'; 
        echo $this->calcularSalario(). '<br>'; 
        
    }
}

class Gerente extends Funcionario
{
    public function gerenciar(){
        echo $this->getNome() . ' gerencia os setores: comercial, marketing e logística.';
    }
    
}

class Supervisor extends Funcionario
{
    public function supervisionar(){
        echo $this->getNome() . ' supervisiona os setores: comercial, marketing e logística.';
    }
}

$gerente = new Gerente();
$gerente->setNome('Lucas Venin');
$gerente->setCargo('Gerente');
$gerente->setValorHora(150);
$gerente->setHoras(30);
$gerente->setCodIdent(12345);
$gerente->calcularSalario();
$gerente->exibir();
$gerente->gerenciar();

echo '<br>';
echo '<br>';
echo '<br>';

$supervisor = new Supervisor();
$supervisor->setNome('Gabriel Fratezzi');
$supervisor->setCargo('Supervisor');
$supervisor->setValorHora(80);
$supervisor->setHoras(40);
$supervisor->setCodIdent(12345);
$supervisor->calcularSalario();
$supervisor->exibir();
$supervisor->supervisionar();

