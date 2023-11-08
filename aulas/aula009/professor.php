<?php
require_once 'pessoa.php';

// CLASSE FILHA - HERANÇA PARA DIFERENÇA. 
class Professor extends Pessoa{
    // ATRIBUTOS
    private $especialidade;
    private $salario;

    // MÉTODOS
    public function receberAumento($aum){
        $this->salario += $aum;
    }

    // GETTERS E SETTERS
    public function getEspecialidade(){
        $this->especialidade;
    }

    public function getSalario(){
        $this->salario;
    }
    
    //-----
    public function setEspecialidade($esp){
        $this->especialidade = $esp;
    }

    public function setSalario($sal){
        $this->salario = $sal;
    }
}
?>