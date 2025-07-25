<?php 


//Classe é o molde para criar um objeto
class Aluno{

    //atributos são as características dessa classe
    private $nome;
    public $matricula;
    public $curso;
    
    public function __construct($nome, $curso, $matricula){
        $this->nome = $nome;
        $this->curso = $curso;
        $this->matricula = $matricula;
    }

    public function getNome(){return $this->nome;}

    public function setNome($n){$this->nome = $n;}


    public function matricular(){echo $this->nome .', você se matriculou no curso' . $this->curso;}

    public function desmatricular(){echo $this->nome .', você se desmatriculou no curso' . $this->curso;}

}

$aluno = new Aluno('Abner', 'Análise e Desenvolvimento de Sistemas', '0021302');
$aluno->matricular();
echo '<br>';
$aluno->desmatricular();
echo '<br>';
echo '<br>';
echo '<br>';

//criação de classe usando abstração e modificadores de acesso

abstract class veiculo{
    private $placa;
    private $nomeProp;
    public $modelo;
    public $ano;
    protected $quilometros;

    public function getPlaca(){
        return $this->placa;
    }

    public function setPlaca($p){
        $this->placa = $p;
    }

     public function getNomeProp(){
        return $this->nomeProp;
    }

    public function setNomeProp($np){
        $this->nomeProp = $np;
    }

    public function setKm($km){
        $this->quilometros = $km;
    }

    public function verificarKm(){
        if($this->quilometros <= 100000 ){
            return 'Apto para rodar'; 
        } else{
            return 'Não apto para rodar';
        }
    }

    public function statusKm(){
        echo 'Status da quilometragem: ' . $this->verificarKm().  '<br>';
    }

}

class carro extends veiculo{
    public function nomeProp(){
    echo 'Nome do proprietário: ' . $this->getNomeProp() . '<br>';
    }

    public function placa(){
        echo 'Placa do carro: ' . $this->getPlaca() . '<br>';
    }

    public function modelo(){
        echo 'Modelo do carro: ' . $this->modelo . '<br>';
    }

    public function ano(){
        echo 'Ano do carro: ' . $this->ano . '<br>';
    }

    public function exibirDados(){
        echo $this->nomeProp();
        echo $this->placa();
        echo $this->modelo();
        echo $this->ano();
        echo $this->statusKm();
    }

}

class moto extends veiculo{
    public function nomeProp(){
    echo 'Nome do proprietário: ' . $this->getNomeProp() . '<br>';
    }

    public function placa(){
        echo 'Placa da moto: ' . $this->getPlaca() . '<br>';
    }

    public function modelo(){
        echo 'Modelo da moto: ' . $this->modelo . '<br>';
    }

    public function ano(){
        echo 'Ano da moto: ' . $this->ano . '<br>';
    }

     public function exibirDados(){
        echo $this->nomeProp();
        echo $this->placa();
        echo $this->modelo();
        echo $this->ano();
        echo $this->statusKm();
    }

}

$meuCarro = new Carro();
$meuCarro->setPlaca('OOR-1608');
$meuCarro->setNomeProp('Abner Lucas');
$meuCarro->setKm(100001);
$meuCarro->modelo = 'Uno';
$meuCarro->ano = '2013';
$meuCarro->setKm(100001);
$meuCarro->exibirDados();

echo '<br>';
echo '<br>';


$minhaMoto= new moto();
$minhaMoto->setPlaca('ABC-123');
$minhaMoto->setNomeProp('Lucas');
$minhaMoto->setKm(100000);
$minhaMoto->modelo = 'Honda CG 160';
$minhaMoto->ano = '2013';
$minhaMoto->exibirDados();

