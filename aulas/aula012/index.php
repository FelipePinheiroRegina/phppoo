<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Youtube</title>
</head>
<body>
    <pre>
        
        <?php
            require_once 'video.php';
            require_once 'pessoa.php';
            require_once 'gafanhoto.php';
            require_once 'visualizacao.php';
        
            $v[0] = new Video('Aula 1 de POO');
            $v[1] = new Video('Aula 12 de PHP');
            $v[2] = new Video('Aula 5 de HTML5');
            
            print_r($v);

            $gafanhoto[0] = new Gafanhoto('Felipe', 24, 'Masculino', 'Fe001');
            $gafanhoto[1] = new Gafanhoto('Daniel', 22, 'Masculino', 'Da001');

            print_r($gafanhoto);

            $assistindo[0] = new Visualizacao($gafanhoto[0], $v[0]); // Felipe assiste POO

            $assistindo[1] = new Visualizacao($gafanhoto[0], $v[2]); // Felipe assiste HTML5

            $assistindo[2] = new Visualizacao($gafanhoto[0], $v[1]); // Felipe assiste PHP

            $assistindo[3] = new Visualizacao($gafanhoto[1], $v[0]); // Daniel assiste POO

            $assistindo[3]->avarliar();
            $assistindo[0]->avaliarNota(7);
            $assistindo[2]->avaliarPorc(81);
            $assistindo[1]->avaliarNota(10);

            print_r($assistindo);

        ?>
    </pre>
</body>
</html>