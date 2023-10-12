<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
    <?php 
        $nome = 'Júlia';
        $idade = 18;

        echo "Seu nome é " . $nome . "e você tem " . $idade . "anos";
        echo '</br>';
        echo "Seu nome é $nome e você tem $idade anos"; //aspas duplas verificam se tem variáveis dentro do bloco de código, fazendo assim aparecer seu respectivo valor
        echo '</br>';
        echo 'Seu nome é $nome e você tem $idade anos';  //não aparecem seus valores, se caso não tiver nenhuma var concatenada, é sugerido usar aspas simples, pois é mais rápidas de serem lidas
    ?>
</head>
<body>
    
</body>
</html>