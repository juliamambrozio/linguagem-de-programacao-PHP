<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
    <?php 
        //String
        $nome = 'Júlia Marques';
        $nome_2 = 'Júlia Marques';

        //int
        $idade = 29;

        //float
        $peso = 70.5;

        //boolean
        $fumante_sn = false; //true (1) ou false (vázio)

        //...lógica

        $idade = 30; //sobrepondo valor e podendo também mudar o tipo da var
        
    ?>

</head>
<body>
    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p> <!-- Tag de impressão -->
    <p>Nome2: <?php echo $nome_2 ?></p>

    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>
</body>
</html>