<?php 
require_once 'aluno.php';
// FILHA DE ALUNO E DESCENDENTE DE PESSOA - HERANÇA PARA DIFERENÇA
class Tecnico extends Aluno{
    // ATRIBUTOS
    private $resgistroProfissional;

    //MÉTODOS
    public function praticar(){

    }

    // GETTERS E SETTERS
    public function getRegistro(){
        $this->resgistroProfissional;
    }

    //-----
    public function setRegistro($re){
        $this->resgistroProfissional = $re;
    }
    
}
?>