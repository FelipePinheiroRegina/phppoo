<?php 
// CLASSE ABSTRATA. CLASSE RAIZ, SUPER CLASSE, MÃE, PROGENITORA.
abstract class Pessoa{
    // ATRIBUTOS
    private $nome;
    private $idade;
    private $sexo;

    // MÉTODOS
    public function fazerAniver(){
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

    // -----
    public function setNome($n){
        $this->nome = $n;
    }

    public function setIdade($id){
        $this->idade = $id;
    }

    public function setSexo($sex){
        $this->sexo = $sex;
    }
}
?>