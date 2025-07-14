<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../ex004/style.css">
</head>
<body>
    <main>
    <p>
    <?php 
    $numero = $_GET["numero"] ?? "desconhecido";
    $antecessor = $numero - 1;
    $sucessor = $numero + 1;

    echo "<p> O número informado foi: $numero <p> O antecessor é: $antecessor <p> O sucessor é: $sucessor ";
    ?>
    </p>
    <button onclick="javascript:window.location.href='antSuc.html'">&#x2B05 Voltar</button>
</main>
</body>
</html>