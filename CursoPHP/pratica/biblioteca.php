<?php

use LDAP\Result;

abstract class Publicacao
{
    protected $titulo;
    protected $autor;
    protected $ano;
    const TIPO = 'Genérico';
    public static $totalProdutos= 0;


    public function __construct($titulo, $autor, $ano)
    {
        $this->titulo= $titulo;
        $this->autor= $autor;
        $this->ano= $ano;
        self::$totalProdutos++;
    }

    public static function getTotalProdutos(){
        return self::$totalProdutos;
    }
    abstract public function exibirDetalhes();
}


interface OperacoesItens
{
    public function emprestar();
    public function devolver();
}

class Livro extends Publicacao implements OperacoesItens
{
    const TIPO = 'Livro';
    public function emprestar(){return self::TIPO . ' '.$this->titulo . ' foi emprestado em 22/07/2025.'; }
    public function devolver(){return self::TIPO . ' '.$this->titulo . ' foi devolvido em 29/07/2025.';}
    public function exibirDetalhes(){ return $this->emprestar() . '<br>' . $this->devolver();}
}

class Revista extends Publicacao implements OperacoesItens
{
    const TIPO = 'Revista';
    public function emprestar(){return self::TIPO . ' '.$this->titulo . ' foi emprestado em 22/07/2025.'; }
    public function devolver(){return self::TIPO . ' '.$this->titulo . ' ffoi devolvido em 29/07/2025.';}
    public function exibirDetalhes()
    {
        return  $this->emprestar() . '<br>' . $this->devolver();
    }
}

$livro = new Livro('Dom Casmurro', 'Machado de Assis','1899');
echo $livro->exibirDetalhes();
echo '<br><br>';
$revista = new Revista('National Geografic', 'Vários', 2025);
echo $revista->exibirDetalhes();
echo '<br><br>';
echo 'Total de livros: ' . Publicacao::getTotalProdutos();
