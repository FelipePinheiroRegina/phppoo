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
        require_once 'reptil.php';
        require_once 'peixe.php';
        require_once 'ave.php';
        // ----------

        require_once 'cachorro.php';
        require_once 'canguru.php';
        require_once 'tartaruga.php';
        require_once 'cobra.php';
        require_once 'goldfish.php';
        require_once 'arara.php';
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
                    $cachorro->setCorPelo("Preto");

                    print_r($cachorro);
                    $cachorro->Locomover();
                    $cachorro->Alimentar();
                    $cachorro->emitirSom();

                    $crocodilo = new Reptil();
                    $crocodilo->setPeso(2000);
                    $crocodilo->setIdade(100);
                    $crocodilo->setMembros("4 Patas");
                    $crocodilo->setCorEscama("Verde");
                    
                    print_r($crocodilo);
                    $crocodilo->Locomover();
                    $crocodilo->Alimentar();
                    $crocodilo->emitirSom();
                    
                    $nemo = new Peixe();
                    $nemo->setPeso(10);
                    $nemo->setIdade(2);
                    $nemo->setMembros("2 Nadadeiras");
                    $nemo->setCorEscama("Laranja e Branco");
                    
                    print_r($nemo);
                    $nemo->Locomover();
                    $nemo->Alimentar();
                    $nemo->emitirSom();
                    $nemo->soltarBolha();

                    $papagaio = new Ave();
                    $papagaio->setPeso(5);
                    $papagaio->setIdade(23);
                    $papagaio->setMembros("2 Asas e 2 Pernas");
                    $papagaio->setCorPena("Verde");

                    print_r($papagaio);
                    $papagaio->Locomover();
                    $papagaio->Alimentar();
                    $papagaio->emitirSom();
                    $papagaio->fazerNinho();
                ?>
            </section>
        </pre>
        <hr>
        <header>
            <h1>
                TESTANDO SUBCLASSES DE MAMIFERO, REPTIL, PEIXE, AVE.
            </h1>
        </header>
        <pre>
            <section>
                <?php 

                    $canguru_vermelho = new Canguru();
                    print_r($canguru_vermelho);
                    $canguru_vermelho->usarBolsa();
                    $canguru_vermelho->Locomover();
                    $canguru_vermelho->Alimentar();
                    $canguru_vermelho->emitirSom();

                    $ted = new Cachorro();
                    print_r($ted);
                    $ted->morderOsso();
                    $ted->abanarRabo();
                    $ted->Locomover();
                    $ted->Alimentar();
                    $ted->emitirSom();

                    $ruguinha = new Tartaruga();
                    print_r($ruguinha);
                    $ruguinha->Locomover();
                    $ruguinha->Alimentar();
                    $ruguinha->emitirSom();

                    $giboia = new Cobra();
                    print_r($giboia);
                    $giboia->Locomover();
                    $giboia->Alimentar();
                    $giboia->emitirSom();

                    $filho_nemo = new Peixe();
                    print_r($filho_nemo);
                    $filho_nemo->Locomover();
                    $filho_nemo->Alimentar();
                    $filho_nemo->emitirSom();

                    $quito = new Arara();
                    print_r($quito);
                    $quito->Locomover();
                    $quito->Alimentar();
                    $quito->emitirSom();
                ?>
            </section>
        </pre>
    </main>
</body>
</html>