<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Incremento e Decremento</title>
</head>
<body>
    <h3>Pós-incremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";

    echo 'O valor contido em a após o incremento é ' . $a++ . ' <br />'; //aparece depois que é adicionado mais um

    echo 'O valor atualizado é ' . $a . ' <br />'; 

    echo 'O valor contido em a pré-incremento é ' . ++$a . ' <br />'; //aparece durante o instrução
    
    

    ?>

<h3>Pré-decremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";

    echo 'O valor contido em "a" após o decremento é ' . $a-- . ' <br />'; //aparece depois que é adicionado mais um

    echo 'O valor atualizado é ' . $a . ' <br />'; 

    echo 'O valor contido em a pré-decremento é ' . --$a . ' <br />'; //aparece durante o instrução
    
    

    ?>
</body>
</html>