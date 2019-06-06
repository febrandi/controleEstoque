<?php

    $produtos = [];

    $produtos[] = [
        "nome" => "Camiseta JJ Cale",
        "preço" => 50.99,
        "estoque" => 100,
        "min" => 20,
        "status" => true
    ];

    $produtos[] = [
        "nome" => "Camiseta Dr. John",
        "preço" => 62.50,
        "estoque" => 10,
        "min" => 20,
        "status" => true
    ];

    $produtos[] = [
        "nome" => "Calça Jeans",
        "preço" => 140.00,
        "estoque" => 40,
        "min" => 20,
        "status" => true
    ];

    $produtos[] = [
        "nome" => "Oculos Escuros",
        "preço" => 250.00,
        "estoque" => 30,
        "min" => 20,
        "status" => true
    ];
    // echo "<pre>";

    $produtos[] = [
        "nome" => "Boné Carole King",
        "preço" => 69.99,
        "estoque" => 40,
        "min" => 20,
        "status" => true
    ];

    function totalProduto($produtoPreco, $produtoEstoque){
        $total = $produtoPreco * $produtoEstoque;

        return $total;
    }



    function totalEstoque(){
        global $produtos;
        $soma = 0;

        foreach ($produtos as $key => $produto){
            $soma = $soma + totalProduto($produto['preço'], $produto['estoque']);
        }
        return $soma;
    }

    // var_dump($produtos);

?>
