<?php

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

    return $saudacao;
}

// $texto e $limite são parâmetros
// :string define o tipo de retorno
function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    $textoLimpo = trim($texto);

    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    $subTexto = mb_substr($textoLimpo, 0, $limite, 'UTF-8');
    $ultimaPosicaoEspaco = mb_strrpos($subTexto, ' ');

    // Se não encontrar espaço, corta direto no limite
    if ($ultimaPosicaoEspaco === false) {
        $resumido = $subTexto;
    } else {
        $resumido = mb_substr($textoLimpo, 0, $ultimaPosicaoEspaco, 'UTF-8');
    }

    return $resumido . $continue;
}
