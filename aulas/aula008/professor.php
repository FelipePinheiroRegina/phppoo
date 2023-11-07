<?php
require_once 'pessoa.php'; 
class Professor extends Pessoa{
    // ATRIBUTOS
    private $especialidade;
    private $salario;

    // PROCEDIMENTOS
    public function receberAum($a){
        $this->salario+$a;
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