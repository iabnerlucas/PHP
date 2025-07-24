<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Banco - Operações</title>
    <link rel="stylesheet" href="estiloteste.css">
</head>
<body>
<div class="container">
    <h1>Banco - Itau</h1>

    <form method="GET">
        <label for="saldo">Saldo inicial:</label>
        <input type="number" name="saldo" id="saldo" required>

        <label for="saque">Valor do saque:</label>
        <input type="number" name="saque" id="saque" required>

        <label for="deposito">Valor do depósito:</label>
        <input type="number" name="deposito" id="deposito" required>

        <button type="submit">Executar</button>
    </form>

    <div class="output">
        <?php
        if (isset($_GET['saldo']) && isset($_GET['saque']) && isset($_GET['deposito'])) {
            $saldoInicial = (float) $_GET['saldo'];
            $valorSaque = (float) $_GET['saque'];
            $valorDeposito = (float) $_GET['deposito'];

            abstract class Banco {
                protected $saldo;
                protected $limiteSaque;
                protected $juros;

                abstract protected function Sacar($s);
                abstract protected function Depositar($d);

                public function getSaldo(){
                    return $this->saldo;
                }

                public function setSaldo($s){
                    $this->saldo = $s;
                }
            }

            class Itau extends Banco {
                public function Sacar($s){
                    $this->saldo -= $s;
                    echo "<p>Saque de: <strong>$s</strong> reais.</p>";
                }

                public function Depositar($d){
                    $this->saldo += $d;
                    echo "<p>Depósito de: <strong>$d</strong> reais.</p>";
                }
            }

            $itau = new Itau();
            $itau->setSaldo($saldoInicial);

            echo "<p>Saldo inicial: <strong>$saldoInicial</strong> reais.</p>";
            $itau->Sacar($valorSaque);
            echo "<p>Saldo após saque: <strong>" . $itau->getSaldo() . "</strong> reais.</p>";
            $itau->Depositar($valorDeposito);
            echo "<p>Saldo final: <strong>" . $itau->getSaldo() . "</strong> reais.</p>";
        }
        ?>
    </div>
</div>
</body>
</html>
