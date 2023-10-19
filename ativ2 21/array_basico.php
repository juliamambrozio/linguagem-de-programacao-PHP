<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Básico</title>
    <?php 
        //SEQUÊNCIA (numéricos)
        //$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
        //$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva']; //mesmo resultado

        //$lista_frutas[] = 'Abacaxi'; //sem precisar numerar, porque não faz manualmente

        //Para debug
        //echo '<pre>'; //para ficar mais legível
        //var_dump($lista_frutas);
        //echo '</pre>';

        //echo '<hr />';

        //echo '<pre>';
        //print_r($lista_frutas);
        //echo '</pre>'; 

        //echo $lista_frutas[1];

        //ASSOCIATIVOS (criados de forma explícita)

        $lista_frutas = [
            'A' => 'Banana',
            'B' =>  'Maçã', 
            'C' => 'Morango', 'D' => 'Uva'];

            $lista_frutas['E'] = 'Abacaxi'; //Definindo seu valor, por ser feito manualmente


            var_dump($lista_frutas);
            echo '<hr />';
            echo $lista_frutas['E'];
    ?>
</head>
<body>
    
</body>
</html>