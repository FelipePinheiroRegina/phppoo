<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 005 - POO</title>
</head>
<body>
    <main>
        <h1>Controle Remoto</h1>
        <pre>
        <?php
            require_once 'controleRemoto.php'; 
            $controle = new controleRemoto;
            
            $controle->ligar();
            $controle->desligar();
            $controle->abrirMenu();
            $controle->fecharMenu();
            $controle->maisVolume();
            $controle->menosVolume();
            $controle->ligarMudo();
            $controle->desligarMudo();
            $controle->play();
            $controle->pause();
            
            print_r($controle);
        ?>
        </pre>
    </main>
</body>
</html>