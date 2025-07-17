<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

 <main>
    <h1>Resultado do Cálculo</h1>

    <?php
        $idade = $_GET['idade'] ?? 1;
        $peso = $_GET['peso'] ?? 70;
        $altura = $_GET['altura'] ?? 1.70; // em metros
        $calculoSelecionado = $_GET['calculo'] ?? '';
        $genero = $_GET['genero'] ?? '';
        $resultado = null;

        if ($calculoSelecionado == 'imc') {
            if ($altura > 0) {
                $resultado = $peso / ($altura * $altura);
                echo "<p><strong>IMC:</strong> " . number_format($resultado, 2) . "</p>";
            } else {
                echo "<p>Altura inválida.</p>";
            }

        } elseif ($calculoSelecionado == 'tmb') {
            $alturaCm = $altura * 100; // TMB usa altura em cm
            if ($genero == 'masculino') {
                $resultado = 10 * $peso + 6.25 * $alturaCm - 5 * $idade + 5;
            } elseif ($genero == 'feminino') {
                $resultado = 10 * $peso + 6.25 * $alturaCm - 5 * $idade - 161;
            }

            if ($resultado !== null) {
                echo "<p><strong>TMB:</strong> " . number_format($resultado, 2) . " kcal/dia</p>";
            } else {
                echo "<p>Gênero não selecionado corretamente.</p>";
            }

        } else {
            echo "<p>Nenhum cálculo selecionado.</p>";
        }
    ?>

    <p><a href="javascript:history.back()">⟵ Voltar para a página anterior</a></p>
</main>
    
</body>
</html>