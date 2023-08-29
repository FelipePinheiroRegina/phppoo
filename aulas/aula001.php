<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 001 - POO</title>
</head>
<body>
        <?php
            // Criando um objeto caneta
            class Caneta {
                var $modelo;
                var $cor;
                var $ponta;
                var $carga;
                var $tampada;

                function rabiscar() {
                    if ($this->tampada == True){
                        echo "<p>ERRO, caneta tampada!</p>";
                    }else{
                        echo "<p>Estou rabiscando!</p>";
                    }
                    
                }

                function tampar() {
                    $this->tampada = true;
                }

                function destampar() {
                    $this->tampada = false; 
                }
            }
        ?>
    <main>
        <h1>Criando Classes e Objetos em PHP</h1>
        <?php 
            // Adicionando caracteristicas a minha caneta C1.
            $c1 = new Caneta;
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            
            // Funções tampa e destampa da caneta c1.
            //$c1->destampar();
            $c1->tampar();

            $c1->rabiscar();
           

            // Adicionando caracteristicas a minha caneta C2.
            $c2 = new Caneta;
            $c2->cor = "Vermelha";
            $c2->carga = 50;

            // Funções tampa e destampa da centa c2.
            //$c2->destampar();
            $c2->tampar();

            $c2->rabiscar();

            print_r($c1);
            echo "<br>";
            print_r($c2);

        ?>
        
    </main>
</body>
</html>