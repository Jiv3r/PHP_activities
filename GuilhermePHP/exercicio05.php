<?php
    include("funcao.php");

    $numero01 = array(10,20,30,40);
    $numero02 = array(50,60,70,80);

    exibir($numero01);
    exibir($numero02);
    $nuemero03 = array_merge($numero01, $numero02);
    exibir($nuemero03);

?>