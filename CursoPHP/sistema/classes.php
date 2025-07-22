<?php 

//encapsulamento
// class LoginBanco
// {
//     private $titularConta;
//     private $email;
//     private $senha;

//     public function __construct($email, $senha, $titularConta)
//     {
//         $this->setEmail($email);
//         $this->setSenha($senha);
//         $this->setTitularConta($titularConta);
//     }
//     public function getEmail(){
//         return $this->titularConta;
//     }


//        public function setTitularConta($t){
//         $this->titularConta= ($t);
//     }


//     public function getTitularConta(){
//         return $this->email;
//     }

    // public function setEmail($e){
    // $email = filter_var($e, FILTER_SANITIZE_EMAIL);
    // if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $this->email = $email;
    // } else {
    //     echo "Email inválido";
    // }
// }

//     public function getSenha(){
//         return $this->senha;
//     }

//     public function setSenha($s){
//         $this->senha=  password_hash($s, PASSWORD_DEFAULT);
//     }

//     public function logar(){
//         if ($this->email == "abner@bancodobrasil.com" and $this->senha == 'BancodoBrasil2025'){
//             echo 'Logado com sucesso';
//         } else{
//             echo 'Login inválido';
//         }
//     }
// }

// $loginBanco = new LoginBanco('abner@bancodobrasil.com', 'BancodoBrasil2025', 'Abner');
// $loginBanco->logar();
// echo'<br>';
// echo 'Email inserido: '. $loginBanco->getEmail();
// echo'<br>';
// echo 'Senha inserida: '.$loginBanco -> getSenha();





//criando a classe
class Login
{
    //declarando os atributos da classe login
    private $titularConta;
    private $emailLogin;
    private $senhaLogin;

    //criação do costrutor
    public function __construct($emailLogin, $senhaLogin, $titularConta)
    {
        $this -> setEmailLogin($emailLogin);
        $this -> setSenhaLogin($senhaLogin);
        $this -> setTitulatConta($titularConta);
    }

    //criação dos getters e setters
    public function getEmailLongin(){
        return $this->emailLogin;
    }

    public function setEmailLogin($e){
        $emailLogin = filter_var($e, FILTER_SANITIZE_EMAIL); //dentro dos parâmetros set, vc coloca o novo nome dela
       
        if(filter_var($emailLogin, FILTER_SANITIZE_EMAIL)){
            $this->emailLogin = $emailLogin;
        } else{
            echo 'Email Inválido';
        }
    }

    public function getSenhaLogin(){
        return $this->senhaLogin;
    }

    public function setSenhaLogin($s){
           $this->senhaLogin=  password_hash($s, PASSWORD_DEFAULT);
    }

    public function getTitularConta(){
        return $this-> titularConta;
    }
    public function setTitulatConta($t){
        $this->titularConta = $t;
    }

    //criando a função Logar
    public function Logar()
    {
        if ($this->emailLogin == 'teste@teste.com' AND $this->senhaLogin == 'teste123'){
            echo 'Logado com sucesso <br>';
        } else{
            echo 'Login inválido <br>';
        }
    }


}

//criando o novo objeto 
$loginBanco = new Login('teste@teste.com', 'teste123', 'Abner');
$loginBanco -> logar();

echo 'Email inserido: ' . $loginBanco -> getEmailLongin();
echo '<br>';
echo 'Senha inserida: ' . $loginBanco -> getSenhaLogin();
