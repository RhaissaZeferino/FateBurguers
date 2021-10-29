<?php
    $host="localhost";
    $user="root";
    $password="";
    $connection= new mysqli($host,$user,$password);
    if($conexao->connect_errno){
        die("Erro: $conexao->connect_errno");
    }
    else{
        echo "Conectado com sucesso!";
    }
    //close();

?>