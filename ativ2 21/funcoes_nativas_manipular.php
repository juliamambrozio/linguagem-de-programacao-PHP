<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para manipular Arrays</title>
    <?php
        /* $array = 'String';
        $retorno = is_array($array); //verifica se é um array

        if($retorno){
            echo 'Sim, é um array';
        }else{
            echo 'Não é um array';
        } */

       /*  $array = [1 => 'a', 7 => 'b', 18 => 'c'];

        echo '<pre>';
        echo print_r($array);
        echo '</pre>';

        $chaves_array = array_keys($array);

        echo '<pre>';
        echo print_r($chaves_array);
        echo '</pre>'; //exibe as chaves (1, 7, 18) */

        /* $array = ['mouse', 'cabo hdmi', 'teclado', 'notebook'];

        echo '<pre>';
        echo print_r($array);
        echo '</pre>'; 

        sort($array); 
        
        echo '<pre>';
        echo print_r($array);
        echo '</pre>'; //true ou false para ordenação em ordem alfabética, alterando até mesmo os índices */

        /* $array = ['mouse', 'cabo hdmi', 'teclado', 'notebook'];

        echo '<pre>';
        echo print_r($array);
        echo '</pre>'; 

        asort($array); 
        
        echo '<pre>';
        echo print_r($array);
        echo '</pre>'; //true ou false para ordenação em ordem alfabética, mantém os índices */

        /* $array = ['mouse', 'cabo hdmi', 'teclado', 'notebook', 'monitor'];

        echo '<pre>';
        echo print_r($array);
        echo count($array); //quantidade de elementos no array

        echo '</pre>';  */

        /* $array1 = ['osx', 'windows'];
        $array2 = array('linux');
        $array3 = ['solaris'];

        $novo_array = array_merge($array1, $array2, $array3); //juntando arrays

        echo '<pre>';
        echo print_r($novo_array);
        echo '</pre>';   */


        /* $string = '26/4/2018';

        $array_retorno = explode('/', $string); //quebrando a / e separando os elementos para cada índice

        echo '<pre>';
        echo $string;
        echo print_r($array_retorno);

        echo $array_retorno[0]. '-'. $array_retorno[1]. '-'. $array_retorno[2];
        echo '</pre>';   */

        $array = ['a', 'b','x', 'y']; //juntando array em uma string

        $string_retorno = implode(',', $array);

        echo $string_retorno;

        



        
    ?>
</head>
<body>
    
</body>
</html>