<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
    <?php
        $funcionarios = array(
            array('nome:'=>'João', 'salario'=> 2500), 
            array('nome:'=>'Maria', 'salario'=> 2600),
            array('nome:'=>'Júlia', 'salario'=> 2900));

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach($funcionarios as $idx => $funcionario){ //$idx = identifica que é o índice e $nome_funcionario é o valor
            
            
           foreach($funcionario as $idx2 => $valor ){ //exibição do array dentro do array principal

            echo "$idx2 - $valor <br/>";

           }

           echo '<hr>';
        }
    ?>
</head>
<body>
    
</body>
</html>