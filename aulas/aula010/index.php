<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 010</title>
    <style>
        header > h1{
            font-family: 'Courier New', Courier, monospace;
            color: purple;
        }
    </style>
</head>
<body>
    <?php 
        require_once 'mamifero.php';
    ?>
    
    <main>
        <header>
            <h1>Polimorfismo de Sobreposição</h1>
        </header>
        <pre>
            <section>
                <?php 
                    $cachorro = new Mamifero();
                    $cachorro->setPeso(33.9);
                    $cachorro->setIdade(4);
                    $cachorro->setMembros("4 Patas");

                    $cachorro->emetirSom();
                ?>
            </section>
        </pre>
    </main>
</body>
</html>