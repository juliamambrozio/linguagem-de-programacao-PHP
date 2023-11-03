<?php

/* class Produto{
    public string $nome = "";
    public float $valor = 0;

    public function __construct($nome, $valor){
        $this->nome = $nome;

        $this->valor = $valor;
    }
} */

class Produto{

    //DEFININDO DIRETAMENTE NO CONSTRUTOR

    public function __construct(
        public string $nome = "",
        public float $valor = 0)
        {}

}

//combinando técnica com argumentos

$produto = new Produto(valor: 1500, nome: 'Smartphone');

echo "Produto $produto->nome";
echo "<br/>";
echo "Produto $produto->valor";

?>