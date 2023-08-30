<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 004 - POO</title>
</head>
<body>
    <!-- Transformando uma conta bancaria em um OBJETO. -->
    <?php 
        class contaBanco {
            public $numConta;
            protected $tipo;
            private $dono;
            private $saldo;
            private $status;

            // ------ CONSTRUTOR -------------------
            public function __construct()
            {
                $this->saldo = 0;
                $this->status = false;
            }


            // ------ FUNÇÕES -------------------
            public function abrirConta($t) {
                $this->settipo($t);
                $this->setstatus(true);
                if ($t == 'CC') {
                    $this->saldo = 50;
                }elseif ($t == 'CP') {
                    $this->saldo = 150;
                }
            }

            public function fecharConta() {
                if ($this->saldo > 0) {
                    echo "Esta conta contém dinheiro, saque-o, para fecha-la.";
                }elseif ($this->saldo < 0) {
                    echo "Conta com saldo negativo, acerte o pagamento para fecha-la.";
                }else {
                    $this->status = false;
                    echo "Conta fechada com sucesso!";
                }
            }

            public function depositar($v) {
                if ($this->status == true) {
                    $this->saldo = $this->saldo + $v;
                }else {
                    echo "Esta conta não existe.";
                }
            }
            
            public function sacar($v) {
                if ($this->status == true && $this->saldo > $v) {
                    $this->saldo = $this->saldo - $v;
                }else {
                    echo "Saldo insuficiente.";
                }
            }

            public function pagarMensal() {
                $mensalidade = 0;
                if ($this->gettipo() == 'CC') {
                    $mensalidade = 12;
                }elseif ($this->gettipo() == 'CP') {
                    $mensalidade = 20;
                }

                if ($this->getstatus() == true) {
                    if ($this->saldo > $mensalidade) {
                        $this->saldo = $this->saldo - $mensalidade;
                    }else {
                        echo "Saldo Insuficiente";
                    }
                }else {
                    echo "Conta não existe.";
                }
            }

            // ------ GETTERS -------------------
            public function getnumConta() {
                return $this->numConta;
            }

            public function gettipo() {
                return $this->tipo;
            }

            public function getdono() {
                return $this->dono;
            }

            public function getsaldo() {
                return $this->saldo;
            }

            public function getstatus() {
                return $this->status;
            }
            
            // ------ SETTERS -------------------
            public function setnumConta($c) {
                $this->numConta = $c;
            }

            public function settipo($t) {
                $this->tipo = $t;
            }

            public function setdono($d) {
                $this->dono = $d;
            }

            public function setsaldo($s) {
                $this->saldo = $s;
            }

            public function setstatus($sta) {
                $this->status = $sta;
            }

        }
    ?>
    
    
    <!-- ========= CORPO DO SITE ========== -->
    <main>
        <h1>Conta Bancária</h1>
        <pre>
        <?php 
            $conta_felipe = new contaBanco;
            $conta_felipe->abrirConta('CC');
            
            $conta_felipe->depositar(300);
            print_r($conta_felipe);
            
            $conta_felipe->sacar(100);
            $conta_felipe->pagarMensal();
            print_r($conta_felipe);
            
            // Adicionando valores com o SET
            //$conta_felipe->setnumConta(1234);
            //$conta_felipe->settipo('Conta Corrente');
            //$conta_felipe->setdono('Felipe Pinheiro');
            //$conta_felipe->setsaldo(1_772.00);
            //$conta_felipe->setstatus(true);
            
            
            
            
        ?>
        </pre>
    </main>
</body>
</html>