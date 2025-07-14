<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
    <link rel="stylesheet" href="../../ex004/style.css">
</head>
<body>
    <main>
        <h1>Número aleatório</h1>
    <p>    
    
    <?php 
    $min = 0;
    $max = 250;

    $num = mt_rand($min, $max);

    echo "Gerando um número aleatório entre <strong>$min</strong> e <strong> $max</strong>";
    echo " <br> O número gerado foi<strong> $num</strong>"
    
    ?>
    <button onclick="javascript:document.location.reload()">Gerar Outro</button>
    </main>
</p>
</body>
</html>