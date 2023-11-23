<?php 
require_once 'animal.php';

class Peixe extends Animal {
    // ATRIBUTOS
        // PESO
        // IDADE
        // MEMBROS
        private $corEscama;

    // MÉTODOS
        public function soltarBolha(){
            echo "<p>Soltou bolha</p>";
        }

        public function Locomover()
        {
            echo "<p>Nadando</p>";
        }
        
        public function Alimentar()
        {
            echo "<p>Substâncias</p>";
        }

        public function emitirSom()
        {
            echo "<p>Peixe não faz som</p>";
        }
    
    // GET e SET

        public function getCorEscama(){
            $this->corEscama;
        }

        public function setCorEscama($cor){
            $this->corEscama = $cor;
        }
}
?>