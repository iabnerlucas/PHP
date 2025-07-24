<?php 

class Helpers{


function formatarValor(?float $valor = null): string
{
    return number_format ($valor, 2, ',','.');
}
//number_format é usado para definir uma formatação para o número, o numero de casas decimais (pós-vírgula), o separador de decimais (,) e o separador de milhar(.)


function validarCpf(string $cpf): bool
{
    // Remove non-numeric characters
    $cpf = preg_replace('/\D/', '', $cpf);

    // Check length and repeated digits
    if (mb_strlen($cpf) != 11 || preg_match('/^(\d)\1{10}$/', $cpf)) {
        return false;
    }

    return true;
}





function saudacao()
{
    $hora = date('H'); // Obtém a hora atual no formato 24 horas
    $saudacao = '';

    if ($hora >= 0 && $hora <= 5) {
        $saudacao = 'boa madrugada';
    } elseif ($hora >= 6 && $hora <= 12) {
        $saudacao = 'bom dia';
    } elseif ($hora >= 13 && $hora <= 18) {
        $saudacao = 'boa tarde';
    } else {
        $saudacao = 'boa noite';
    }

    
}




//documentação

/**  
 * Resume um texto 
 * 
 * @param string $texto O texto a ser resumido
 * @param int $limite O número máximo de caracteres do resumo
 * @param string $continue opcional - o que deve ser exibido ao final do resumo 
 * @return string O texto resumido
*/




function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    $textoLimpo = trim($texto);

    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    } //se o numero de letras for menor ou igual ao limite, retorna o texto limpo

    $subTexto = mb_substr($textoLimpo, 0, $limite, 'UTF-8');
    $ultimaPosicaoEspaco = mb_strrpos($subTexto, ' '); // encontra o último caracter em branco e coloca dentro da variável $ultimaPosicaoEspaco

    // Se não encontrar espaço, corta direto no limite
    if ($ultimaPosicaoEspaco === false) {
        $resumido = $subTexto; //o texto resumido será o texto com o máximo de caracteres permitido, caso não encontre espaço
    } else {
        $resumido = mb_substr($textoLimpo, 0, $ultimaPosicaoEspaco, 'UTF-8'); // se encontrar espaço, o texto resumido vai ser o texto cortado até o último espaço encontrado. 
    }

    return $resumido . $continue;
}

/**
 * Conta o tempo decorrido desde uma data específica
 * @param string $data A data a ser comparada no formato 'Y-m-d H:i:s'
 * @return string Uma string representando o tempo decorrido
 */
function  contarTempo(string $data)
{
    $agora = strtotime(date('Y-m-d H:i:s')); 
    $tempo = strtotime($data); 
    $diferenca = $agora - $tempo; 
   
    $segundos = $diferenca;
    $minutos = round($segundos/60);
    $horas = round($segundos/3600); 
    $dias = round($segundos/86400);
    $semanas = round($segundos/604800); 
    $meses = round($segundos/2629440);
    $anos = round($segundos/31553280);


    if ($segundos <= 60) {
        return 'agora';
    } elseif ($minutos <= 60){
        return $minutos . ' minutos atrás';
    } elseif ($horas <= 24){
        return $horas . ' horas atrás';
    } elseif ($dias <= 30){
        return $dias . ' dias atrás';
    } elseif ($semanas <= 4){
        return $semanas . ' semanas atrás';
    } elseif ($meses <= 12){
        return $meses . ' meses atrás';
    } else {
        return $anos . ' anos atrás';
    }
}
}

//nos filtros, você indica a variável a ser filtrada e logo após o tipo de filtro a ser utilizado.

