<?php 
require_once 'mamifero.php';

class Cachorro extends Mamifero {
    // MÉTODOS
        public function morderOsso(){
            echo "<p>Mordendo o Osso</p>";
        }

        public function abanarRabo(){
            echo "<p>Abanando o Rabo</p>";
        }

        public function emitirSom()
        {
            echo "<p>AUUU AUUUU!</p>";
        }
}
?>