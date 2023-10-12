<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Constantes</title>
    <?php 
        //VARIÁVEIS QUE NÃO PODEM TER SEU VALOR ALETRADO

        define('BR_URL','endereco_bd_dev'); //para criar var constantes
        define('BD_USUARIO','usuario_dev');
        define('BD_SENHA','senha_dev');


        //.. LÓGICA ..

        //define('BD_URL', 'endereco_bd_url') //não é possível alterar seu valor, ocasionando em um erro

        echo BR_URL . '<br />'; //não precisa do $
        echo BD_USUARIO. '<br />';
        echo BD_SENHA. '<br />';
    ?>
</head>
<body>
    
</body>
</html>