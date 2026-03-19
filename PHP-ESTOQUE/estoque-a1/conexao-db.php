<?php

try {

    $pdo = new PDO('mysql:host=localhost;dbname=delta_estoque','root','');

} catch (Exception $e) {
    
    $arquivo = fopen("erros-a1/erros.log" ,"a");
    fwrite($arquivo, "[" . date("d/m/Y H:i:s") . "]" . "{$e->getMessage()} Erro ao acessar o banco de dados\n");
    fclose($arquivo);
    exit();
}

