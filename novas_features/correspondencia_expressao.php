<?php
$busca = 21;

switch($busca){ //igualdade (==)
        case '1':
        $retornoSwitch = 'Encontrou o texto 1';
        break;

        case 2:
        $retornoSwitch = 'Encontrou o num 2';
        break;

        default:
        $retornoSwitch = 'Não encontrou';
}
echo "Resultado switch: $retornoSwitch";
echo "<hr>";

/* $retornoMatch = match($busca){ //comparação feita por idêntidade (===)
    '1' => "Encontrou o texto 1",
    1 => "Encontrou o num 1",
    5, '8', 12, 'x' => 'Encontrou os números 5 e 12 ou os textos 8 e x',
    default => 'Não encontrou'
};
 */
//Match com operações lógicas

$retornoMatch = match(true){
    $busca < 20 => 'Encontrou',
    $busca > 20 && $busca <=30 => 'Encontrou um valor maior que 20 e menor que 30',
    default => 'Não encontrou'
};

echo "Resultado match: $retornoMatch";

?>

