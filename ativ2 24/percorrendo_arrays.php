<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
    
    <?php
        $registros = array(
        array('titulo'=> 'Titulo notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
        array('titulo'=> 'Titulo notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
        array('titulo'=> 'Titulo notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
        array('titulo'=> 'Titulo notícia 4', 'conteudo' => 'Conteúdo notícia 4'));
        echo '<pre>';
        print_r($registros);
        echo '</pre>';


        $idx = 0; //pega os índices

        echo 'O array possui '. count($registros). ' registros';

        //-------WHILE-------

        /* while($idx < count($registros)){ //parada, count: controla de forma dinâmica quantos arrays temos que percorrer
            echo '<br/>';
            echo '<br/>';
            echo '<br/>';
            echo '<h3>'.($registros[$idx]['titulo']).'</h3>'; //pode encapsular com card
            echo '<p>'.($registros[$idx]['conteudo']).'</p>';
            echo '<hr/>';
            $idx++;
        }
 */
        //-------DO WHILE-------

       /*  do{
            echo '<br/>';
            echo '<br/>';
            echo '<br/>';
            echo '<h3>'.($registros[$idx]['titulo']).'</h3>'; //pode encapsular com card
            echo '<p>'.($registros[$idx]['conteudo']).'</p>';
            echo '<hr/>';
            $idx++;

        }while($idx < count($registros)); */

        for($idx = 0; $idx < count($registros);  $idx++){

            echo '<br/>';
            echo '<br/>';
            echo '<br/>';
            echo '<h3>'.($registros[$idx]['titulo']).'</h3>'; //pode encapsular com card
            echo '<p>'.($registros[$idx]['conteudo']).'</p>';
            echo '<hr/>';

        }

    ?>
</head>
<body>
    
</body>
</html>