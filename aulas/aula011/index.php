<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 011</title>
</head>
<body>
    <?php 
    require_once 'mamifero.php';
    require_once 'lobo.php';
    require_once 'cachorro.php';
    ?>
    <main>
        <header>
            <h1>
                Polimorfismo de "sobrecarga", OBS: em php não funciona.
            </h1>
        </header>
        <?php 
            $c = new Cachorro();
            $c->emitirSom();

            $c->reagirFrase('Ola');
            $c->reagirFrase('Bater');

            $c->reagirHora(11, 40);
            $c->reagirHora(15, 30);
            $c->reagirHora(19, 30);

            $c->reagirDono(true);
            $c->reagirDono(false);

            $c->reagirIdadePeso(2, 3);
            $c->reagirIdadePeso(2, 11);

            $c->reagirIdadePeso(15, 5);
            $c->reagirIdadePeso(20, 20);
        ?>
    </main>
</body>
</html>