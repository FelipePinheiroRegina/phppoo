<?php 
#  LUTADOR
#--------------
# - desafiado 
# - desafiante
# - rounds
# - aprovada
#---------------
# + marcarLuta()
# + lutar()
#----------------
require_once 'lutador.php';
class Luta {
//      LUTA
//---------------------
// ATRIBUTOS
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
//----------------------
// FUNÇÕES
    public function marcarLuta($lutador1, $lutador2) {
        if ($lutador1->getCategoria() == $lutador2->getCategoria() && ($lutador1 != $lutador2)) {
            $this->aprovada = true;
            $this->desafiado = $lutador1;
            $this->desafiante = $lutador2;
        }else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
            echo "<p>ESSA LUTA NÃO PODE ACONTECER! </p>";
        }
    }

    public function lutar() {
        if ($this->aprovada == true) {
            $this->desafiado->apresentar();
            echo "<br><br>";
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch($vencedor) {
                case 0: // EMPATE
                    echo "<p style=\"color: red;\"> EMPATEEEE </p>";
                    echo "<p>-----------------------------------------</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: // LUTADOR DESAFIADO VENCEU
                    echo "<p style=\"color: green;\"> LUTADOR " . $this->desafiado->getNome() . " VENCEU! </p>";
                    echo "<p>-----------------------------------------</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: // LUTADOR DESAFIANTE VENCEU 
                    echo "<p style=\"color: blue;\"> LUTADOR " . $this->desafiante->getNome() . " VENCEU! </p>";
                    echo "<p>-----------------------------------------</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta(); 
                    break; 
            }
        }
    }
}
?>