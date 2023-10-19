<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Pesquisa</title>
    <?php
        //in_array() -> true e false para a existência do que está sendo procurado
        //array_search() -> retorna o índice do valor pesquisado caso ele exista

        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        echo '<pre>';

        print_r($lista_frutas);

        echo '</pre>';

        $existe = in_array('Maçã', $lista_frutas);
        //true = 1
        //false = 0

        $existe2 = array_search('Uva', $lista_frutas);
        //quando não é encontrado, volta null (texto vazio)

        echo '<br />';

        if($existe2 != null ){ //não precisa escrever true ou false
            echo 'Sim, o valor pesquisado existe no Array';
        }else{
            echo 'Não, o valor pesquisado existe  não no Array';
        }

        //-----------------------------------------

        $lista_coisas = ['frutas' => $lista_frutas,
        'pessoas' => ['João', 'Maria']];
        //atribuindo array no índice
        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo in_array('Uva', $lista_coisas['frutas']);

        echo '<br />';

        echo array_search('João', $lista_coisas['pessoas']);

    ?>
</head>
<body>
    
</body>
</html>