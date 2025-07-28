<?php
namespace App\Veiculos;

// Classe abstrata
abstract class Veiculos {
    private $marca;
    private $modelo;
    private $ano;
    const TIPO = 'Genérico';
    private static $totalVeiculos = 0;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        self::$totalVeiculos++;
    }

    public function getMarca() { return $this->marca; }
    public function setMarca($m) { $this->marca = $m; }

    public function getModelo() { return $this->modelo; }
    public function setModelo($mo) { $this->modelo = $mo; }

    public function getAno() { return $this->ano; }
    public function setAno($a) { $this->ano = $a; }

    public static function getTotalVeiculos() {
        return self::$totalVeiculos;
    }

    abstract public function exibirDetalhes();

    public function __clone() {
        $this->modelo .= " (clone)";
        self::$totalVeiculos++;
    }
}

// Interface
interface OperacoesVeiculos {
    public function ligar();
    public function desligar();
}

// Classe Carro
class Carro extends Veiculos implements OperacoesVeiculos {
    const TIPO = 'Carro';

    public function ligar() {
        echo $this->getMarca() . ' ' . $this->getModelo() . " está ligado.<br>";
    }

    public function desligar() {
        echo $this->getMarca() . ' ' . $this->getModelo() . " está desligado.<br>";
    }

    public function exibirDetalhes() {
        echo self::TIPO . ': ' . $this->getModelo() . ', Ano: ' . $this->getAno() . '<br>';
    }
}

// Classe Moto
class Moto extends Veiculos implements OperacoesVeiculos {
    const TIPO = 'Moto';

    public function ligar() {
        echo $this->getMarca() . ' ' . $this->getModelo() . " está ligado.<br>";
    }

    public function desligar() {
        echo $this->getMarca() . ' ' . $this->getModelo() . " está desligado.<br>";
    }

    public function exibirDetalhes() {
        echo self::TIPO . ': ' . $this->getModelo() . ', Ano: ' . $this->getAno() . '<br>';
    }
}

echo "Criando veículos...<br><br>";

$carro1 = new Carro("Chevrolet", "Onix", 2020);
$moto1 = new Moto("Honda", "CG 160", 2022);

$carro1->exibirDetalhes();
$moto1->exibirDetalhes();

echo "<br>Ligando veículos...<br>";
$carro1->ligar();
$moto1->ligar();

echo "<br><br>Desligando veículos...<br>";
$carro1->desligar();
$moto1->desligar();

echo "<br><br>Clonando carro...<br>";
$carroClone = clone $carro1;
$carroClone->exibirDetalhes();

echo "<br><br>Total de veículos: " . Veiculos::getTotalVeiculos();