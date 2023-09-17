<?php 
    // OBJETO LIVRO
    //-------------
    // ATRIBUTOS
    // - titulo
    // - autor
    // - totPaginas
    // - pagAtual
    // - aberto
    // - leitor
    // -------------
    // FUNÇÕES
    // + detalhes()

    require_once 'pessoa.php';
    require_once 'publicacao.php';
    
    class Livro implements publicacao{
        //__ATRIBUTOS
            private $titulo;
            private $autor;
            private $totPaginas;
            private $pagAtual;
            private $aberto;
            private $leitor;
        
        //__FUNÇÕES
            public function detalhes() {
                echo "<p>--------------------------------------------------</p>";
                echo "<p>Nome do livro: " . $this->getTitulo() . "</p>";
                echo "<p>Nome do autor: " . $this->getAutor() . "</p>";
                echo "<p>Leitor: " . $this->getLeitor()->getNome() . "</p>";
                echo "<p>Quantidade de Páginas: " . $this->getTotPaginas() ."</p>";
                echo "<p>Página Atual: " . $this->getPagAtual() . "</p>";
                
            }

        //__CONSTRUTOR
            function __construct($p_titulo, $p_autor, $p_totpaginas, $p_leitor)
            {
                $this->setTitulo($p_titulo);
                $this->setAutor($p_autor);
                $this->setTotPaginas($p_totpaginas);
                $this->setPagAtual(0);
                $this->setAberto(false);
                $this->setLeitor($p_leitor);
            }
        
        //__MÉTODOS MODIFICADORES
            public function setTitulo($parametro_titulo) {
                $this->titulo = $parametro_titulo;
            }
            
            public function setAutor($parametro_autor) {
                $this->autor = $parametro_autor;
            }
            
            public function setTotPaginas($parametro_totPaginas) {
                $this->totPaginas = $parametro_totPaginas;
            }
            
            public function setPagAtual($parametro_pagAtual) {
                $this->pagAtual = $parametro_pagAtual;
            }
            
            public function setAberto($parametro_aberto) {
                $this->aberto = $parametro_aberto;
            }
            
            public function setLeitor($parametro_leitor) {
                $this->leitor = $parametro_leitor;
            }
        
        //__MÉTODOS ACESSORES
            public function getTitulo() {
                return $this->titulo;
            }
            
            public function getAutor() {
                return $this->autor;
            }

            public function getTotPaginas() {
                return $this->totPaginas;
            }

            public function getPagAtual() {
                return $this->pagAtual;
            }

            public function getAberto() {
                return $this->aberto;
            }

            public function getLeitor() {
                return $this->leitor;
            }

        //__INTERAÇÕES COM A INTERFACE PUBLICACAO
            public function abrir(){
                $this->aberto = true;
            }
            
            public function fechar(){
                $this->aberto = false;
            }

            public function folhear($p){
                if ($this->pagAtual > $p){
                    $this->pagAtual = 0;
                }else{
                    $this->pagAtual = $p;
                }
            }

            public function avançarPag(){
                $this->pagAtual ++;
            }

            public function voltarPag(){
                $this->pagAtual --;
            }
    }
?>