<?php

// Associação
class Patinete
{
    public $cor;

    public function __construct($cor)
    {
        $this->cor = $cor;
    }
}

class Criança
{
    private $nome;

    public function getNome(){return $this->nome;}
    public function setNome($n){$this->nome = $n;}

    public function brincarComPatinete(Patinete $patinete)
    {
      echo $this->getNome() . ' está brincando com o patinete de cor ' . $patinete->cor . '<br>';
    }

}

echo 'Exemplo de Associação:<br>';
$patinete = new Patinete('vermelha');
$crianca = new Criança();
$crianca->setNome('Abner');
$crianca->brincarComPatinete($patinete);

//Agregação

class Aluno
{
    public $nome; 

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}


class Escola
{
    public $alunos = [];

    public function adicionarAluno(Aluno $aluno)
    {
        $this->alunos[] = $aluno;
    }

    public function exibirAlunos(){
        foreach ($this->alunos as $aluno){
            echo 'Aluno: ' . $aluno->nome . '<br>';
        }
    }
}


echo 'Exemplo de Agregação:<br>';
$aluno1 = new Aluno('João');
$aluno2 = new Aluno('Maria');
echo '<br>';
//$escola = new Escola();
$escola->adicionarAluno($aluno1);
$escola->adicionarAluno($aluno2);
$escola->exibirAlunos();
echo '<br>';

//Composição

class Comodo
{

    public $nome;
      public function __construct($nome) {
        $this->nome = $nome;
    }
}


class Casa
{
    private $comodos = [];

    public function __construct(){
        $this->comodos[] = new Comodo('Sala');
        $this->comodos[] = new Comodo('Cozinha');
        $this->comodos[] = new Comodo('Quarto');
    }
    public function exibirComodos()
    {
        foreach ($this->comodos as $comodo) {
            echo 'Comôdo: ' . $comodo->nome . '<br>';
        }
    }
}

echo 'Exemplo de Composição:<br>';
$casa = new Casa();
$casa->exibirComodos();

