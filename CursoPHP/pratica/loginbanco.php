<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco do Brasil</title>
    <link rel="stylesheet" href="style.css">
    <style>
  body {
    font-family: Arial, sans-serif;
    display: flex; justify-content: center; align-items: center;
    height: 100vh; margin: 0;
    background: #f4f0ff;
  }
  .container {
    background: #fff;
    padding: 40px;
    border-radius: 16px;
    width: 370px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    text-align: center;
  }
  button {
    width: 200px;
    padding: 14px;
    background: linear-gradient(135deg, #820ad1, #9e1fff);
    color: #fff;
    font-weight: 600;
    font-size: 16px;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    margin: 0 auto;
    display: block;
    box-shadow: 0 4px 12px rgba(130, 10, 209, 0.3);
    transition: all 0.3s ease;
  }
  button:hover {
    background: linear-gradient(135deg, #6d09b3, #820ad1);
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(130, 10, 209, 0.4);
  }
</style>
</head>
<body>

    <div class="container">
        <h2>Login do Banco</h2>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="titular">Insira o nome do titular:</label>
            <input type="text" name="titular" id="titular" placeholder="Digite o nome do titular da conta" required>

            <label for="email">Insira seu email de acesso:</label>
            <input type="text" name="email" id="email" placeholder="Digite seu email" required>

            <label for="senha">Insira sua senha:</label>
            <input type="text" name="senha" id="senha" placeholder="Digite sua senha" required>

            <input type="submit" value="Entrar">
        </form>

        <div class="mensagem">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['email'])) {

                class Login {
                    private $titularConta;
                    private $emailLogin;
                    private $senhaLogin;

                    public function __construct($emailLogin, $senhaLogin, $titularConta) {
                        $this->setEmailLogin($emailLogin);
                        $this->setSenhaLogin($senhaLogin);
                        $this->setTitularConta($titularConta);
                    }

                    public function getEmailLogin() {
                        return $this->emailLogin;
                    }

                    public function setEmailLogin($e) {
                        $emailLogin = filter_var($e, FILTER_SANITIZE_EMAIL);
                        if (filter_var($emailLogin, FILTER_VALIDATE_EMAIL)) {
                            $this->emailLogin = $emailLogin;
                        } else {
                            echo 'Email inválido<br>';
                        }
                    }

                    public function getSenhaLogin() {
                        return $this->senhaLogin;
                    }

                    public function setSenhaLogin($s) {
                        $this->senhaLogin = password_hash($s, PASSWORD_DEFAULT);
                    }

                    public function getTitularConta() {
                        return $this->titularConta;
                    }

                    public function setTitularConta($t) {
                        $this->titularConta = $t;
                    }

                    public function logar($senhaDigitada) {
                        $emailCorreto = 'teste@teste.com';
                        $senhaCorreta = 'teste123';

                        if (
                            $this->emailLogin === $emailCorreto &&
                            password_verify($senhaCorreta, $this->senhaLogin)
                        ) {
                            echo 'Logado com sucesso<br>';
                        } else {
                            echo 'Login inválido<br>';
                        }
                    }
                }

                $login = new Login($_GET['email'], $_GET['senha'], $_GET['titular']);
                $login->logar($_GET['senha']);

            //     echo 'Email inserido: ' . $login->getEmailLogin() . '<br>';
            //     echo 'Titular da conta: ' . $login->getTitularConta() . '<br>';
            //     echo 'Senha criptografada: ' . $login->getSenhaLogin() . '<br>';
            }
        ?>
        </div>
    </div>

</body>
</html>
