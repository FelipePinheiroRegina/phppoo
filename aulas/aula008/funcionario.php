<?php
require_once 'pessoa.php'; 
class Funcionario extends Pessoa{
    // ATRIBUTOS
    private $setor;
    private $trabalhando;

    // PROCEDIMENTOS
    public function mudarTrabalho(){

    }

    // GETTERS E SETTERS
    public function getSetor(){
        $this->setor;
    }
    
    public function getTrabalhando(){
        $this->trabalhando;
    }
    
    //-----
    public function setSetor($set){
        $this->setor = $set;
    }

    public function setTrabalhando($trab){
        $this->trabalhando = $trab;
    }
}
?>