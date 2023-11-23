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
        echo "Correndo";
    }

    public function Alimentar()
    {
        echo "Mamando";
    }

    public function emetirSom()
    {
        echo "Som de Mamifero";
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