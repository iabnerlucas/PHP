<?php 

//classe abstrata funcionário
abstract class Funcionario
{

    //criando os atributos
    private $nome;
    private $codIdent;
    private $cargo;
    private $valorHora;
    private $horas;
    private $salario;


    //criando os getters e setters de cada atributo, já que são todos privates
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



    //criando as funções OBRIGATÓRIAS em cada classe filha
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

    //função para exibir os dados
    public function exibir(){
        echo $this->nome(). '<br>'; 
        echo $this->cargo(). '<br>'; 
        echo $this->codIdent(). '<br>'; 
        echo $this->calcularSalario(). '<br>'; 
        
    }
}


//classe filha gerente
class Gerente extends Funcionario
{

    //função específica para a classe gerente
    public function gerenciar(){
        echo $this->getNome() . ' gerencia os setores: comercial, marketing e logística.';
    }
    
}


//classe filha supervisor
class Supervisor extends Funcionario
{
    
    //função específica para a classe supervisor
    public function supervisionar(){
        echo $this->getNome() . ' supervisiona os setores: comercial, marketing e logística.';
    }
}


//instaciando a classe gerente
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

//instaciando a classe supervisor
$supervisor = new Supervisor();
$supervisor->setNome('Gabriel Fratezzi');
$supervisor->setCargo('Supervisor');
$supervisor->setValorHora(80);
$supervisor->setHoras(40);
$supervisor->setCodIdent(12345);
$supervisor->calcularSalario();
$supervisor->exibir();
$supervisor->supervisionar();

