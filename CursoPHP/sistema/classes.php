<?php


//criando a classe
// class Login
// {
//     //declarando os atributos da classe login
//     private $titularConta;
//     private $emailLogin;
//     private $senhaLogin;

//     //criação do costrutor
//     public function __construct($emailLogin, $senhaLogin, $titularConta)
//     {
//         $this -> setEmailLogin($emailLogin);
//         $this -> setSenhaLogin($senhaLogin);
//         $this -> setTitulatConta($titularConta);
//     }

//     //criação dos getters e setters
//     public function getEmailLongin(){
//         return $this->emailLogin;
//     }

//     public function setEmailLogin($e){
//         $emailLogin = filter_var($e, FILTER_SANITIZE_EMAIL); //dentro dos parâmetros set, vc coloca o novo nome dela

//         if(filter_var($emailLogin, FILTER_SANITIZE_EMAIL)){
//             $this->emailLogin = $emailLogin;
//         } else{
//             echo 'Email Inválido';
//         }
//     }

//     public function getSenhaLogin(){
//         return $this->senhaLogin;
//     }

//     public function setSenhaLogin($s){
//            $this->senhaLogin=  password_hash($s, PASSWORD_DEFAULT);
//     }

//     public function getTitularConta(){
//         return $this-> titularConta;
//     }
//     public function setTitulatConta($t){
//         $this->titularConta = $t;
//     }

//     //criando a função Logar
//     public function Logar()
//     {
//         if ($this->emailLogin == 'teste@teste.com' AND $this->senhaLogin == 'teste123'){
//             echo 'Logado com sucesso <br>';
//         } else{
//             echo 'Login inválido <br>';
//         }
//     }


// }

// //criando o novo objeto 
// $loginBanco = new Login('teste@teste.com', 'teste123', 'Abner');
// $loginBanco -> logar();

// echo 'Email inserido: ' . $loginBanco -> getEmailLongin();
// echo '<br>';
// echo 'Senha inserida: ' . $loginBanco -> getSenhaLogin();

// class veiculo
// {

//     protected $modelo;
//     public $cor;
//     public $ano;

//     protected function andar()
//     {
//         echo 'Andou';
//     }

//     public function mostrarAcao(){
//         $this->andar();
//     }
//     public function parar()
//     {
//         echo 'Parou';
//     }

//     public function getModelo(){
//         return $this->modelo;
//     }

//     public function setModelo($m){
//         $this->modelo = $m;
//     }
// }



// class Carro extends veiculo
// {
//     public function ligarLimpador()
//     {
//         echo 'Limpando em 3,2,1...';
//     }

//     public function mostrarAcao(){
//         $this->andar();
//     }
// }

// class moto  extends veiculo
// {
//     public function darGrau()
//     {
//         echo 'Dando Grau em 3,2,1...';
//     }
// }

// $carro = new Carro();
// $carro->setModelo('Uno 2013');
// echo $carro->getModelo();
// echo '<br>';
// $carro->cor = 'Prata';
// $carro->ano = 2018;
// $carro->mostrarAcao();
// echo '<br>';
// $carro->ligarLimpador();
// echo '<br>';
// //var_dump($carro);
// echo '<br>';

// $moto = new Moto();
// $moto->setModelo('Suzuki');
// echo $moto->getModelo();
// echo '<br>';
// $moto->ano = 2014;
// $moto->cor = 'Preta';
// $moto->parar();
// echo '<br>';
// $moto->darGrau();
// echo '<br>';
// var_dump($moto);

abstract class Banco //serve como modelo para outras classes, se tornando impossível de instanciar diretamente;
{
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

class Itau extends Banco
{
      public function Sacar($s){
        $this->saldo-=$s;
        echo 'Saque de: '. $s . ' reais.';
    }

    public function Depositar($d){
        $this->saldo+=$d;
        echo 'Depósito de: '. $d . ' reais.';
    }
}

class Bradesco extends Banco
{
      public function Sacar($s){
        $this->saldo-=$s;
        echo 'Saque de: '. $s . ' reais.';
    }

    public function Depositar($d){
        $this->saldo+=$d;
        echo 'Depósito de: '. $d . ' reais.';
    }
}

$itau = new itau();
$itau->setSaldo(1000);
echo '<br> Saldo:' . $itau->getSaldo();
echo '<br>';
$itau-> Sacar(250);
echo '<br>';
echo 'Saldo final: ' .$itau-> getSaldo();
echo '<br>';
$itau->Depositar(850);
echo '<br>';
echo 'Saldo atualizado: ' . $itau->getSaldo();