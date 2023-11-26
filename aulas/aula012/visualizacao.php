<?php 
require_once 'video.php';
require_once 'gafanhoto.php';

class Visualizacao {
    // ATRIBUTOS
        private $espectador;
        private $filme;
    
    // CONSTRUTOR
        public function __construct($espect, $film)
        {
            $this->espectador = $espect;
            $this->filme = $film;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        }
    
    // MÉTODOS
        public function avarliar(){
            $this->filme->setAvaliacao(5);
        }

        public function avaliarNota($nota){
            $this->filme->setAvaliacao($nota);
        }

        public function avaliarPorc($porc){
            $novaNota = 0;
            if ($porc < 20) {
                $novaNota = 3;
            } elseif ($porc <= 50) {
                $novaNota = 5;
            } elseif ($porc <= 80) {
                $novaNota = 8;
            } else {
                $novaNota = 10;
            }

            $this->filme->setAvaliacao($novaNota);
        }

    // GET E SET
        public function getEspectador(){
            $this->espectador;
        }

        public function getFilme(){
            $this->filme;
        }

        public function setEspectador($esp){
            $this->espectador = $esp;
        }

        public function setFilme($fil){
            $this->filme = $fil;
        }

}
?>