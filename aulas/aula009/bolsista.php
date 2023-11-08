<?php
require_once 'aluno.php';
// FILHA DE ALUNO E DESCENDENTE DE PESSOA - HERANÇA PARA DIFERENÇA
class Bolsista extends Aluno{
    // ATRIBUTOS
    private $bolsa;

    // MÉTODOS
    public function RenovarBolsa(){

    }

    // SOBREPOR / POLIMORFISMO
    public function pagarMens(){

    }

    // GETTERS E SETTERS
    public function getBolsa(){
        $this->bolsa;
    }

    //-----
    public function setBolsa($bo){
        $this->bolsa = $bo;
    }
}
?>