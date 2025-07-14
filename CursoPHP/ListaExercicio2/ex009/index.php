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
        $v1 = $_GET["v1"]?? 0;
        $v2 = $_GET["v2"]?? 0;
        $p1 = $_GET["p1"]?? 1;
        $p2 = $_GET["p2"]?? 1;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Informe o valor 1: </label>
            <input type="number" name="v1" id="v1" value="<?= $v1 ?>">

            <label for="p1">Informe o peso 1: </label>
            <input type="number" name="p1" id="p1" value="<?= $p1 ?>">

            <label for="v2">Informe o valor 2 </label>
            <input type="number" name="v2" id="v2" value="<?= $v2?>">

            <label for="p2">Informe o peso 2: </label>
            <input type="number" name="p2" id="p2" value="<?= $p2?>">

            <input type="submit" value="Calcular">
        </form>

    <section>
        <?php 
        $medSim = ($v1 + $v2)/2;
        $medPond = (($v1 * $p1)+ ($v2*$p2))/($p1+$p2);

        echo "<p>A média simples é: $medSim <br> A média ponderada é: $medPond</p>"
        ?>
    </section>
    </main>
</body>
</html>