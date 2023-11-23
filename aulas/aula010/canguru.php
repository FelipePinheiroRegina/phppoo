<?php 
require_once 'mamifero.php';

class Canguru extends Mamifero {
    // MÉTODOS
        public function usarBolsa(){
            echo "<p>Usando Bolsa</p>";
        }

        public function Locomover()
        {
            echo "<p>Saltando</p>";
        }
}
?>