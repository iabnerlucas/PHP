<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="../stylepadrao.css">
</head>
<body>
    <?php 
    
    $dividendo = $_GET["d1"]??0;
    $divisor = $_GET["d2"]?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" min="0" value="<?=$d1?>">

            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" min="1" value="<?=$d2?>">

            <input type="submit" value="Calcular">

        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>

        <?php
        //Calculos

        $quociente= (int) ($dividendo/$divisor);

        $resto = $dividendo % $divisor;
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
        </tr>

        <tr>
            <td><?=$resto?></td>
            <td><?=$quociente?></td>
        </tr>
        </table>


    </section>
    
</body>
</html>