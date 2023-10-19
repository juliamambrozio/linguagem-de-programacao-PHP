<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aray Multidimensional</title>
    <?php
     $lista_coisas = [];

     $lista_coisas['frutas'] = [1 => 'Banana', 2 =>'Maçã', 3 => 'Uva'];

     $lista_coisas['pessoas'] = [1 =>'João',2 =>'José', 3 =>'Maria'];
     
     $lista_coisas['pessoas']['profissão'] = ['dentista'];


     echo '<pre>';
     print_r($lista_coisas);
     echo '</pre>';

     echo '<pre>';
     print_r($lista_coisas['frutas'][3]);
     echo '</pre>';

     echo '<pre>';
     print_r($lista_coisas['pessoas'][2]);
     echo '</pre>';


    ?>
</head>
<body>
    
</body>
</html>