<?php 


//A classe é o MOLDE de algo da vida real
//atributos são características disto
//Métodos são ações que isto faz, é uma função dentro da classe
//objeto é quando damos algum valor pra esses atributos



class Conta
{
    public $dono;
    public $saldo;
    public $valorSaque;
    


    public function retirarDinheiro(){ //criação de um método
         $saldoFinal = $this->saldo - $this->valorSaque; //cálculo dentro do método: se usa '$this->' para pegar parâmetros que foram declarados fora do método

         echo $this->dono . ', o seu saldo final é:  ' . $saldoFinal .' reais. <br>'; //a mesma coisa para o '$this->'
    }

}

//criando o objeto
$conta = new Conta();
$conta->dono = 'Abner';
$conta->saldo = 150;
$conta->valorSaque = 100;
$conta->retirarDinheiro();


class Carro
{
    public $ano;
    public $modelo;
    public $velocidade;

    public function velocidadeMaxima()
    {
        echo $this->modelo . ' de ' . $this->ano . ' alcança ' . $this->velocidade . ' km/hora<br>';
    }
}

$uno = new Carro();
$uno->modelo = 'Uno';
$uno->ano = 2013;
$uno->velocidade = 120;
$uno->velocidadeMaxima();


class Aluno
{
    public $nota1;
    public $nota2;
    public $nome;

    public function calcularMedia(){
        $media = ($this->nota1 + $this->nota2)/2;
        echo 'A media do aluno '. $this->nome .' é '.  $media .' pontos. <br>';

        echo $media>=6 ? 'Aprovado</p>': 'Reprovado</p>';
    }
}

$aluno = new Aluno();
$aluno->nome = 'Abner';
$aluno->nota1 = 10;
$aluno->nota2 = 4;
$aluno->calcularMedia();


// ?>