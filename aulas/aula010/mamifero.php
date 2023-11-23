<?php 
require_once 'animal.php';

class Mamifero extends Animal{
    // Peso
    // Idade
    // Membros
    private $corPelo;
    
    // MÉTODOS DE SOBREPOSIÇÃO.
    public function Locomover()
    {
        echo "<P>Correndo</P>";
    }

    public function Alimentar()
    {
        echo "<P>Mamando</P>";
    }

    public function emitirSom()
    {
        echo "<P>Som de Mamifero</P>";
    }

    // GET e SET
    
        // SOBRE O PELO
            public function getCorPelo(){
                $this->corPelo;
            }

            public function setCorPelo($CP){
                $this->corPelo = $CP;
            }

        // SOBRE A LOCOMOÇÃO
            public function getLocomover(){
                $this->Locomover();
            }

            public function setLocomover($loc){
                $this->Locomover($loc);
            }
        
        // SOBRE A ALIMENTAÇÃO
            public function getAlimentar(){
                $this->Alimentar();
            }

            public function setAlimentar($ali){
                $this->Alimentar($ali);
            }
        // SOBRE O SOM DO ANIMAL
}
?>