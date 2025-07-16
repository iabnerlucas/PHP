<?php 
//primeira função: mb_strlen

$total = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book';

$novoTotal = mb_strlen($total); // Obtém o tamanho total do texto (caracteres), incluindo espaços
echo $novoTotal; // Exibe o tamanho total do texto


//segunda função: mb_substr

$novoTotal = mb_substr(trim($total), 0, 20);

echo '<br>';

echo $novoTotal; // Exibe a parte do texto com 30 caracteres usando o TRIM que tira os caracters vazios do início e do final do texto



//terceira função: TRIM

$novoTotal = trim($total); // Remove espaços em branco no início e no final do texto

echo '<br>';

echo $novoTotal; // Exibe o texto sem espaços no início e no final

//quarta função: mb_strrpos

$novoTotal = mb_strrpos($total, 'p'); // Encontra a posição da última ocorrência de um espaço no texto
echo '<br>';

echo $novoTotal; // Exibe a posição da última ocorrência do caractere 'L'

echo '<br>';

$frase = '     abacaxi     ';

$fraseLimpa = trim($frase); // Remove espaços em branco no início e no final do texto

echo $frase;
echo '<br>';
echo $fraseLimpa; 

