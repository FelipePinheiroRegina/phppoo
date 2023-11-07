<?php 
class Pessoa{
    // Atributos
    private $nome;
    private $idade;
    private $sexo;

    // Procedimentos
    public function fazerAnive(){
        $this->idade++;
    }

    // GETTERS E SETTERS
    public function getNome(){
        $this->nome;
    }

    public function getIdade(){
        $this->idade;
    }

    public function getSexo(){
        $this->sexo;
    }

    //-----
    public function setNome($n){
        $this->nome = $n;
    }

    public function setIdade($i){
        $this->idade = $i;
    }

    public function setSexo($s){
        $this->sexo = $s;
    }

}
?>