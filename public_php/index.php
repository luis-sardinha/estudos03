<?php

include_once("conexao.php");

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Bancario</title>
</head>
<body><pre>
    <h1>Abertura de contas</h1>    
<?php


// fazer de uma forma onde o sistema peça para o usuario digitar os dados. OBS falar com jone//
    require_once 'classes.php';
    $p1 = new ContaBanco();
    $p2 = new ContaBanco();
    $p1->abrirConta("CC");
    $p1->setNumConta(01);
    $p1->setDonoConta("Jubileu");
    $p2->abrirConta("CP");
    $p2->setNumConta(02);
    $p2->setDonoConta("Kreuza");


    $p1->depositar(300);
    $p2->depositar(500);

    $p2->sacar(100);
    


    print_r($p1);
    
    print_r($p2);



?>

</pre></body>
</html>











