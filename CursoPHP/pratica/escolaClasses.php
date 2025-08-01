<?php 

class Professor
{
    public $nome;
}

class Aluno 
{
    public $nome;

    public function aprenderCom(Professor $professor){ //$professor é o nome dado nessa classe pro objeto professor que será o parâmetro.
        echo 'Aluno ' . $this->nome . ' está aprendendo com o professor ' . $professor->nome;
    } //Como parâmetro ele retorn o objeto Professor, com a variável nome do professor sendo utilizada na mensagem.
}

class Turma
{
    public $nome;
    public $alunos =[];

    public function adicionaAluno(Aluno $aluno){
        $this->alunos[] = $aluno; //Adiciona o aluno ao array de alunos da turma. É uma agregação. 
    }
}

class Sala
{
    public $nome; 

    public function __construct($nome){$this->nome = $nome;} //no construtor deve ser retornado um parâmetro(nome)
}

class Escola
{
    private $salas = []; //Array de salas

    public function adicionarSala(Sala $sala){
        $this->salas[] = new Sala ('Sala 101');
        $this->salas [] = new Sala('Sala 102');
        $this->salas [] = new Sala('Sala 103');
    }

    public function getMostrarSalas(){
        foreach ($this->salas as $sala){
            echo 'Sala: ' . $sala->nome;
        }
    }
}