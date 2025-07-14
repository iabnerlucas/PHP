<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="../stylepadrao.css">
</head>
<body>

<?php 
    $anoRef = $_GET["anoRef"]?? 2025;
    $anoNasc = $_GET["anoNasc"]?? 0;
?>
    <main>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="anoNasc">Informe o ano em que você nasceu:</label>
        <input type="number" name="anoNasc" id=anoNasc value="<?= $anoNasc ?>">
        <label for="anoRef">Quer saber a idade em qual ano?(ano atual: 2025)</label>
        <input type="number" name="anoRef" id="anoRef" value="<?= $anoRef ?>">
        <input type="submit" value="Calcular">
        </form>
        
        <section>
            <h3>Resultado</h3>
            <?php 
            $idade = $anoRef - $anoNasc;

            echo "Idade em $anoRef: $idade";
            ?>

        </section>
    </main>
</body>
</html>