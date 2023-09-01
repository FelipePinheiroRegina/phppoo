<?php
require_once 'controlador.php'; 
class controleRemoto implements controlador{
    // Atributos
    private $volume;
    private $ligado;
    private $tocando;

    // Function especiais
    function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    // Setters
    private function setVolume($vol) {
        $this->volume = $vol;
    }

    private function setLigado($lig) {
        $this->ligado = $lig;
    }

    private function setTocando($toc) {
        $this->tocando = $toc;
    }

    // Getters
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    // Métodos do controle
    public function ligar() {
        if ($this->getLigado() == false) {
            $this->setLigado(true); 
        }
    }

    public function desligar() {
        if ($this->getLigado() == true) {
            $this->setLigado(false); 
        }
    }

    public function abrirMenu() {
        if ($this->getLigado() == true) {
            echo "<h2> MENU </h2>";
            echo "<p>Está Ligado?: " . ($this->getLigado()?"SIM":"NÃO") . "</p>";
            echo "<p>Está Tocando?: " . ($this->getTocando()?"SIM":"NÃO") . "</p>";
            echo "<p>Volume: " . ($this->getVolume());
            for ($c=0; $c <= $this->getVolume(); $c+=10){
                echo " |";
            }
            echo "</p>";
        }else {
            echo "ERRO, TV DESLIGADA.";
        }
    }

    public function fecharMenu() {
        if ($this->getLigado() == true) {
            echo "Fechando Menu";
        }else {
            echo "ERRO, TV DESLIGADA.";
        }
        
    }

    public function maisVolume() {
        if ($this->getLigado() == true) {
            $this->setVolume($this->getVolume() + 10);
        }else {
            echo "ERRO, TV DESLIGADA.";
        }
        
    }

    public function menosVolume() {
        if ($this->getLigado() == true) {
            $this->setVolume($this->getVolume() - 10);
        }else {
            echo "ERRO, TV DESLIGADA.";
        }
    }

    public function ligarMudo() {
        if ($this->getVolume() > 0 && $this->getLigado()) {
            $this->setVolume(0);
        }else {
            echo "ERRO, TV DESLIGADA";
        }
    }

    public function desligarMudo() {
        if ($this->getVolume() == 0 && $this->getLigado()) {
            $this->setVolume(50);
        }
    }

    public function play() {
        if ($this->getLigado() && ! $this->getTocando()) {
            $this->setTocando(true);
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
    
}


?>