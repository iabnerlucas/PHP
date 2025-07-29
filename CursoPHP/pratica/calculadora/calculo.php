<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php

        // Coletando dados via GET
        $idade = $_GET['idade'] ?? 1;
        $peso = $_GET['peso'] ?? 70;
        $altura = $_GET['altura'] ?? 1.70; // em metros
        $calculoSelecionado = $_GET['calculo'] ?? '';
        $genero = $_GET['genero'] ?? '';
        $fatorAtividade = $_GET['ativFis'] ?? '';
        $resultado = null;

        // Título dinâmico
        $titulo = '';
        if ($calculoSelecionado == 'get') {
            $titulo = 'Resultado GET';
        } elseif ($calculoSelecionado == 'tmb') {
            $titulo = 'Resultado TMB';
        } elseif ($calculoSelecionado == 'imc') {
            $titulo = 'Resultado IMC';
        }

        echo "<h1>$titulo</h1>";

        // Cálculo IMC
        if ($calculoSelecionado == 'imc') {
            if ($altura > 0) {
                $resultado = $peso / ($altura * $altura);
                echo "<p><strong>IMC:</strong> " . number_format($resultado, 2) . "</p>";

                if ($resultado <= 18.5) {
                    echo "<p>Faixa: <strong>Magreza</strong></p>";
                } 
                elseif ($resultado <= 24.9) {
                    echo "<p>Faixa: <strong>Normal</strong></p>";
                }
                elseif ($resultado <= 29.9) {
                    echo "<p>Faixa: <strong>Sobrepeso</strong></p>";
                } 
                else {
                    echo "<p>Faixa: <strong>Obesidade</strong></p>";
                }
            } else {
                echo "<p>Altura inválida para o cálculo do IMC.</p>";
            }

        // Cálculo TMB
        } elseif ($calculoSelecionado == 'tmb') {
            $alturaCm = $altura * 100;

            if ($genero == 'masculino') {
                $resultadoTmb = 10 * $peso + 6.25 * $alturaCm - 5 * $idade + 5;
            } elseif ($genero == 'feminino') {
                $resultadoTmb = 10 * $peso + 6.25 * $alturaCm - 5 * $idade - 161;
            } else {
                $resultadoTmb = null;
            }

            if ($resultadoTmb !== null) {
                echo "<p><strong>Seu gasto energético basal (TMB):</strong> " . number_format($resultadoTmb, 2, ',', '.') . " kcal/dia</p>";
            } else {
                echo "<p>Gênero não selecionado corretamente.</p>";
            }

        // Cálculo GET
        } elseif ($calculoSelecionado == 'get') {
            $alturaCm = $altura * 100;

            if ($genero == 'masculino') {
                $resultadoTmb = 10 * $peso + 6.25 * $alturaCm - 5 * $idade + 5;
            } elseif ($genero == 'feminino') {
                $resultadoTmb = 10 * $peso + 6.25 * $alturaCm - 5 * $idade - 161;
            } else {
                $resultadoTmb = null;
            }

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
                    default:
                        $resultadoGet = null;
                }

                if ($resultadoGet !== null) {
                    echo '<strong><p>Com FA sendo ' . $fatorAtividade . ', você gastará <br>' . number_format($resultadoGet, 2, ',', '.') . ' kcal/dia </strong>';
                    echo '<br>';
                } else {
                    echo "<p>Você gasta $resultadoTmb kcal/dia</p>";
                }
            } else {
                echo "<p>Gênero não selecionado corretamente para cálculo da TMB.</p>";
            }

        // Nenhuma opção válida
        } else {
            echo "<p>Nenhum cálculo selecionado.</p>";
        }
        


        //forma simplificada

        
        // function calcularTMB($genero, $peso, $idade, $altura)
        // {
        //     if ($genero == 'masculino') {
        //         return 10 * $peso + 6.25 * ($altura * 100) - 5 * $idade + 5;
        //     } elseif ($genero == 'feminino') {
        //         return 10 * $peso + 6.25 * ($altura * 100) - 5 * $idade - 161;
        //     }
        //     return  'Não foi possível calcular';
        // }

        // function calcularGET($fatorAtividade)
        // {
        //     $fatores = [
        //         'sedentario' => 1.2,
        //         'leve' => 1.375,
        //         'moderado' => 1.55,
        //         'ativo' => 1.75,
        //         'muitoAtivo' => 1.9
        //     ];

        //     return $fatores[$fatorAtividade] ?? null;
        // }

        // if ($calculoSelecionado == 'imc') {
        //     $imc = $peso / ($altura * $altura);
        //     echo '<p>Seu imc atual é:' . number_format($imc, 2, ',', '.') . ' </p>';
        //     if ($imc <= 18.5) {
        //         echo '<p>Faixa: <strong>Magreza</strong></p>:';
        //     }
        //     if ($imc <= 24.9) {
        //         echo '<p>Faixa: <strong>Normal</strong></p>:';
        //     }
        //     if ($imc <= 29.9) {
        //         echo '<p>Faixa: <strong>Sobrepeso</strong></p>:';
        //     }
        //     if ($imc >= 30) {
        //         echo '<p>Faixa: <strong>Obesidade</strong></p>:';
        //     }
        // } elseif ($calculoSelecionado == 'tmb') {
        //     $tmb = calcularTMB($genero, $peso, $idade, $altura);
        //     if ($tmb !== null) {
        //         echo '<p>A sua Taxa Metabólica Basal é ' . $tmb . ' kcal/dia. </p>';
        //     } else {
        //         echo '<p>Não foi possível calcular </p>';
        //     }
        // } elseif ($calculoSelecionado == 'get') {
        //     $tmb = calcularTMB($genero, $peso, $idade, $altura);
        //     if ($tmb !== null) {
        //         $fa = calcularGET($fatorAtividade);
        //         if ($fa !== null) {
        //             $get = $tmb * $fa;
        //             echo '<p>O cálculo GET baseado no seu peso, altura, fator de atividade e idade é: ' . number_format($get, 2, ',', '.') . ' kcal/dia</p>';
        //         } else {
        //             echo '<p>Fator de atividade inválido.</p>';
        //         }
        //     } else {
        //         echo '<p>Não foi possível calcular.</p>';
        //     }
        // }
        ?>

        <p><a href="javascript:history.back()" class="btn-voltar"> Voltar para a página anterior</a></p>
    </main>
</body>

</html>