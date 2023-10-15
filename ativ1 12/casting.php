<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting</title>
    <?php
        //gettype() => retorna o tipo da var

        $valor = true;
        //$valor2 = (float) $valor; //double ou float para passar pro float
        //$valor2 = (string) $valor; 

        //$valor2 = (int) $valor; //integer ou int
        //$valor2 = (string) $valor;

        //$valor2 = (boolean) $valor; //boolean ou bool, retorna qualquer valor válido
        //$valor2 = (string)$valor; //retorna vazio e 1

        echo $valor . ' '. gettype($valor);
        echo '<br/>';
        echo $valor . ' '. gettype($valor2);
    ?>
</head>
<body>
    
</body>
</html>