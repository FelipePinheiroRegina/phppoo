<?php
require_once 'pessoa.php'; 
class Aluno extends Pessoa{
    // ATRIBUTOS
    private $matricula;
    private $curso;

    // PROCEDIMENTOS
    public function cancelarMatr(){
        echo "<p> MATRICULA CANCELADA!<p>";
    }

    // GETTERS E SETTERS
    public function getMatricula(){
        $this->matricula;
    }
    
    public function getCurso(){
        $this->curso;
    }
    
    //-----
    public function setMatricula($m){
        $this->matricula = $m;
    }

    public function setCurso($c){
        $this->curso = $c;
    }
}
?>