<?php
    include("funcao.php");

    $produtos = [
        "tomate" => "3.80",
        "café" => "72.90",
        "carne moida" => "33.78",
        "leite" => "8.90"
    ];
    exibir($produtos);
    echo" <br>";
    asort($produtos);
    exibir($produtos);


?>