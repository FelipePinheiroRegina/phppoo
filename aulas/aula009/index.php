<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 009</title>
</head>
<body>
<?php
    require_once 'pessoa.php';
    require_once 'visitante.php';
    require_once 'aluno.php';
    require_once 'bolsista.php';
    require_once 'tecnico.php';
    require_once 'professor.php';
?> 
<pre>
    <?php 
        $p1 = new Visitante();

        $p1->setNome('Felipe Pinheiro');
        $p1->setIdade(24);
        $p1->setSexo('Masculino');
        
        print_r($p1);

        //-----
        $p2 = new Aluno();

        $p2->setNome('Calabreso');
        $p2->setIdade(34);
        $p2->setSexo('Masculino');
        $p2->setMatricula(123456);
        $p2->setCurso('Informática');

        print_r($p2);

        //-----
        $p3 = new Bolsista();

        $p3->setNome('Jucicleidi');
        $p3->setIdade(27);
        $p3->setSexo('Feminino');
        $p3->setMatricula(987456);
        $p3->setCurso('Moda Feminina');
        $p3->setBolsa('Bolsa Familia');

        print_r($p3);

        //-----
        $p4 = new Tecnico();

        $p4->setNome('Richard');
        $p4->setIdade(36);
        $p4->setSexo('Masculino');
        $p4->setMatricula(645646);
        $p4->setCurso('Engenharia de Software');
        $p4->setRegistro('Engenheiro de Software');

        print_r($p4);

        //-----
        $p5 = new Professor();

        $p5->setNome('Alberto');
        $p5->setIdade(46);
        $p5->setSexo('Masculino');
        $p5->setEspecialidade('Ed. Física');
        $p5->setSalario(3500);
        $p5->receberAumento(500);
        print_r($p5);

        
    ?>
</pre>
</body>
</html>