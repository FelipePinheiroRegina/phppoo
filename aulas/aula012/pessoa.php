<?php 
abstract class Pessoa {
    // ATRIBUTOS
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

    // CONSTRUTOR
        public function __construct($nome, $idade, $sexo)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->experiencia = 0;
        }    
    
    // MÉTODOS
        protected function ganharExp($qtd){
            $this->experiencia += $qtd;
        }

    // GET E SETERS
        public function getNome(){
            $this->nome;
        }
        
        public function getIdade(){
            $this->idade;
        }

        public function getSexo(){
            $this->sexo;
        }

        public function getExperiencia(){
            $this->experiencia;
        }



        public function setNome($n){
            $this->nome = $n;
        }

        public function setIdade($i){
            $this->idade = $i;
        }

        public function setSexo($s){
            $this->sexo = $s;
        }

        public function setExperiencia($e){
            $this->experiencia = $e;
        }

}
?>