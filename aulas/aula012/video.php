<?php 
require_once 'interface.php';

class Video implements AcoesVideo {
    // ATRIBUTOS
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

    // CONSTRUTOR
        public function __construct($titulo)
        {
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

    // MÉTODOS ABSTRATOS DA CLASS AÇÕES VIDEO
        public function play()
        {
            $this->reproduzindo = true;
        }

        public function pause()
        {
            $this->reproduzindo = false;
        }

        public function like()
        {
            $this->curtidas ++;
        }
    
    // GETS E SETS PRIVADOS PARA MEXER NOS ATRIBUTOS DESSA CLASSE.
        public function getTitulo(){
            $this->titulo;
        }
        
        public function getAvaliacao(){
            $this->avaliacao;
        }

        public function getViews(){
            $this->views;
        }

        public function getCurtidas(){
            $this->curtidas;
        }

        public function getReproduzindo(){
            $this->reproduzindo;
        }
        // ----------------------------------------
        public function setTitulo($titu){
            $this->titulo = $titu;
        }

        public function setAvaliacao($ava){
            $media = ($this->avaliacao + $ava) / $this->views;
            $this->avaliacao += $media;
        }

        public function setViews($vie){
            $this->views += $vie;
        }   

        public function setCurtidas($curt){
            $this->curtidas = $curt;
        }

        public function setReproduzindo($rep){
            $this->reproduzindo = $rep;
        }

}
?>