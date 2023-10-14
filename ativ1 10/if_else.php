<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pode doar sangue?</title>
    <?php 
        $idade = 80;
        $peso = 50;

        if($idade >= 16 && $idade <= 69 && $peso >= 50){
            echo 'ATENDE AOS REQUISITOS';

        } else{
            echo 'NÃO ATENDE AOS REQUISITOS';
        }
    ?>
</head>
<body>
    
</body>
</html>