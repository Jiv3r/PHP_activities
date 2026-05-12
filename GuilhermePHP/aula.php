<?php
    include("funcao.php");

    $estados_brasileiros = [

        'SP' => 'sao paulo',
        'RJ' => 'Rio de janeiro',
        'DF' => 'brasilia',
        'TO' => 'Tocatins'
    ];
    $dados_pessoais = [
    "NOME" => 'GUILHERME',
    'CURSANDO' => 'ADS',
    'CELULAR' => '(61) 99023432940'        
    ];
    
    $dados_pessoais['EMAIL'] = 'GUILHERMERORHcadj231@gmail.com';

    echo ($dados_pessoais['NOME']);echo "<br>";

    echo ("CURSANDO:".$dados_pessoais['CURSANDO']);
    
    $dadosA = [

        "NOME" => "MARIA",
        "IDADE" => "20",
        "PROFISSAO" => "CONCURSEIRA"
    ];
    $dadosB = [

        "CPF" => "234.245.561.51",
        "CEL" => "61 947329053",
        "EMAIL" => "maria@gamil.com"
    ];

   $dados_comppletos = array_merge($dadosA,$dadosB);
   $dados_completos2 = ($dadosA + $dadosB);
   exibir ($estados_brasileiros);
    exibir ($dadosA);
    exibir($dadosB);
    exibir($dados_pessoais);  
    exibir($dados_comppletos);
      
?>