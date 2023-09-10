<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 007 - POO</title>
</head>
<body>
    <?php 
        require_once 'pessoa.php';
        require_once 'livro.php';
    ?>
    <main>
        <header>
            <h1>
                PESSOAS E LIVROS
            </h1>
        </header>
        <pre>
        <?php 
            $p1 = new Pessoa('Felipe Pinheiro', 24, 'Masculino');
            $p2 = new Pessoa('Richard Pinheiro', 30, 'Masculino');
            
            $p1->fazerAniver();
            $p2->fazerAniver();
            print_r($p1);
            print_r($p2);

            $livro1 = new Livro('Mente Milionária', 'T. Harv Eker', 180, 10, true, $p1);

            print_r($livro1);
        ?>
        </pre>
    </main>
</body>
</html>