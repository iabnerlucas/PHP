<?php 


// class Login
// {
//     private $email;
//     private $senha;
//     private $nome;

//     public function __construct($email, $senha, $nome){
//         $this-> setEmail($email);
//         $this-> setSenha($senha);
//         $this->nome = $nome;
//     }

//     public function getNome(){
//         return $this->nome;
//     }

//     public function getEmail(){
//         return $this->email;
//     }

//     public function setEmail($e){
//         $this->email = $e;
//     }

//      public function getSenha(){
//         return $this->senha;
//     }

//       public function setSenha($s){
//         $this->senha = $s;
//     }

//     public function Logar(){
//         if ($this->email == 'teste@teste.com' AND $this->senha == 'abacaxi'){
//             echo 'Logado com sucesso <br>';
//         } else {
//             echo 'Login inválido <br>';
//         }

//     }
// }

// $logar = new Login('teste@teste.com', '123456', 'Abner');
// $logar->logar();
// echo $logar-> getSenha();
// echo '<br>';
// echo $logar-> getEmail();

class LoginBanco
{
    private $titularConta;
    private $email;
    private $senha;

    public function __construct($email, $senha, $titularConta)
    {
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->titularConta = $titularConta;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
    $email = filter_var($e, FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $this->email = $email;
    } else {
        echo "Email inválido";
    }
}

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha=  password_hash($s, PASSWORD_DEFAULT);
    }

    public function logar(){
        if ($this->email == "abner@bancodobrasil.com" and $this->senha == 'BancodoBrasil2025'){
            echo 'Logado com sucesso';
        } else{
            echo 'Login inválido';
        }
    }
}

$loginBanco = new LoginBanco('abner@bancodobrasil.com', 'BancodoBrasil2025', 'Abner');
$loginBanco->logar();
echo'<br>';
echo 'Email inserido: '. $loginBanco->getEmail();
echo'<br>';
echo 'Senha inserida: '.$loginBanco -> getSenha();

