<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../../ex004/style.css">
</head>
<body>
    <main>
        <h1>Somador de Valores</h1>

        <?php 
        $valor1 = $_GET["v1"]??0;
        $valor2 = $_GET["v2"]??0;
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get"> <!-- A SUPERGOBAL $_SERVER SERVE PARA MOSTRAR O NOME DO ARQUIVO DENTRO DELE MESMO-->
        <label for="v1">Valor 1</label>
        <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">  <!--O COMANDO $valor1 FAZ COM QUE AQUELA ENTRADA DE DADOS RECEBA O VALOR QUE SERÁ ARMAZENADO NA VARIÁVEL VALOR1 -->
        <label for="v2">Valor 2</label>
        <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
        <input type="submit" value="Somar"> 
    </form>

    <section>
        <?php
        $soma = $valor1 + $valor2;
        echo "<p>A soma de $valor1 e $valor2 <strong>é igual a $soma.</p></strong>";
        ?>
    </section>
    </main>
</body>
</html>