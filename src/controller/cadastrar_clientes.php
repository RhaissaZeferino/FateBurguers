<?php
    if(count($_POST) > 0) {
        $codigo = $_POST['codigo'];
        $nome  = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["telefone"];

        try {
            require("../model/conexao.php");

            
            $sql = "INSERT INTO clientes 
                    (codigo, nome, endereco, telefone) 
                    VALUES 
                    (?,?,?,?)";
            $stmt= $conn->prepare($sql);
            
            $stmt->execute([$codigo, $nome, $endereco, $telefone]);
        
            $resultado["msg"] = "Item inserido com sucesso!";
            $resultado["cod"] = 1;
            $resultado["style"] = "alert-success";
        }
        catch(PDOException $e){
            $resultado["msg"] = "Inserção no banco de dados falhou: " . $e->getMessage();
            $resultado["cod"] = 0;
            $resultado["style"] = "alert-danger";
        }
        $conn = null;
    }

    include("../view/index.php");

?>