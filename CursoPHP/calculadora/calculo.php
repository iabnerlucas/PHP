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
        $altura = $_GET['altura'] ?? 1.70;
        $calculoSelecionado = $_GET['calculo'] ?? '';
        $genero = $_GET['genero'] ?? '';
        $fatorAtividade = $_GET['ativFis'] ?? '';
        $resultado = null;

        // Definindo o título da página
        $titulo = "";
        if ($calculoSelecionado == 'imc') {
            $titulo = "Resultado do IMC";
        } elseif ($calculoSelecionado == 'tmb') {
            $titulo = "Resultado da TMB";
        } elseif ($calculoSelecionado == 'get') {
            $titulo = "Resultado da GET";
        }

        echo "<h1>$titulo</h1>";

        // IMC
        if ($calculoSelecionado == 'imc') {
            if ($altura > 0) {
                $resultado = $peso / ($altura * $altura);
                echo "<p><strong>IMC:</strong> " . number_format($resultado, 2) . "</p>";

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
            $resultadoTmb = null;

            if ($genero == 'masculino') {
                $resultadoTmb = 10 * $peso + 6.25 * $alturaCm - 5 * $idade + 5;
            } elseif ($genero == 'feminino') {
                $resultadoTmb = 10 * $peso + 6.25 * $alturaCm - 5 * $idade - 161;
            }

            if ($resultadoTmb !== null) {
                echo "<p><strong>Você gasta</strong> " . number_format($resultadoTmb, 2, ',', '.') . " kcal/dia</p>";
            } else {
                echo "<p>Gênero não selecionado corretamente.</p>";
            }

        // GET
        } elseif ($calculoSelecionado == 'get') {
            $alturaCm = $altura * 100;
            $resultadoTmb = null;

            if ($genero == 'masculino') {
                $resultadoTmb = 10 * $peso + 6.25 * $alturaCm - 5 * $idade + 5;
            } elseif ($genero == 'feminino') {
                $resultadoTmb = 10 * $peso + 6.25 * $alturaCm - 5 * $idade - 161;
            }

            $resultadoGet = 0;
            if ($resultadoTmb !== null) {
                switch ($fatorAtividade) {
                    case 'sedentario':
                        $resultadoGet = $resultadoTmb * 1.2;
                        break;
                    case 'leve':
                        $resultadoGet = $resultadoTmb * 1.375;
                        break;
                    case 'moderado':
                        $resultadoGet = $resultadoTmb * 1.55;
                        break;
                    case 'ativo':
                        $resultadoGet = $resultadoTmb * 1.75;
                        break;
                    case 'muitoAtivo':
                        $resultadoGet = $resultadoTmb * 1.9;
                        break;
                }

                echo "<p><strong>Seu gasto energético total (GET):</strong> " . number_format($resultadoGet, 2, ',', '.') . " kcal/dia</p>";
            } else {
                echo "<p>Gênero não selecionado corretamente.</p>";
            }

        } else {
            echo "<p>Nenhum cálculo selecionado.</p>";
        }
        ?>

           <p><a href="javascript:history.back()" class="btn-voltar"> Voltar para a página anterior</a></p>
    </main>
</body>

</html>
