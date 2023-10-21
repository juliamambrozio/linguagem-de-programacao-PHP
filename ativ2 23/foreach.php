<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
    <?php
        $itens = array('sofá', 'mesa','cadeira', 'fogão', 'geladeira');

        echo '<pre>';
        print_r($itens);
        echo '</pre>';

        foreach($itens as $item){ //item = recebe os valores dos índices
            echo "$item"; //não precisa fazer parada, pois ele tem a inteligência para saber quando termina 

            if($item == 'mesa'){
                echo 'Compre uma mesa e ganhe 10% de desconto';
            }

            echo '<br/>';

        }

    ?>
</head>
<body>
    
</body>
</html>