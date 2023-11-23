<?php 
abstract class Animal {
    //  ATRIBUTOS
        protected $peso;
        protected $idade;
        protected $membros;

    // MÉTODOS ABSTRATOS
        abstract function Locomover();
        abstract function Alimentar();
        abstract function emetirSom();

    //GETTERS E SETTERS
        // SOBRE PESO
            public function getPeso(){
                $this->peso;
            }

            public function setPeso($p){
                $this->peso = $p;
            }
        
        // SOBRE IDADE
            public function getIdade(){
                $this->idade;
            }

            public function setIdade($id){
                $this->idade = $id;
            }
        
        // SOBRE MEMBROS
            public function getMembros(){
                $this->membros;
            }

            public function setMembros($m){
                $this->membros = $m;
            }
}
?>