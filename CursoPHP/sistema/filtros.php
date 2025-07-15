<?php 

//nos filtros, você indica a variável a ser filtrada e logo após o tipo de filtro a ser utilizado.

/**
 * Valida um número inteiro
 * @param int $numero O número a ser validado
 * @return bool Retorna true se o número for um inteiro válido, caso contrário, retorna false
 */
function validarNumInt(int $numero): bool
{
    return filter_var($numero, FILTER_VALIDATE_INT) !== false; // Verifica se o número é um inteiro válido
}
echo validarNumInt(10) ? 'Número inteiro válido' : 'Número inválido'; // Exemplo de uso da função
 echo '<br>';

/** 
 * Valida um número de ponto flutuante
 * @param float $numeroFloat o número a ser validado
 * @return bool retorna true ou false, dependendo se o número for um float válido ou não
*/
function validarNumFloat($numero): bool
{
    return filter_var($numero, FILTER_VALIDATE_FLOAT);
}

// Testes:
echo validarNumFloat(10) ? 'número float válido' : 'número float inválido';
echo '<br>';
echo validarNumFloat('10.5') ? 'número float válido' : 'número float inválido';
echo '<br>';
echo validarNumFloat('abc') ? 'número float válido' : 'número float inválido';

echo '<br>';

/**
 * Valida uma URL
 * @param string $url url a ser validada
 * @return bool Retorna true se a URL for válida, caso contrário, retorna false
 */
function validarUrl(string $url):bool
{
    return filter_var($url, FILTER_VALIDATE_URL);
} 

// Exemplo de uso da função validarUrl
echo validarUrl('https://www.exemplo.com') ? 'URL válida' : 'URL inválida';

echo '<br>';

/**
 * Valida um endereço de email
 * @param string $email o email a ser validado
 * @return boll retornando o resultado da validação (T/F)
 */
function validarEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL); //filtro utilizado para validar o email, se for válido, retoma o valor true, senão, false.
}

if (validarEmail('teste@gmail.com')){
    echo 'Email válido';
} else {
    echo 'Email inválido';
}




