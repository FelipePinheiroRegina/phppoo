<?php 
require_once 'lobo.php';

class Cachorro extends Lobo {
    public function emitirSom()
    {
        echo "AU! AU! AU!";
    }

    public function reagirFrase($frase){
        if ($frase == "Toma comida" || $frase == "Ola") {
            echo "<p>Abanar o Rabo!</p>";
        } else {
            echo "<p>Rosnar!</p>";
        }
    }

    public function reagirHora($hora, $min){
        if ($hora < 12) {
            echo "<p>Abanar o Rabo e Latir!</p>";
        } elseif ($hora < 18) {
            echo "<p>Abanar o Rabo!</p>";
        } else {
            echo "<p>Rosnar!</p>";
        }
    }

    public function reagirDono($dono){
        if ($dono == true) {
            echo "<p>Abanar o Rabo e Latir!</p>";
        } else {
            echo "<p>Rosnar!</p>";
        }
    }

    public function reagirIdadePeso($idade, $peso){
        if ($idade < 5) {
            if ($peso < 10) {
                echo "<p>Abanar!</p>";
            } else {
                echo "<p>Rosnar!</p>";
            }
        } else {
            if ($peso < 10) {
                echo "<p>Abanar!</p>";
            } else {
                echo "<p>Latir!</p>";
            }
        }
    }
}
?>