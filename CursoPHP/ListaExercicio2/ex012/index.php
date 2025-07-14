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
    $totalSeg = $_GET["seg"] ?? '0';
    ?>

    <main>
        <form action="<?= $_SERVER['PHP_SELF'];?>" method="get">

        <label for="seg">Informe o numero de segundos</label>
        <input type="number" name="seg" id="seg" value="<?= "$seg" ?>">
        <input type="submit" value="Calcular">
        </form>
    <?php 
    $sobra = $totalSeg;
    $semana = intdiv($totalSeg, 604800);
    $sobra = $totalSeg % 604800;    
    $dias = intdiv($sobra, 86400);
    $sobra = $sobra % 86400;
    $horas = intdiv($sobra, 3600);
    $sobra = $sobra % 3600;
    $minutos = intdiv($sobra, 60);
    $sobra = $sobra % 60;
    $segundos = $sobra;
    ?>
        <section>
            <h2>Totalizando tudo</h2>
            <p>Analizando o valor que vc informou, <?= $totalSeg?> segundos equivalem a: </p>
            <ul>
                <li><?=$semana?> semanas</li>
                <li><?=$dias?> dias</li>
                <li><?=$horas?> horas</li>
                <li><?=$minutos?> minutos</li>
                <li><?=$segundos?> segundos</li>
            </ul>
        </section>
    </main>
</body>
</html>