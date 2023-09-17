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
        require_once 'publicacao.php';
    ?>
    <main>
        <header>
            <h1>
                BOOKS STORE
            </h1>
        </header>
        <pre>
        <?php 
            $p1 = new Pessoa('Felipe Pinheiro', 24, 'Masculino');
            $p2 = new Pessoa('Richard Pinheiro', 30, 'Masculino');
            
            $livro1 = new Livro('Mente Milionária', 'T. Harv Eker', 300, $p1);
            $livro1->abrir();
            $livro1->folhear(5);
            $livro1->avançarPag();
            $livro1->avançarPag();

            $livro1->detalhes();

            $livro2 = new Livro('As 48 leis do poder', 'Robert Greene', 544, $p2);

            $livro2->abrir();
            $livro2->folhear(29);
            $livro2->avançarPag();

            $livro2->detalhes();
        ?>
        </pre>
    </main>
</body>
</html>