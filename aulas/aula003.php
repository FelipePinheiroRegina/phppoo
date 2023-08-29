<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 003 - POO</title>
</head>
<body>
    <?php 
        // Criando uma Classe Caneta utilizando os Métodos.

        class Caneta {
            public $modelo;
            public $cor;
            private $ponta;
            private $tampada;
            
            // Criando um Construtor
            // no método construct posso usar o mesmo nome da classe ou __construct, para criar.
            public function __construct($m, $c, $p) {
               $this->modelo = $m;
               $this->cor = $c;
               $this->ponta = $p;
               $this->tampar(); 
            }
            

            public function tampar(){
                $this->tampada = true;
            }

            // Métodos Getters
            public function getModelo(){
                return $this->modelo;
            }

            public function getPonta(){
                return $this->ponta;
            }

            public function getCor(){
                return $this->cor;
            }

            // Métodos Setters
            public function setModelo($m){
                $this->modelo = $m;
            }

            public function setPonta($p){
                $this->ponta = $p;
            }
        }
    ?>
    <main>
        <h1>
            Métodos ( Getters, Setters, Construct )
        </h1>
        <pre>
        <?php 
            $c1 = new Caneta("Cis", "Vermelha", 0.1);
            $c2 = new Caneta('Bic', 'Azul', 0.5);
            
            echo "<p> Eu tenho uma <strong>Caneta</strong> ". $c1->getModelo() ." da <strong>Cor</strong> ". $c1->getCor() ." com a <strong>Ponta</strong> ". $c1->getPonta() . "</p>";
            
            echo "<p> Eu tenho uma <strong>Caneta</strong> ". $c2->getModelo() ." da <strong>Cor</strong> ". $c2->getCor() ." com a <strong>Ponta</strong> ". $c2->getPonta() . "</p>";
        ?>
        </pre>
    </main>
</body>
</html>