<?php 
require_once 'pessoa.php';

class Gafanhoto extends Pessoa {
    // ATRIBUTOS
        private $login;
        private $totAssistido;

    // CONSTRUTOR
        public function __construct($nome, $idade, $sexo, $login)
        {
            parent::__construct($nome, $idade, $sexo);
            $this->login = $login;
            $this->totAssistido = 0;
        }
    
    // MÉTODOS
        public function viuMaisUm(){
            $this->totAssistido ++;
        }

    // GET E SET
        public function getLogin(){
            $this->login;
        }

        public function getTotAssistido(){
            $this->totAssistido;
        }


        public function setLogin($l){
            $this->login = $l;
        }

        public function setTotAssistido($tot){
            $this->totAssistido += $tot;
        }
}
?>