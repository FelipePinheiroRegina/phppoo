<?php 
    // Objeto Pessoa
    // - nome
    // - idade
    // - sexo
    // ________
    // FUNCTION
    // + fazerAniver()

    class Pessoa {
        // ATRIBUTOS    
            private $nome;
            private $idade;
            private $sexo;

        // FUNCTION
            public function fazerAniver() {
                $this->setIdade($this->getIdade() + 1);
            }
        
        // CONSTRUTOR
            function __construct($p_n, $p_i, $p_s)
            {
                $this->setNome($p_n);
                $this->setIdade($p_i);
                $this->setSexo($p_s);
            }    


        // MÉTODOS MODIFICADORES
            public function setNome($parametro_nome) {
                $this->nome = $parametro_nome;
            }
            
            public function setIdade($parametro_idade) {
                $this->idade = $parametro_idade;
            }

            public function setSexo($parametro_sexo) {
                $this->sexo = $parametro_sexo;
            }

        // MÉTODOS ACESSORES
            public function getNome() {
                return $this->nome;
            }
            
            public function getIdade() {
                return $this->idade;
            }

            public function getSexo() {
                return $this->sexo;
            }    

    }
?>