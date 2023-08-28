<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 002 - POO</title>
    <style>
        h1{
            font-family: 'Courier New', Courier, monospace;
            color: purple;
        }
    </style>
</head>
<body>
    <?php 
        // public = Atributo / Metodo ( Publico )
        // private = Atributo / Metodo ( Privado )
        // protected = Atributo / Metodo ( Protegido )
        
        class Caneta {
            // Atributos / Caracteristicas
            public $modelo;
            public $cor;
            private $ponta;
            protected $carga;
            protected $tampada;

            // Funções / Metodos

            public function escrever() {
                if ($this->tampada == True){
                    echo "<p> Caneta Tampada... Não posso escrever! </p>";
                }else{
                    echo "<p> Estou escrevendo, minha letra é muito formosa! </p>";
                }
            }

            public function tampar() {
                $this->tampada = true;
            }

            public function destampar() {
                $this->tampada = false;
            }
        }
    ?>
    <main>
        <h1>Configurando a visibilidade de atributos e metodos!</h1>
        <?php 
            $c1 = new Caneta;

            $c1->modelo = 'BIC';
            $c1->cor = 'Azul';
            
            $c1->tampar(); // Só posso alterar o estado de um atributo protegido, através de uma função publica.

            $c1->escrever();

        ?>
    </main>
</body>
</html>