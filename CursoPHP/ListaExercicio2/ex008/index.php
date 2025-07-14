<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="../stylepadrao.css">
</head>
<body>
    <?php 
    $num = $_GET["num"] ?? 0;
    ?>
    <main>
        <h1>Calculo de Raízes</h1>
        <form action="<?= $_SERVER['PHP_SELF'];?>" method="get">
            <label for="num">Informe o número: </label>
            <input type="number" name="num" id="num" value="<?= "$num"?>">
            <input type="submit" value="Calcular">
        </form>

        <section>
            <?php 
            $rq = sqrt($num);
            $rc = $num ** (1/3);

            echo "<p>A raiz quadrada de $num é: $rq <br> A raiz cúbica de $num é: $rc</p>";
            ?>
        </section>
    </main>
</body>
</html>