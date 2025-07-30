<?php 

class Escola {
    public $salas;
    public $professor = [];

    public function __construct(Professor $professor) {
        // COMPOSIÇÃO: a escola cria e contém suas salas
        $this->salas = [
            new Sala('Sala1'),
            new Sala('Sala2'),
            new Sala('Sala3')
        ];

        // AGREGAÇÃO: professores vêm de fora, mas são associados
        $this->professor[] = $professor;
    }

    public function exibirSalas() {
        foreach ($this->salas as $sala){
            echo 'Sala: ' . $sala->nome . '<br>';
        }
    }

    public function exibirProfessor() {
        foreach ($this->professor as $professor){
            echo 'Professor: ' . $professor->nome . '<br>';
        }
    }
}

class Sala {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

class Professor {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

class Aluno {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    // ASSOCIAÇÃO: aluno se relaciona com professor, mas não o possui
    public function terAula(Professor $professor, Escola $escola) {
        echo 'O aluno ' . $this->nome . ' está tendo aula com o professor ' . $professor->nome . '<br>';
    }

    public function terAulaNaEscola(Escola $escola) {
        echo 'O aluno ' . $this->nome . ' está tendo aula na escola.<br>';
        $escola->exibirSalas();
        $escola->exibirProfessor();
    }
}

// Teste
$aluno = new Aluno('Abner');
$professor = new Professor('Professor Thiago'); 
$escola = new Escola($professor);

$aluno->terAula($professor, $escola);
echo "<br>";
$aluno->terAulaNaEscola($escola);
