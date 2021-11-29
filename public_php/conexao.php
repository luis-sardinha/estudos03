<?php

$hostname = "localhost";
$usuario = "root";
$senha = "";
$dbname = "sisbank";


try{
    $pdo = new PDO("mysql:host=$hostname;$dbname=dbname", $usuario, $senha);   
    $pdo->exec("SET CHARACTER utf8");

} catch (\Throwable $th) {
    return $th;
    die;
}

return $pdo;
?>
