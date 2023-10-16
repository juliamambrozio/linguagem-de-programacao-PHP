<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar imposto de renda</title>
    <?php

    function calcularImpostodeRenda($salario){

        if($salario <= 1903.98){
            echo 'Isento';
        } else if($salario > 1903.98 && $salario < 2826.65){
            $valor = ($salario * 7.5) / 100;
            echo "Valor a pagar é: $valor";

        }else if($salario > 2826.65 && $salario < 3751.05){
            $valor = ($salario * 15) / 100;
            echo "Valor a pagar é: $valor";

        }else if($salario > 3751.05 && $salario < 4664.68){
            $valor = ($salario * 22.5) / 100;
            echo "Valor a pagar é: $valor";

        }else if($salario >= 4664.68 ){
            $valor = ($salario * 27.5) / 100;
            echo "Valor a pagar é: $valor";

        }


    }

    echo calcularImpostodeRenda(4664.68)


    ?>
</head>
<body>
    
</body>
</html>