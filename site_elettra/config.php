<?php
    $db_host = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'database_elettra';

    $conexao = new mysqli($db_host, $dbUsername, $dbPassword, $dbName);

    //if($conexao->connect_errno){
    //    echo "Erro";
   // }
    //else{
       // echo "Conexão realizada com sucesso!";
   // }
    
?>