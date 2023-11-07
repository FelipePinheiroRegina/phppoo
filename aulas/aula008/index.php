<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 008</title>
    <style>
        header > h1{
            background-color: orange;
            color: blue;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <?php 
    require_once 'pessoa.php';
    require_once 'aluno.php';
    require_once 'professor.php';
    require_once 'funcionario.php';
    ?>
    <header>
        <h1>PINHEIRO'S UNIVERSITY</h1>
    </header>
    <section>
        <pre>
        <?php 
            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new funcionario();

            $p1->setNome('Felipe');
            $p2->setNome('Richard');
            $p3->setNome('Daniel');
            $p4->setNome('Nilda');
            
            $p1->setIdade(24);
            $p2->setIdade(30);
            $p3->setIdade(23);
            $p4->setIdade(50);

            $p1->setSexo('Masculino');
            $p2->setSexo('Masculino');
            $p3->setSexo('Masculino');
            $p4->setSexo('Feminino');

            $p2->setMatricula('11-22-33-44-00');
            $p2->setCurso('Ciência da Computação');

            $p3->setEspecialidade('Mestre em Computadores');
            $p3->setSalario('R$3.550,00');

            $p4->setSetor('Padaria');
            $p4->setTrabalhando('SIM, 14:00 ás 21:00');
            
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);

        ?>
        </pre>
    </section>
</body>
</html>