<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php
        //void
        function exibirBoasVindas(){
            echo 'Seja bem-vindo! </ br>';
        }

        exibirBoasVindas(); //quando é necessário chamar a função

        //return (com retorno)
        function calcularArea($largura, $comprimento){

            $area = $largura * $comprimento;

            return $area;

        }    

        echo calcularArea(1, 1);
        

        ?>
</body>
</html>