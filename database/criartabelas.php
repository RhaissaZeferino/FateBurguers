<?php



    require "conexao.php";



    $db = "Livros";

    //create database Livros

    //create criar banco de dados

    //drop database Livros

    //drop exclui o banco de dados



    $comandosql = "Create database $db";

    //$comandosql = "Drop database $db";

   

    //metódo executa uma consulta no banco de dados, retorna V ou F

    if($conexao->query($comandosql)){

        echo "Base de dados criada com sucesso!";

    }else{

        echo "Erro ao criar base de dados!";

    }



    //ternário

    // echo $conexao->query($comandosql)?"Base de dados criada com sucesso!":"Erro ao criar base de dados!";



    $conexao->close();




?>