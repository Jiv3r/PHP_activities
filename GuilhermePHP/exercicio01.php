<?php
    include ("funcao.php");
    $meus_dados = [

        "NOME" => "GUILHERME",
        "IDADE" => "19",
        "CPF" => "293.473.367.67",
        "ALTURA" => "1.70",
        "PESO" => "63KG"
    ];

    array_keys($meus_dados);

    exibir($meus_dados["NOME"]);



?>