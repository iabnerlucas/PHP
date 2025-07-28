<?php 

// class Login
// {
//     public static $user;
    
//     public static function verificaLogin(){
//         echo 'O usuário '. self::$user .' está logado'; //para colocar uma variável estática dentro da função, é necessário usar o SELF
//     }
//     public function sairSistema(){
//         echo 'O usuário deslogou.';
//     }

// }


// //em métodos e atributos estáticos, não precisa instanciar, somente usar isso:
// Login::$user = 'admin';
// Login::verificaLogin();

// echo '<br>';


// //agora, se eu precisar acessar um método não estático, eu preciso instanciar
// $login = new Login();
// $login->sairSistema();

// echo '<br>';

// //Polimorfismo
// class Animal
// {
//     public function Andar()
//     {
//         echo 'O animal andou';
//     }

//     public function Correr(){
//         echo 'O animal correu ';
//     }
// }

// class Cavalo extends Animal
// {
//     //chamando um método dentro de um método
//     public function Andar(){
//     $this->correr();
//     }
// }

// $cavalo = new Cavalo();
// $cavalo->Andar();



//interfaces é um contrato que as classes que implemetam a interface são OBRIGADOS a criar os mesmos métodos (todos eles públicos)
interface Crud{

    public function create();
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud
{

    public function create( ){
        //logica para criar noticia 
    }
    public function read(){
        //logica para ler noticia
    }

    public function update(){
        //logica para atualizar noticia
    }

    public function delete(){
        //logica para apagar noticia
    }

}