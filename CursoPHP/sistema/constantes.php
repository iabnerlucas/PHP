<?php 

define('SITE_DESCRICAO', 'Curso de PHP - Aprenda do Bás ico ao Avançado');
define('SITE_NOME', 'Curso PHP');



define ('URL_PRODUCAO', 'https://www.cursophp.com.br');
define ('URL_DESENVOLVIMENTO', 'http://localhost/CursoPHP');





/** 
 * Essa função verefica se o servidor é localhost
 * @return string Retorna uma mensagem dependendo se o servidor é localhost ou não.
*/ 
function localhost():string
{
    $servidor  = filter_input(INPUT_SERVER, 'SERVER_NAME'); 
    //server name É UMA CONSTANTE
    //input server é uma forma de PEGAR DADOS DO SERVIDOR
    //filter_input é um filtro que vai filtrar o nome do servidor
    

    if ($servidor = 'localhost')
    {
        return 'O servidor é localhost';
    } else
    {
        return 'O servidor não é localhost';
    }
}

/**
 * Esta função valida a url do site, se for localhost, retorna a URL de desenvolvimento, caso contrário, retorna a URL de produção.
 * @param string $url a URL a ser validada
 * @return string Retorna a URL completa com o ambiente correto (desenvolvimento ou produção).
 */
 function url (string $url):string
{
 $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
 $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

return $ambiente . $url;
 }

echo localhost();
echo '<br>';
echo url('/notícias/blog');