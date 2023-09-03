<?php 
//   LUTADOR
// ------------------
// - nome
// - nacionalidade
// - idade 
// - altura
// - peso
// - categoria
// - vitorias
// - derrotas
// - empates
// -----------------
// + apresentar()
// + status()
// + ganharLuta()
// + perderLuta()
// + empatarLuta()

class Lutador {
    // ATRIBUTOS
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    // FUNÇÕES TOP DA BALADA
    public function apresentar() {
        echo "<p>O Lutador <strong>" . $this->getNome() . "</strong> ";
        echo "vem lá do<sup>(a)</sup> <strong>" . $this->getNacionalidade() . "</strong> ";
        echo "ele tem <strong>" . $this->getIdade() . " anos</strong>.</p>";
        echo "<p>Medindo exatamente <strong>" . number_format($this->getAltura(), 2) . "<sup>m</sup></strong> de altura.</p>";
        echo "<p>Pesando exatamente <strong>" . $this->getPeso() . "<sup>KG</sup>.</strong></p>";
        echo "<p>Da categoriaaaa <strong>" . $this->getCategoria() . "</strong> Senhoras e Senhores.</p>";
        echo "<p>Com exatamente <strong>" . $this->getVitorias() . " Vitórias, ";
        echo $this->getDerrotas() . " Derrotas, ";
        echo "Eeeee " . $this->getEmpates() . " Empates.</strong></p>";
        echo "<p>--------------------------------------------------</p>";  
    }

    public function status() {
        echo "<p>Lutador: " . $this->getNome(). "</p>";    
        echo "<p>Peso: " . $this->getCategoria() . "</p>";
        echo "<p>Vitórias: " . $this->getVitorias() . "</p>";
        echo "<p>Derrotas: " . $this->getDerrotas() . "</p>";
        echo "<p>Empates: " . $this->getEmpates() . "</p>"; 
        echo "<p>----------------------------------------</p>";  
    }

    public function ganharLuta() {
        return $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
        return $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta() {
        return $this->setEmpates($this->getEmpates() + 1);
    }

    // CONSTRUTOR
    public function __construct(
    $nome, 
    $naci, 
    $idade, 
    $altura, 
    $peso, 
    $vitorias, 
    $derrotas, 
    $empates)
    {
     $this->setNome($nome);
     $this->setNacionalidade($naci);
     $this->setIdade($idade);
     $this->setAltura($altura);
     $this->setPeso($peso);
     // Categoria automático
     $this->setVitorias($vitorias);
     $this->setDerrotas($derrotas);
     $this->setEmpates($empates);   
    }

    // SETTERS
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function setNacionalidade($naci) {
        $this->nacionalidade = $naci;
    }
    
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    
    public function setAltura($altura) {
        $this->altura = $altura;
    }
    
    public function setPeso($peso) {
        $this->peso= $peso;
        $this->setCategoria();
    }
    
    public function setCategoria() {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Inválido";
        }elseif ($this->getPeso() <= 73.3) {
            $this->categoria = "Leve";
        }elseif ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        }elseif ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        }else {
            $this->categoria = "Inválido";
        }
    }
    
    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }
    
    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }
    
    public function setEmpates($empates) {
        $this->empates = $empates;
    }

    // GETTERS
    public function getNome() {
        return $this->nome;
    }
    
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    
    public function getIdade() {
        return $this->idade;
    }
    
    public function getAltura() {
        return $this->altura;
    }
    
    public function getPeso() {
        return $this->peso;
    }
    
    public function getCategoria() {
        return $this->categoria;
    }
    
    public function getVitorias() {
        return $this->vitorias;
    }
    
    public function getDerrotas() {
        return $this->derrotas;
    }
    
    public function getEmpates() {
        return $this->empates;
    }
}

?>