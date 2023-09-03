<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 006 - POO</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            
        }

        header {
            background-color: black;
        }
        
        header > h1, h2{
            color: red;
            font-family: 'Courier New', Courier, monospace;
        }
        
        main {
            font-size: 16px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>ULTIMATE EMOJI COMBAT</h1>
        <h1>UEC</h1>
    </header>
    <main>
        <pre>
        <?php 
            require_once 'lutador.php';
            require_once 'luta.php';
            // Declarando um Array para receber varios lutadores
            $Lutador = array();
            
            $Lutador[0] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            
            $Lutador[1] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);

            $Lutador[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);

            $Lutador[3] = new Lutador("DeadCode", "Austrália", 28, 1.93, 81.6, 13, 0, 2);

            $Lutador[4] = new Lutador("UFCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);

            $Lutador[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
            
            $UEC_1 = new Luta;

            $UEC_1->marcarLuta($Lutador[1], $Lutador[1]);
            

            $UEC_1->lutar();

            
  
        ?>
        </pre>
    </main>
</body>
</html>