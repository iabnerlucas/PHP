<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>

        <?php
        // Coletando dados enviados por GET
        $idade = $_GET['idade'] ?? 1;
        $peso = $_GET['peso'] ?? 70;
        $altura = $_GET['altura'] ?? 1.70; // metros
        $calculoSelecionado = $_GET['calculo'] ?? '';
        $genero = $_GET['genero'] ?? '';
        $resultado = null;

        // Definindo título com base na escolha do cálculo
        $titulo = "Resultado do Cálculo";
        if ($calculoSelecionado == 'imc') {
            $titulo = "Resultado do IMC";
        } elseif ($calculoSelecionado == 'tmb') {
            $titulo = "Resultado da TMB";
        }

        echo "<h1>$titulo</h1>";

        // IMC
        if ($calculoSelecionado == 'imc') {
            if ($altura > 0) {
                $resultado = $peso / ($altura * $altura);
                echo "<p><strong>IMC:</strong> " . number_format($resultado, 2) . "</p>";

                // Classificação
                if ($resultado <= 18.5) {
                    echo "<p>Faixa: <strong>Magreza</strong></p>";
                } elseif ($resultado <= 24.9) {
                    echo "<p>Faixa: <strong>Normal</strong></p>";
                } elseif ($resultado <= 29.9) {
                    echo "<p>Faixa: <strong>Sobrepeso</strong></p>";
                } else {
                    echo "<p>Faixa: <strong>Obesidade</strong></p>";
                }
            } else {
                echo "<p>Altura inválida para cálculo do IMC.</p>";
            }

        // TMB
        } elseif ($calculoSelecionado == 'tmb') {
            $alturaCm = $altura * 100;

            if ($genero == 'masculino') {
                $resultado = 10 * $peso + 6.25 * $alturaCm - 5 * $idade + 5;
            } elseif ($genero == 'feminino') {
                $resultado = 10 * $peso + 6.25 * $alturaCm - 5 * $idade - 161;
            }

            if ($resultado !== null) {
                echo "<p><strong>TMB:</strong> " . number_format($resultado, 2, ',' , '.') . " kcal/dia</p>";
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
