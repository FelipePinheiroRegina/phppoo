<?php 
require_once 'animal.php';

class Reptil extends Animal {
    // ATRIBUTOS 
        // PESO
        // IDADE
        // MEMBROS
        private $cordaEscama;
    
    // MÉTODOS
        public function Locomover()
        {
            echo "<p>Rastejando</p>";   
        }

        public function Alimentar()
        {
            echo "<P>Vegetais</P>";
        }

        public function emitirSom()
        {
            echo "<P>Som de Reptil</P>";
        }
    
    // GET e SET
        public function getCorEscama(){
            $this->cordaEscama;
        }

        public function setCorEscama($cor){
            $this->cordaEscama = $cor;
        }

}
?>