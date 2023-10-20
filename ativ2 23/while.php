<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
    <?php
        $num = 1;
        //operadores de comparaçã / lógicos
        echo 'início do loop';
        while($num < 10){
            
            $num += 1; //critérios de parada
            
           /*  if($num > 100){
                break; //forçando quebra
            } */
            if($num == 2 || $num ==6){
                continue; //pula para a próxima interação, descartando o que estiver a seguir do continue

            }
            echo "$num </br>";
            
        }
        echo 'fim do loop';


    ?>
</head>
<body>
    
</body>
</html>