<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
    <?php 
         //COMPARAÇÃO
        /* == (iguais)
        === (idênticos)
        != (diferente)
        <> (diferente)
        !== (não idênticos)
        < (menor)
        > (maior)
        <= (menor igual)
        >= (maior igual)
        */

        //OPERADORES LÓGICOS
        /* AND ou && (E) - > retorna verdadeiro se todos os resultados da expressão são verdadeiros

        OR ou || (OU) - > retorna verdade se pelo menos um é verdadeiro

        XOR -> Apenas se uma das expressões é verdadeira e a outra falsa

        ! -> inverte o resultado retornado pela expressão */

        //() estabelece precedência

        //(v e v) = v
        //v e f = v
        if((22 == 22 && 3 == 3) || 5 != 5){
            echo 'Verdadeiro';
        }else{
            echo 'Falso';
        }
    ?>
</head>
<body>
    
</body>
</html>