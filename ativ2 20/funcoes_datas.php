<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para manipular datas</title>

    <?php

    //recuperação da data atual / data corrente

    //echo date('d/m/Y H:i');
    //y = dois digitos
    //dia/mes/ano horas:minutos
    //echo '<br/>';

    //echo date_default_timezone_get();

    //echo '<br/>';

    //date_default_timezone_set('America/Sao_Paulo'); //colocando no horário do Brasil

    //echo date('d/m/Y H:i');

    $data_inicial = '2023-10-18'; //para cálculos é recomendado usar no padrão americano
    $data_final = '2023-11-02';

    //timestamp
    //01-01-1970 -- '2023-10-18' (js - milissegundos / php - segundos)

    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);

    echo $data_inicial . ' - ' . $time_inicial;
    echo '<br/>';
    echo $data_final . ' - ' . $time_final;

    $diferenca_times = $time_final - $time_inicial;
    echo '<br/>'; //data maior a esquerda, ou utiliza abs para converter para positivo
    //$diferenca_times = abs($time_inicial - $time_final) ;

    echo 'A diferença em segundos é:'. $diferenca_times;
    echo '<br/>';
    $segundos_existem_dia = 24 * 60 * 60;
    echo 'Um dia possui: ' . $segundos_existem_dia. ' segundos';

    $diferenca_de_dias_entre_data = $diferenca_times / $segundos_existem_dia; 


    $diferenca_de_dias_entre_data2 = (int)$diferenca_de_dias_entre_data;


    echo '<br/>';


    echo 'A diferença em dias é ' . $diferenca_de_dias_entre_data2;
    ?>
</head>
<body>
    
</body>
</html>