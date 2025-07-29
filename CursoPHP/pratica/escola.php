<?php

// Classe abstrata Pessoa: nome, idade, CPF.
// Interface Atividades: métodos identificar() e atividadePrincipal().
// Classe Aluno e Professor herdam de Pessoa e implementam Atividades.
// Método estático getTotalPessoas() e contador de instâncias.
// Constantes TIPO = 'Aluno' ou TIPO = 'Professor'.
// Método exibirDetalhes() polimórfico.


abstract class Pessoa
{
    private $nome;
    private $idade;
    private $cpf;
    const TIPO = 'Genérico';
    private static $totalPessoas = 0;

    public function getNome()
    {
        return $this->nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function getCpf()
    {
        return $this->cpf;
    }

    public function setNome($n)
    {
        $this->nome = $n;
    }
    public function setIdade($i)
    {
        $this->idade = $i;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    abstract public function exibirDetalhes();

    public function __construct($nome, $idade, $cpf)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        self::$totalPessoas++;
    }

    public static function getTotalPessoas()
    {
        return self::$totalPessoas;
    }
}

interface Atividades
{
    public function identificar();
    public function atividadePrincipal();
}


class Aluno extends Pessoa implements Atividades
{
    const TIPO = 'Aluno';

    public function identificar()
    {
        echo self::TIPO . ': ' . $this->getNome() . '(CPF: ' . $this->getCpf() . ') <br>';
    }

    public function atividadePrincipal()
    {
        echo $this->getNome() . " está assistindo à aula.<br>";
    }

    public function exibirDetalhes()
    {
        $this->identificar() . '<br>';
        $this->atividadePrincipal() . '<br>';
    }
}




class Professor extends Pessoa implements Atividades
{
    const TIPO = 'Professor';

    public function identificar()
    {
        echo self::TIPO . ': ' . $this->getNome() . '(CPF: ' . $this->getCpf() . ') <br>';
    }

    public function atividadePrincipal()
    {
        echo $this->getNome() . " está dando à aula.<br>";
    }

    public function exibirDetalhes()
    {
        $this->identificar() . '<br>';
        $this->atividadePrincipal() . '<br>';
    }
}

$aluno = new Aluno("Lucas", 20, "123.456.789-00");
$prof = new Professor("Carla", 35, "987.654.321-00");

$aluno->exibirDetalhes();
echo '<br>';
$prof->exibirDetalhes();

echo '<br>';

echo "Total de pessoas: " . Pessoa::getTotalPessoas();
