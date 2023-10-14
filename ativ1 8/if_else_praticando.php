<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If e Else - Praticando mais um pouco</title>
    <?php

    $usuario_possui_cartao_loja = true;
    $valor_compra = 1;

    $valor_frete = 50;
    $recebeu_desconto_frete = false;

    if($usuario_possui_cartao_loja == true && $valor_compra >= 400){
        $valor_frete = 0;
        $recebeu_desconto_frete = true;
    } else if($usuario_possui_cartao_loja == true && $valor_compra >= 300){
        $valor_frete = 10;
        $recebeu_desconto_frete = true;

    }else if($usuario_possui_cartao_loja == true && $valor_compra >= 100){
        $valor_frete = 25;
        $recebeu_desconto_frete = true;
    }


    ?>
</head>
<body>
    <h1>Detalhes do pedido</h1>
    <p>Possui cartão da loja?
        <?php
        if($usuario_possui_cartao_loja == true){
            echo 'SIM';
        } else{
            echo 'NÃO';
        }
        ?></p>

        <p>Valor da compra: <?= $valor_compra ?></p>

        <p>Recebeu desconto no frete?
        <?php
        if($recebeu_desconto_frete == true){
            echo 'SIM';
        } else{
            echo 'NÃO';
        }
        ?></p>

        <p>Valor do frete: <?= $valor_frete ?></p>

        <p>Valor total: <?= $valor_frete + $valor_compra?></p>
</body>
</html>