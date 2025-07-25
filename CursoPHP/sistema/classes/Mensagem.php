 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">


<?php 


    //A classe é o MOLDE de algo da vida real
    //atributos são características disto
    //Métodos são ações que isto faz, é uma função dentro da classe
    //objeto é quando damos algum valor pra esses atributos


    // class Calculo
    // {
    //     public $valor1;
    //     public $valor2;
    //     public $numMult;
    //     public $numDiv;

    //     public function multiplicacao()
    //     {
    //         $resultMulti = $this-> valor1 * $this-> valor2;
    //     echo 'A multiplicação entre '. $this->valor1 . ' e ' . $this->valor2 . ' resulta em: ' . $resultMulti . '<br>';
    //     }

    //     public function divisao()
    //     {
    //         $resultDiv = $this-> valor1 / $this-> valor2;
    //         echo 'A divisão entre '. $this->valor1 . ' e ' . $this->valor2 . ' resulta em: ' . $resultDiv . '<br>';
    //     }
    // }

    // $calculo = new Calculo();
    // $calculo-> valor1 = 6;
    // $calculo-> valor2 = 2;
    // $calculo-> multiplicacao();
    // $calculo->divisao();




    // class Conta
    // {
    //     public $dono;
    //     public $saldo;
    //     public $valorSaque;
        


    //     public function retirarDinheiro(){ //criação de um método
    //         $saldoFinal = $this->saldo - $this->valorSaque; //cálculo dentro do método: se usa '$this->' para pegar parâmetros que foram declarados fora do método

    //         echo $this->dono . ', o seu saldo final é:  ' . $saldoFinal .' reais. <br>'; //a mesma coisa para o '$this->'
    //     }

    // }

    // //criando o objeto
    // $conta = new Conta();
    // $conta->dono = 'Abner';
    // $conta->saldo = 150;
    // $conta->valorSaque = 100;
    // $conta->retirarDinheiro();


    // class Carro
    // {
    //     public $ano;
    //     public $modelo;
    //     public $velocidade;

    //     public function velocidadeMaxima()
    //     {
    //         echo $this->modelo . ' de ' . $this->ano . ' alcança ' . $this->velocidade . ' km/hora<br>';
    //     }
    // }

    // $uno = new Carro();
    // $uno->modelo = 'Uno';
    // $uno->ano = 2013;
    // $uno->velocidade = 240;
    // $uno->velocidadeMaxima();


    // class Aluno
    // {
    //     public $nota1;
    //     public $nota2;
    //     public $nome;

    //     public function calcularMedia(){
    //         $media = ($this->nota1 + $this->nota2)/2;
    //         echo 'A media do aluno '. $this->nome .' é '.  $media .' pontos. <br>';

    //         echo $media>=6 ? 'Aprovado</p>': 'Reprovado</p>';
    //     }
    // }

    // $aluno = new Aluno();
    // $aluno->nome = 'Abner';
    // $aluno->nota1 = 10;
    // $aluno->nota2 = 4;
    // $aluno->calcularMedia();

    // class filtrarEmail
    // {
    //     public $email;

    //     public function filtroEmail($email):bool
    //     {
    //         return filter_var($email, FILTER_VALIDATE_EMAIL);
    //     }
    // }

    // $emailChecker = new filtrarEmail();
    // echo $emailChecker->filtroEmail('teste@gmail.com') ? 'Email Válido' : 'Email Inválido';


    class Mensagem
    {
        private $texto;
        private $css;

        public function sucesso(string $mensagem):Mensagem
        {
            $this->css = 'alert alert-sucess';
            $this->texto = $this-> filtrar($mensagem);
            return $this;
        }

        public function renderizar()
        {
            return "<div class='{$this->css}' {$this->texto}</div>";
        }         

        private function filtrar(string $mensagem):string
        {
            return filter_var($mensagem, FILTER_DEFAULT);
        }
    }

    $msg = new Mensagem();
    echo $msg->sucesso('mensagem de sucesso')->renderizar();

    ?>