<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Resultado do Processamento</h1></header>
    <main>
    <?php 
        $n = $_GET["nome"] ?? "sem nome";
        $s = $_GET["sobrenome"] ?? "desconhecido";

        echo "<p>É um prazer te conhecer, $n $s! Este é o meu site. ";
    ?>
// "** é potencia" / % é o resto da divisão / * é a multiplicação / "/" é a divisão

    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html> 