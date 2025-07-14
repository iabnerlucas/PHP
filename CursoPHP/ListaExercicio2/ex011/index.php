<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="../stylepadrao.css">
</head>
<body>
    <?php 
    $preco = $_GET["preco"] ?? 0;
    $reaj = $_GET["reaj"] ?? '0';
    ?>
    <main>
    <h1>Calculo de Porcentagem</h1>
    <form action="<?= $_SERVER['PHP_SELF'];?>" method="get">
    <label for="preco">Informe o preço do produto: </label>
    <input type="number" name="preco" id="preco" value="<?= "$preco" ?>  min="0.10">
    <label for="reaj">Qual será o percentual do reajuste? <strong><span id="p">?</span>%</strong></label>
    <input type="range" name="reaj" id="reaj" value="<?= $reaj ?>" min="0" max="100" step="1" oninput="mudaValor()">
    <input type="submit" value="Reajustar">
    </form>
</main>
<?php 
$aumento = $preco * $reaj / 100;
$novoPreco = $preco + $aumento;
?>
<section>
    <h2>Resultado do Reajuste</h2>
    <p>O produto que custava R$<?=$preco?> com <strong><?= $aumento?> de aumento </strong>vai passar a custar <strong>R$<?=$novoPreco?></strong> a partir de agora</p>
</section>
<script>
mudaValor();
    function mudaValor() {
        
        p.innerText = reaj.value;
    }
</script>
</body>
</html>