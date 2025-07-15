<?php 

//declare(strict_types=1);
require_once 'configuracao.php';
include_once 'helper.php';


$texto = 'texto para se resumir vindo de uma variável';

/*
echo $total = mb_strlen(trim($texto)); // Obtém o tamanho total do texto (caracteres), excluindo espaços no início e no final
echo '<br>';

echo $resumo = mb_substr($texto, 2, 15); // Obtém uma parte do texto, começando do índice 2 e com comprimento de 15 caracteres
echo '<br>';

echo $ocorrencia = mb_strrpos($texto, ' '); // Encontra a posição da última ocorrência de um espaço no texto
echo '<br>';

//echo saudacao();
//echo '<br>';
//print resumirTexto($texto, 50, 'continue ');

*/

echo resumirTexto($texto, 10, 'continue');
?>