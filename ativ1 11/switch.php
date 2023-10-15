<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <?php
    $parametro = '1'; 
    //true retorna 1, por isso entra no num 1

    switch($parametro){ //pode ser qualquer tipo de valor (int, float, boolean, string)
        case 1: 
            echo 'Num 1';
        break; //se não existir, irá executar até achar o próximo break

        case 2:
            echo 'Num 2';
        break;

        case 3:
            echo 'Num 3';
        break;

        default:
            echo 'Nenhum';
        break;
    }

    //precisa ser igual e não idêntico, o JS precisa ser idêntico
    ?>
</head>
<body>
    
</body>
</html>