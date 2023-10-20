<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while</title>
    <?php

    //Do While: a condição é lida no final da primeira interação
    //While: a primeira coisa que é feita é a verificação da condição

    $x = 1;

        do {
          
            echo "X = $x <br/>";

            $x++;

           
            //continue
            //break

        } while($x < 9); //forçando quebra

        echo '</br>';

        while($x < 9){
            echo 'Entrou no while';

            break;
        }
    ?>
</head>
<body>
    
</body>
</html>