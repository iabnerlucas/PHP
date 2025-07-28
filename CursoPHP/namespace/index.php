<?php 

require 'classes/produtos.php';
require 'models/produtos.php';

//uso de namespaces 

use pratica1\Produtos as productModel;
use pratica\Produtos as productClasses;


$produto1 = new productClasses();
$produto1->mostrarDetalhes();

echo '<br>';

$produto = new productModel();
$produto->mostrarDetalhes();