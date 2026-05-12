<?php
    include ("funcao.php");

    $alunos =[
        "Gabriel" => "6.3",
        "Julia" => "9.5",
        "Fernando" => "8,3",
        "Matheus" => "7,1",
        "Daniel" => "4,2"
    ];

    exibir($alunos);
    ksort($alunos);
    exibir($alunos);

?>