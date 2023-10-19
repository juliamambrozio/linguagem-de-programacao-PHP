<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>False, Null e Empty</title>
    <?php
    //false (true/false) - tipo variável boolean
    //null e empty - valores especiais

    $funcionario1 = null; 
    $funcionario2 = '';
    $funcionario3 = false;

    //valores null (EXCLUSIVAMENTE NULL)

    if(is_null($funcionario1)){
        echo 'sim, a var é null';
    } else{
        echo 'não, a var não é null';
    }

    echo '<br/>';

    if(is_null($funcionario2)){
        echo 'sim, a var é null';
    } else{
        echo 'não, a var não é null';
    }
    echo '<br/>';
    if(is_null($funcionario3)){
        echo 'sim, a var é null';
    } else{
        echo 'não, a var não é null';
    }

    echo '<br/>';
    echo '<hr/>';

    //valores vazio (PODE SER VAZIO E NULL)

    if(empty($funcionario1)){
        echo 'sim, a var é vazio';
    } else{
        echo 'não, a var não é vazio';
    }

    echo '<br/>';

    if(empty($funcionario2)){
        echo 'sim, a var é vazio';
    } else{
        echo 'não, a var não é vazio';
    }
    echo '<br/>';
    if(empty($funcionario3)){
        echo 'sim, a var é vazio';
    } else{
        echo 'não, a var não é vazio';
    }

    ?>
</head>
<body>
    
</body>
</html>