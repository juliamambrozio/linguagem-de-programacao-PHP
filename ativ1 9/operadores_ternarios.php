<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If e Else - Praticando mais um pouco</title>
    <?php

    $usuario_possui_cartao_loja = true;
    $valor_compra = 400;

    $valor_frete = 50;
    $recebeu_desconto_frete = false;

    $valor_frete_aux = $usuario_possui_cartao_loja == true && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja == true && $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja == true && $valor_compra >= 100 ? 25 : $valor_frete)); 

    $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

    $valor_frete = $valor_frete_aux;

    /* if($usuario_possui_cartao_loja == true && $valor_compra >= 400){
        $valor_frete = 0;
        $recebeu_desconto_frete = true;
    } else if($usuario_possui_cartao_loja == true && $valor_compra >= 300){
        $valor_frete = 10;
        $recebeu_desconto_frete = true;

    }else if($usuario_possui_cartao_loja == true && $valor_compra >= 100){
        $valor_frete = 25;
        $recebeu_desconto_frete = true;
    } */


    ?>
</head>
<body>
    <h1>Detalhes do pedido</h1>
    <p>Possui cartão da loja?

       <!-- OPERADOR TERNÁRIO -->
        <?= $usuario_possui_cartao_loja ==  true ? 'SIM' : 'NÃO'; ?>
       </p>

        <p>Valor da compra: <?= $valor_compra ?></p>

        <p>Recebeu desconto no frete?
       <!-- OPERADOR TERNÁRIO -->
        <?= $recebeu_desconto_frete == true ? 'SIM' : 'NÃO'; ?>
        </p>

        <p>Valor do frete: <?= $valor_frete ?></p>

        <p>Valor total: <?= $valor_frete + $valor_compra?></p>
</body>
</html>