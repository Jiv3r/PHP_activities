<?php
    include("funcao.php");

    $numerico = [
        "A" =>"4",
        "C" => "7",
        "G" =>"9",
        "P" => "5",
        "D" =>"2",
        "Z" => "8"
    ];

    asort($numerico);
    exibir($numerico);

?>