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
    $salario = $_GET["salario"] ?? 0;
    $minimo = $_GET["minimo"] ?? 1512;
    ?>

<main>
    <header>Cálculo Salários Mínimos</header>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <label for="salario">Informe o salário: </label>
        <input type="number" name="salario" id="salario" value=" <?= $salario ?> step="0.01" min="1">

        <label for="minimo">Informe o valor do salário mínimo: </label>
        <input type="number" name="minimo" id="minimo" value="<?= $minimo ?> step="0.01" min="1">

        <input type="submit" value="Calcular">
    </form>

    <section>
   <h3>Resultado</h3>

    <?php 
    $sobra = $salario % $minimo;
    $qtdMinimos = intdiv($salario, $minimo);
    

    echo "<p>O salário de R$ $salario corresponde a $qtdMinimos salários mínimos e sobram R$ $sobra.</p>";
   
    ?>
 </section>
</main>

</body>
</html>