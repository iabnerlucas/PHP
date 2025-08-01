<?php 

class Clinica {
    private $nome;
    private $salas = [];

    public function __construct($nome){
        $this->setNome($nome);
        $this->criarSalas(); // Composição
    }

    private function criarSalas(){
        $this->salas[] = new Sala(101, "Consulta");
        $this->salas[] = new Sala(102, "Exames");
    }

    public function listarSalas(){
        foreach ($this->salas as $sala) {
            echo "Sala: " . $sala->getNumero() . " - " . $sala->getTipo() . "<br>";
        }
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getSalas(){
        return $this->salas;
    }
}


class Medico
{
    private $nome;
    public $especialidade;

    public function getNome(){return $this->nome;}

    public function setNome($nome){$this->nome = $nome;}

    public function __construct($nome, $especialidade){$this->setNome($nome); $this->especialidade = $especialidade;}

    public function getEspecialidade()
    {
        return $this->especialidade;
    }
}

class Paciente
{
    private $nome;

    public function getNome(){return $this->nome;}

    public function setNome($nome){$this->nome = $nome;}

    public function __construct($nome){$this->setNome($nome);}

    public function medicoConsulta(Medico $medico)
    {
        echo 'Médico responsável: ' . $medico->getNome() . '<br>';
    }


}

class Consulta
{
    private $medico;
    private $paciente;
    private $data;
    private $sala;


    public function __construct(Medico $medico, Paciente $paciente, $data, Sala $sala)
    {
     $this->data = $data;
     $this->medico = $medico;
     $this->paciente = $paciente;
     $this->sala = $sala;
    }

    public function exibirConsulta()
    {
        echo "Consulta marcada!<br>";
        echo "Data: " . $this->data . "<br>";
        echo "Paciente: " . $this->paciente->getNome() . "<br>";
        echo "Médico: Dr(a). " . $this->medico->getNome() . " (" . $this->medico->getEspecialidade() . ")<br>";
        echo "Sala: " . $this->sala->getNumero() . " - Tipo: " . $this->sala->getTipo() . "<br>";
        echo '<hr>';
    }
}

class Sala{
    private $numero;
    private $tipo;

    public function __construct($numero, $tipo)
    {
        $this->numero = $numero;
        $this->tipo = $tipo;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
}

$clinica = new Clinica('Sabin');
$medico = new Medico('Dr. Pedro', 'Cardiologia');
$paciente = new Paciente ('Abner');
$salasDisp = $clinica->getSalas();
$sala = $salasDisp[0]; 
$consulta = new Consulta($medico, $paciente, '2023-10-01 10:00', $sala);
$consulta->exibirConsulta();

$clinica2 = new Clinica('Fleming');
$medico2 = new Medico('Dr. João', 'Ortopedista');
$paciente2 = new Paciente ('Lucas');
$salasDisp2 = $clinica->getSalas();
$sala2 = $salasDisp2[0]; 
$consulta2 = new Consulta($medico2, $paciente2, '2025-07-31 08:00', $sala2);
$consulta2->exibirConsulta();