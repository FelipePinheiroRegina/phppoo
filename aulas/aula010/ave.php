<?php 
require_once 'animal.php';

class Ave extends Animal {
    // ATRIBUTOS
        // PESO
        // IDADE
        // MEMBROS
        private $corPena;
    
    // MÉTODOS
        public function fazerNinho(){
            echo "<p>Fazendo ninho</p>";
        }

        public function Locomover()
        {
            echo "<p>Voando</p>";
        }

        public function Alimentar()
        {
            echo "<p>Comendo Frutas</p>";
        }

        public function emitirSom()
        {
            echo "<p>Som de Ave</p>";
        }
    
    // GET e SET
        public function getCorPena(){
            $this->corPena;
        }

        public function setCorPena($cp){
            $this->corPena = $cp;
        }
}
?>