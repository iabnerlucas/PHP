<?php 

$numero = 1;

while ($numero >= 1){
    echo $numero--;
    echo '<br>';
}

for ($i=1; $i <=10; $i++)
{
    echo ($i % 2 ? $i . ' impar' . '<br>' : $i . " par".'<br>' );
   
}
