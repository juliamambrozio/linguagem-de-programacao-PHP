<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para manipular strings</title>

    <?php
    $texto = 'Curso completo de PHP';
    //strtolower (string to lower)
    echo $texto . '<br />';
    echo strtolower($texto); //converte tudo para minúsculo

    echo '<hr>';

     //strtoupper (string to upper)
    echo $texto . '<br />';
    echo strtoupper($texto); //tudo maiúsculo

    echo '<hr>';

    //ucfirst (upper case first)
    echo $texto . '<br />';
    echo ucfirst($texto); //coloca o primeiro caracter maiúsculo

    echo '<hr>';

    //strlen (string length)
    echo $texto . '<br />';
    echo strlen($texto); //conta a quantidade de caracteres de uma string (conta espaços em branco)

    echo '<hr>';

    //str_replace (string replace)
    echo $texto . '<br />';
    echo str_replace('PHP', 'HTML', $texto); //substitui uma cadeia de caracteres, usado por exemplo quando vamos trocar "," por "." em certos países

    echo '<hr>';

    //substr (substring)
    echo $texto . '<br />';
    //'Curso completo de PHP'
    echo substr($texto, 0, 14) . "..."; //retorna a parte de uma string
    //impressão de mais informação que não coube na tela
    ?>
</head>
<body>
    
</body>
</html>