<?php 

//var_dump($_SERVER); 

//criando um array

//$meses = array();
$meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']; //nessa string não coloquei índice, pois o PHP já cria automaticamente os índices para mim, começando do 0.

$mesesInd = ['j' => 'Janeiro', 'f' => 'Fevereiro', 'm' => 'Março', 'a' => 'Abril', 'ma' => 'Maio', 'ju' => 'Junho', 'jl' => 'Julho', 'ag' => 'Agosto', 's' => 'Setembro', 'o' => 'Outubro', 'n' => 'Novembro', 'd' => 'Dezembro']; //nesse caso, estou criando índices personalizados para cada mês.

var_dump($mesesInd);

echo '<br>';
echo '<br>';

var_dump($meses);

echo '<br>';
echo '<br>';

//acessando os valores do array através dos índices

echo $mesesInd['jl'];

echo '<br>';
echo '<br>';

//exibindo todos os valores do array com foreach

foreach ($mesesInd as $chave ){
    echo $chave . '<br>';
}


echo '<br>';
echo '<br>';


/**
 * Função que mostra a data atual formatada
 * @return string Retorna a data atual formatada como "Dia da semana, dia de mês de ano".
 */
function dataAtual (): String
{
    $diaSem = date('w'); //retorna o dia da semana, de 0 a 6, sendo 0 domingo e 6 sábado
    $dia = date('d'); //retorna o dia do mês 
    $mes = date('m'); //retorna o mês do ano
    $ano = date('Y'); //retorna o ano

    $diasSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado']; //array com os dias da semana
    $mesesDoAno = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']; //array com os meses do ano
    
    $dataFormatada =   $diasSemana[$diaSem] . ', ' .$dia . ' de ' . $mesesDoAno[$mes - 1] . ' de ' . $ano; //formata a data com os valores dos arrays

    return $dataFormatada; //retorna a data formatada
}

echo dataAtual();
