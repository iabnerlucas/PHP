<?php 

class Pessoa{
    public $idade;
    public $nome;
}

$pessoa = new Pessoa();
$pessoa->idade = 20;
$pessoa->nome = 'Abner';
$pessoa2= clone $pessoa;
$pessoa2->idade = 30;
$pessoa2->nome = 'Lucas';


echo 'Idade de '. $pessoa->nome . ': ' . $pessoa->idade;
echo '<br>';
echo 'Idade de '. $pessoa2->nome . ': ' . $pessoa2->idade;
