<?php 
require_once 'pessoa.php';
// CLASSE FILHA - HERANÇA PARA DIFERENÇA.
class Aluno extends Pessoa{
    // ATRIBUTOS
    private $matricula;
    private $curso;
    
    // MÉTODOS
    public function pagarMens(){

    }

    // GETTERS E SETTERS
    public function getMatricula(){
        $this->matricula;
    }

    public function getCurso(){
        $this->curso;
    }

    //-----
    public function setMatricula($mat){
        $this->matricula = $mat;
    }

    public function setCurso($cu){
        $this->curso = $cu;
    }
}
?>