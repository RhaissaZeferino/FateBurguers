<?php
    if(count($_POST) > 0) {
        // TELA DE CADASTRO DE PRODUTOS
        $codigo = $_POST['codigo'];
        $descricao  = $_POST["descricao"];
        $preco = $_POST["preco"];

        try {
            require("conexao.php");

            
            $sql = "INSERT INTO lanches 
                    (codigo, descricao, preco) 
                    VALUES 
                    (?,?,?)";
            $stmt= $conn->prepare($sql);
            
            $stmt->execute([$codigo, $descricao, $preco]);
        
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

    include("index.php");

?>