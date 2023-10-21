<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MegaSena</title>

    <?php

    $numeros_sorteados = array("Primeiro número" => rand(1, 60), "Segundo número" => rand(1, 60),"Terceiro número" => rand(1, 60),"Quarto número" => rand(1, 60),"Quinto número" => rand(1, 60),"Sexto número" => rand(1, 60));

    print_r($numeros_sorteados);
    echo '<br/>';

    foreach($numeros_sorteados as $idx => $valor_numerico){
        if(!in_array($valor_numerico, $numeros_sorteados)){
            $numeros_sorteados[] = $valor_numerico;
            
        }
        echo "<br/> $idx : $valor_numerico ";
       

    }
    
    ?>

</head>
<body>
    
</body>
</html>